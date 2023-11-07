<?php

namespace App\Controller;

use App\Model\ContactManager;

class CoursController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('Cours/index.html.twig');
    }

    public function about(): string
    {
        return $this->twig->render('Cours/about.html.twig');
    }

    public function contact(): string
    {
        $errors = [];
        $isSuccess = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $request = array_map('trim', $_POST);

            if (empty($request['firstname'])) {
                $errors['firstname'] = 'Invalid firstname';
            }
            if (empty($request['lastname'])) {
                $errors['lastname'] = 'Invalid lastname';
            }
            if (empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email';
            }
            if (empty($request['subject'])) {
                $errors['subject'] = 'Invalid subject';
            }
            if (empty($request['content'])) {
                $errors['content'] = 'Invalid message';
            }
            if (empty($errors)) {
                $contactManager = new ContactManager();
                $isSuccess = $contactManager->insert($request);
            }
        }
        return $this->twig->render('Cours/contact.html.twig', [
            'errors' => $errors,
            'success' => $isSuccess
        ]);
    }
}
