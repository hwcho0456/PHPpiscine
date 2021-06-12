<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
// json endoder
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use aharen\OMDbAPI;
// custom
use AppBundle\Entity\Player;
use AppBundle\AppBundle;

class GameController extends Controller
{
    public function getMovies() {
        $apikey = "5acc980f";
        // 28b87e56 5c296b6 609e499e 5acc980f
        $omdb = new OMDbAPI($apikey);
        $ret = array();
        while (true) {
            $id = rand(1000000, 9000000);
            $api = $omdb->search("tt".$id, "movie");
            if ($api->data->Response == "True") {
                if ($api->data->Type == "movie") {
                    array_push($ret, json_decode(json_encode($api->data), true));
                }
            }
            if (count($ret) == 10)
                break ;
        }
        return $ret;
    }

    public function fightTrigger() {
        $movies = $this->get('session')->get('movies');
        $i = rand(0, 1);
        if ($i == 1)
            return true;
        else
            return false;
    }

    public function homeAction() {
        $app = new AppBundle;
        $app->setUser();
        $session = $this->get('session');
        $session->set("app", $app);
        if ($this->get('session')->get('user') != NULL || $this->get('session')->get('movies') != NULL) {
            $this->get('session')->remove('user');
            $this->get('session')->remove('movies');
        }
        return $this->render('Game/home.html.twig');
    }

    public function gameAction(Request $req) {
        $session = $this->get('session');
        $app = $this->get('session')->get('app');
        if ($req->get("username") == NULL)  return $this->redirectToRoute("home");
        if ($this->get('session')->get('user') != NULL) {
            if (count($this->get('session')->get('user')->getCapturedList()) >= 10) 
                return $this->redirectToRoute('result', ['r' => "WIN"]);
        }
        if ($this->get('session')->get('movies') == NULL) {
            $movies = $this->getMovies();
        }
        else {
            $movies = $this->get('session')->get('movies');
        }
        
        
        $app->getUser()->setPlayerName($req->get("username"));
        if ($session->get('user') == NULL) {// NEW
            $session->set("user", $app->getUser());
            $session->set("movies", $movies);
        }
        return $this->render('Game/game.html.twig', ["player" => $app->getUser(), "movies" => $movies]);
    }

    public function moveAction(Request $req) {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");

        $user = $this->get('session')->get('user');
        $user->setLocation(['x'=>$req->get('x'),'y'=>$req->get('y')]);
        $this->get('session')->set('user', $user);

        if ($this->fightTrigger() || true) {
            return $this->redirectToRoute('fight');
        }
        return $this->render('Game/game.html.twig', ["player" => $user]);
    }

    public function loadAction() {
        if ($this->get('session')->get('user') != NULL)
            $name = $this->get('session')->get('user')->getPlayerName();
        else
            $name = "";
        $dir = "save";
        $files = array();
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != '.' && $file != '..') array_push($files, $file);
                }
            }
            closedir($dh);
        }
        $save = array();
        foreach ($files as $v) {
            array_push($save, str_replace(".json", "", $v));
        }
        return $this->render('Game/load.html.twig',["save" => $save, "name" => $name]);
    }

    public function loadUserAction(Request $req) {
        if ($this->get('session')->get('user') != NULL)
            if ($this->get('session')->get('user') == $req->get('username'))
                return $this->redirectToRoute("game", ["player" => $user, "username" => $user->getPlayerName()]);
        $dir = "save";
        $files = array();
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != '.' && $file != '..') array_push($files, $file);
                }
            }
            closedir($dh);
        }
        $user = $this->get('session')->get('app')->getUser(); // now user
        $user->initCap();
        foreach ($files as $v) {
            $username = str_replace(".json", "", $v);
            if ($username == $req->get('username')) {
                $userInfo = json_decode(file_get_contents("save/".$v))->user;
                $user->setPlayerName($userInfo->PlayerName);
                $user->setPlayerHP($userInfo->PlayerHP);
                $user->setPlayerAtt(100);
                $user->setLocation(['x' => $userInfo->Location->x, 'y' => $userInfo->Location->y]);
                foreach ($userInfo->CapturedList as $v1) {
                    $user->setCapturedList($v1);
                }
                $movies = json_decode(file_get_contents("save/".$v))->movies;
                $movie_ret = array();
                foreach ($movies as $v2) {
                    array_push($movie_ret, (array)$v2);
                }
                break ;
            }
        }
        // load user
        $this->get('session')->set('user', $user);
        $this->get('session')->set('movies', $movie_ret);
        return $this->redirectToRoute("game", ["player" => $user, "username" => $user->getPlayerName()]);
    }
    
    public function menuAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        return $this->render('Game/menu.html.twig');
    }

    public function saveAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        $user = $this->get('session')->get('user');
        $movies = $this->get('session')->get('movies');

        $save = fopen("save/".$user->getPlayerName().".json", "w") or die("Unable to open file!");
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $user_data = $serializer->normalize($user);
        $data = $serializer->serialize(['user' => $user_data, 'movies' => $movies], 'json');

        fwrite($save, $data);
        fclose($save);
        return $this->redirectToRoute("home");
    }

    public function cancelAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        $user = $this->get('session')->get('user');
        $movies = $this->get('session')->get('movie');
        return $this->render('Game/game.html.twig', ["player" => $user,"movies" => $movies]);
    }

    public function deleteAction(Request $req) {
        if ($req->get('name') == NULL)    return $this->redirectToRoute('load');
        $dir = "save";
        $files = array();
        $delete = false;
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != '.' && $file != '..') {
                        if (!$delete && (str_replace(".json", "", $file) == $req->get('name'))) {
                            unlink($dir."/".$file);
                            $delete = true;
                        } else {
                            array_push($files, $file);
                        }
                    }
                }
            }
            closedir($dh);
        }
        $save = array();
        foreach ($files as $v) {
            array_push($save, str_replace(".json", "", $v));
        }
        return $this->redirectToRoute('load');
    }

    public function fightAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        $user = $this->get('session')->get('user');
        $movies = $this->get('session')->get('movies');
        $rand = rand(0, count($movies)-1);
        $movie = (array)$movies[$rand];
        $movie_att = 10;
        if (count($movie['Ratings']) > 0 && $movie['Ratings'][0] != NULL) {
            $tmp = (array)$movie['Ratings'][0];
            $str_att = explode("/", $tmp["Value"])[0];
            $movie_att = (int)$str_att * 2;
        }
        $movie['att'] = $movie_att;
        $movie['hp'] = 100 ;
        $this->get('session')->set('monster', $movie);
        return $this->render('Game/fight.html.twig', ['user' => $user, "movie" => $movie]);
    }

    public function attackAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        $user = $this->get('session')->get('user');
        $movies = $this->get('session')->get('movies');
        $movie = $this->get('session')->get('monster');
        $random = rand(0, 1);
        // $random = 1;
        // $random = 0;

        if ($random == 1)   $movie['hp'] = $movie['hp'] - (int)$user->getPlayerAtt();
        else                $user->setPlayerHP($user->getPlayerHP() - $movie['att']);
        $this->get('session')->set('monster',$movie);

        if ($user->getPlayerHP() <= 0) {
            return $this->redirectToRoute('result', ['r' => "LOSE"]);
        }
        if ($movie['hp'] <= 0) {
            for($i = 0; $i < count($movies); $i++) {
                if (gettype($movies[$i]) == "object")
                    $movies[$i] = json_decode(json_encode($movies[$i]), true);
                if ($movie["Title"] == $movies[$i]['Title']) {
                    unset($movies[$i]);
                    break ;
                }
            }
            $movies = array_values($movies);
            $user->setCapturedList((array)$movie);
            $user->setPlayerHP(100);
            $this->get('session')->set('user', $user);
            $this->get('session')->set('movies', $movies);
            return $this->redirectToRoute('game', ['username' => $user->getPlayerName()]);
        }
        return $this->render('Game/fight.html.twig', ['user' => $user, "movie" => $movie]);
    }

    public function runAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        $user = $this->get('session')->get('user');
        $movies = $this->get('session')->get('movies');
        $rand = rand(0, 9);
        if (gettype($movies[$rand]) == "object") {
            $movie = json_decode(json_encode($movies[$rand]), true);
        } else {
            $movie = $movies[$rand];
        }
        if ($user->getCapturedList() != NULL) {
        }
        $user->setPlayerHP(100);
        $this->get('session')->set('user', $user);
        return $this->render('Game/fight.html.twig', ['user' => $user, "movie" => $movie]);
    }
    
    public function mymoviemonAction() {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");
        
        $user = $this->get('session')->get('user');
        return $this->render('Game/mymoviemon.html.twig', ['user' => $user]);
    }

    public function resultAction(Request $req) {
        if ($this->get('session')->get('user') == NULL)  return $this->redirectToRoute("home");

        $r = $req->get("r");
        $this->get('session')->remove('app');
        $this->get('session')->remove('user');
        $this->get('session')->remove('movies');
        $this->get('session')->remove('monster');
        return $this->render('Game/result.html.twig', ['r' => $r]);
    }

    // public function deleteFile($name) {
    //     $dir = "save";
    //     $delete = false;
    //     if (is_dir($dir)) {
    //         if ($dh = opendir($dir)) {
    //             while (($file = readdir($dh)) !== false) {
    //                 if ($file != '.' && $file != '..') {
    //                     if (!$delete && (str_replace(".json", "", $file) == $name)) {
    //                         unlink($dir."/".$file);
    //                         $delete = true;
    //                     }
    //                 }
    //             }
    //         }
    //         closedir($dh);
    //     }
    // }
}
