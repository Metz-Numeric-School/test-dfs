<?php

class Manager
{
    protected static $pdo;

    public function getPDO()
    {
        try{
            if(self::$pdo == null){
                self::$pdo = new PDO("mysql:host=localhost;dbname=projetphpdb;charset=utf8mb4",'projetphpdb', 'mH4FRz6oFa9UK2Qqvr3o', [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            }
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            exit;
        }
        return self::$pdo;
    }
}
