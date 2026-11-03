<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class LoginController extends Controller
{
    public function index(): void
    {
        $this->view('login');
    }

     public function login()
    {
        $email = $this->request()->input('email');
        $password = $this->request()->input('password');

        $result = $this->auth()->attempt($email, $password);

        // DEBUG
        session_write_close();

        $this->redirect('/kinopoisk-lite/home');
    }

    public function logout(): void
    {
        $this->auth()->logout();
        session_write_close();
        $this->redirect('/kinopoisk-lite/login');
    }
}