<?php

namespace App;

class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);

        include "Views/$view.php";
    }

    protected function res($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}