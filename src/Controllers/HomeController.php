<?php

namespace App\Controllers;

use App\Utils\AbstractController;
use App\Models\Pokemon;

class HomeController extends AbstractController
{
    public function index()
    {

        $task = new Pokemon(null, null, null, null, null);
                $arrayPokemons = $task->getAll();

        require_once(__DIR__ . '/../Views/home.view.php');
    }
}