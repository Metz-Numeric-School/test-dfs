<?php
require '../src/Utils/View.php';

class Controller
{
    public function renderView($template, $data = [], $layout = 'layout.html.php')
    {
        $view = new View($template, $data, $layout);
        return $view->render();
    }

    public function renderJson($data = [])
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
