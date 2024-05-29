<?php

require '../src/Utils/Controller.php';

class ErrorController extends Controller
{
    public function errorNotFound()
    {
        http_response_code(404);
        return $this->renderView('error/errorNotFound.html.php');
    }
}