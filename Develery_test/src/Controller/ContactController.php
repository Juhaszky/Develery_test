<?php 


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ContactController extends AbstractController
{
    /**
     * @route("/contact") 
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager)
    {
        $contact = new User();

        $form = $this->createForm(ContactFormType::class,$contact);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->persist($contact);
            $entityManager->flush();

            return new Response('Köszönjük szépen a kérdésedet.
            Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
        }

        return new Response($twig->render('User/show.html.twig',[
            'User_form' => $form->createView()
        ]));
    }
}