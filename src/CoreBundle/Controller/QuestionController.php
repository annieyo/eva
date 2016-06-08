<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Questionnaire;
use CoreBundle\Form\Type\PoolType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function poolAction(Request $request)
    {
        // db manager
        $manager = $this->getDoctrine()->getManager();

        // gets all data from the 'question' db table as objects
        $questions = $manager->getRepository('CoreBundle:Question')->findAll();

        $questionnaires = $manager->getRepository('CoreBundle:Questionnaire')->findAll();


        if (isset($_POST)) {
            var_dump($_POST);
            var_dump($_POST);
        }

/* $form = null;



        if ($form->isSubmitted() && $form->isValid()) {
            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('task_success');
        } */

        return $this->render('CoreBundle:Question:pool.html.twig', array(
            'questions' => $questions,
            'questionnaires' => $questionnaires,
            //'form' => $form->createView(),
        ));
    }
}
