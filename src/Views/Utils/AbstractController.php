<?php

namespace App\Utils;

abstract class AbstractController
{
    protected array $arrayError = [];
    public function redirectToRoute($route)
    {
        http_response_code(303);
        header("Location: {$route} ");
        exit;
    }
}