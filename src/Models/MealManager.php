<?php

require '../src/Utils/Manager.php';

class MealManager extends Manager
{
    public function getMeals() {

        $query = $this->getPDO()->query('SELECT * FROM meal ORDER BY meal.name ASC');
        return $query->fetchAll();

    }

    public function getMeal($id)
    {
        $query = $this->getPDO()->prepare('SELECT * FROM meal WHERE id_meal = :id');
        $query->execute([
            'id' => $id,
        ]);
        return $query->fetch();
    }
}