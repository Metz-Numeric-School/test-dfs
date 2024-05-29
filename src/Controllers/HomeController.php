<?php

require '../src/Utils/Controller.php';
require '../src/Models/MealManager.php';

class HomeController extends Controller
{

    public function index()
    {
        // Logique de traitement
        $mealManager = new MealManager();
        $meals = $mealManager->getMeals();

        // Affichage du template
        return $this->renderView('home/index.html.php', [
            'title' => 'Un titre',
            'meals' => $meals
        ]);

    }

    public function about()
    {

        return $this->renderView('home/about.html.php');
    }

}