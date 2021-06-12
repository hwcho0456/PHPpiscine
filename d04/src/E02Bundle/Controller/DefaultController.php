<?php
namespace E02Bundle\Controller;

use E02Bundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();
        $form = $this->createFormBuilder()
            ->add("msg", TextType::class, array("label" => "Message"))
            ->add("time", ChoiceType::class, array(
                "label" => "Include timestamp",
                "choices" => array(
                    "Yes" => true,
                    "No" => false
                ),
                'choices_as_values' => true,
                ))
            ->add("save", SubmitType::class, array("label" => "Log Save"))
            ->getForm();

        $form->handleRequest($request);
        $date = time();
        $stamp = date("Y-m-d h:i:s", $date);
        $data = $form->getData();

        if (file_exists("../".$this->getParameter("fileName")))
        {
            $prev = file_get_contents("../".$this->getParameter("fileName"));
            $prev = explode("\n", $prev);
        }
        else
            $prev = NULL;
        if ($form->isSubmitted() && $form->isValid() && $data["msg"] != NULL) {
            $msg = $data["msg"];
            if ($data["time"] == true)
                $log = $stamp." : ".$msg."\n";
            else
                $log = $msg."\n";
            $file = fopen("../".$this->getParameter("fileName"), "a") or die("cannot open the file");
            fwrite($file, $log);
            fclose($file);
            return $this->redirectToRoute("e02_homepage", ['logs' => $prev]);
        }
        return $this->render('E02Bundle:Default:index.html.twig', ['form' => $form->createView(), 'logs' => $prev]);
    }
}
?>
