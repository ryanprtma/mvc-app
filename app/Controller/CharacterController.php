<?php

namespace Ryanprtma\MvcApp\Controller;

use Ryanprtma\MvcApp\Base\Controller;

class CharacterController extends Controller
{

    public function index(): void
    {
        $this->view('Home/index', ['title' => 'Home']);
    }

    public function form(): void
    {
        $this->view('Character/form', [
            'title' => 'Character percentage'
        ]);
    }
    public function analyze(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input1 = $_POST['input1'];
            $input2 = $_POST['input2'];
            $count = 0;
            $total = strlen($input1);

            foreach (str_split($input1) as $char) {
                if (stripos($input2, $char) !== false) {
                    $count++;
                }
            }

            $percentage = $total > 0 ? ($count / $total) * 100 : 0;
            $this->view('Character/form', ['percentage' => $percentage]);
        } else {
            $this->view('Character/form');
        }
    }

}