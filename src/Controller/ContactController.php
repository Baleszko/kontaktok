<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;


class ContactController extends AbstractController
{
    #[Route('/', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form-> handleRequest($request);

        if($form->isSubmitted()){
            if(!empty( $_POST['contact']['name']) &&  !empty( $_POST['contact']['email']) &&  !empty( $_POST['contact']['text'])){              
                
                $name = trim( $_POST['contact']['name']);
                $email = trim($_POST['contact']['email']);
                $text = trim( $_POST['contact']['text']);

                $contact->setName(htmlspecialchars($name));
                $contact->setEmail( htmlspecialchars($email));
                $contact->setText( htmlspecialchars($text));

                $entityManager->persist($contact);
                $entityManager->flush();

                $this->addFlash('success', 'Köszönjük szépen a kérdésedet.
                Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
            }else{

                
                $this->addFlash('fail', "Hiba! Kérjük töltsd ki az
                összes mezőt!"
            );
        }
            
        }

        // $this->addFlash('success', 'Köszönjük szépen a kérdésedet.
        // Válaszunkkal hamarosan keresünk a megadott e-mail címen.');

        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
