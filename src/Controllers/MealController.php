<?php
require '../src/Utils/Controller.php';
require '../src/Models/MealManager.php';

class MealController extends Controller
{

    public function index()
    {
        // Logique de traitement
        $mealManager = new MealManager();
        $meals = $mealManager->getMeals();

        return $this->renderJson($meals);
    }


    public function show()
    {
        if (!empty($_GET['id'])) {
            $mealManager = new MealManager();
            $meal = $mealManager->getMeal($_GET['id']);

            return $this->renderView('meal/show.html.php', [
                'meal' => $meal
            ]);
        } else {
            header('Location: /');
            exit;
        }
    }
}
