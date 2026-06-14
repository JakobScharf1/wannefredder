<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

final class ContactController extends AbstractController
{
    #[Route('/contactus', name: 'contactus', methods: ['GET', 'POST'])]
    public function index(Request $request, MailerInterface $mailer, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        if ($request->isMethod('POST')) {
            $submittedToken = $request->request->get('_csrf_token');
            if (!$csrfTokenManager->isTokenValid(new CsrfToken('contact_form', $submittedToken))) {
                return new Response('Invalid CSRF token', 403);
            }
            $name = $request->request->get('name');
            $emailInput = $request->request->get('email');
            $subject = $request->request->get('subject');
            $Message = $request->request->get('Message');
    
            // Basic validation (or use Symfony validator)
            if (!$name || !$emailInput || !$subject || !$Message) {
                return new Response('Missing fields', 400);
            }
    
            $email = (new Email())
                ->from($emailInput)
                ->to('your-email@gmail.com') // Change to your email
                ->subject($subject)
                ->html("
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$emailInput}</p>
                    <p><strong>Message:</strong></p>
                    <p>{$Message}</p>
                ");
    
            try {
                $mailer->send($email);
            } catch (\Exception $e) {
                // Log the error and return a response for debugging
                return new Response('Mailer Error: '.$e->getMessage(), 500);
            }
    
            return new Response('Email sent successfully!');
        }

        return $this->render('contactus.html.twig', [
            'contacts' => $this->getContacts(),
        ]);
    }

    private function getContacts(): array
    {
        return [
            [
                'icon' => 'phone', 
                'title' => 'Phone',
                'desc' => 'Start working with Coral that can provide everything',
                'desc1' => '',
                'link' => 'tel:+152534-468-854',
                'name' => '+152 534-468-854',
                'style' => 'col-md-4',
            ],
            [
                'icon' => 'mail', 
                'title' => 'Email',
                'desc' => 'Start working with Coral that can provide everything',
                'desc1' => '',
                'link' => 'mailto:contact@example.com',
                'name' => 'contact@example.com',
                'style' => 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
            ],
            [
                'icon' => 'map-pin', 
                'title' => 'Location',
                'desc' => 'C/54 Northwest Freeway, Suite 558,',
                'desc1' => 'Houston, USA 485',
                'link' => '',
                'name' => 'View on Google map',
                'style' => 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
            ]
        ];
    }
}