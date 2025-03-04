<?php

namespace Ryanprtma\MvcApp\Controller;

use Ryanprtma\MvcApp\Base\Controller;
use Ryanprtma\MvcApp\Base\View;
use Ryanprtma\MvcApp\Common\Session;
use Ryanprtma\MvcApp\Config\Database;
use Ryanprtma\MvcApp\Exception\ValidationException;
use Ryanprtma\MvcApp\Model\User;

class UserController extends Controller
{
    public function index(): void
    {
        $this->view('Home/index', ['title' => 'Home']);
    }

    public function register(): void
    {
        $this->view('User/register', [
            'title' => 'Register new User'
        ]);
    }

    public function signUp(): void
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            Database::beginTransaction();
            $user = new User();

            $user = $user->findByUsername($username);
            if ($user != null) {
                throw new ValidationException("User already exists");
            }

            $user = new User();
            $user->id = uniqid();
            $user->username = $username;
            $user->name = $name;
            $user->password = password_hash($password, PASSWORD_BCRYPT);
            $user->save();

            Database::commitTransaction();
            View::redirect('/users/login');
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            View::render('User/register', [
                'title' => 'Register new User',
                'error' => $exception->getMessage()
            ]);
        }
    }
}