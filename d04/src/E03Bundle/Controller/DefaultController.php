<?php
namespace E03Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    public function indexAction() {
        $line_count = $this->getParameter("e03.number_of_colors");
        $colors = array("black", "red", "blue", "green");
        $opacity = array();
        for($i = $line_count-1; $i >= 0; $i--) {
            $opacity[$i] = $i / $line_count;
        }
        return $this->render('E03Bundle:Default:index.html.twig', array(
            "color" => $colors,
            "opacity" => $opacity,
            "count" => $line_count
        ));
    }
}
?>
