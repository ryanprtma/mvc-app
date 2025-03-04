<?php

namespace Ryanprtma\MvcApp\Controller;

use Ryanprtma\MvcApp\Base\Controller;
use Ryanprtma\MvcApp\Base\View;
use Ryanprtma\MvcApp\Exception\ValidationException;
use Ryanprtma\MvcApp\Model\User;

class AuthController extends Controller
{

    public function index(): void
    {
        $this->view('Home/index', ['title' => 'Home']);
    }

    public function login(): void
    {
        View::render('User/login', [
            "title" => "Login user"
        ]);
    }

    /**
     */
    public function authenticate(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            $user = new User();
            $user = $user->findByUsername($username);
            if ($user == null) {
                throw new ValidationException("Username or password is wrong");
            }

            if (password_verify($password, $user->password)) {
                $session = $this->session;
                $session->id = uniqid();
                $session->userId = $user->id;
                $session->save($session);

                View::redirect('/');
            } else {
                throw new ValidationException("Id or password is wrong");
            }
        } catch (ValidationException $exception) {
            View::render('User/login', [
                'title' => 'Login user',
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function logout(): void
    {
        $this->session->destroy();
        View::redirect("/");
    }
}