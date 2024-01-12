<?php

namespace App\Repository;

use App\Entity\Basilique;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;


#[TargetEntity(name: Basilique::class)]
class BasiliqueRepository extends Repository
{
    public function save(Basilique $basilique) {

        $query = $this->pdo->prepare("INSERT INTO $this->tableName SET name = :name, description = :description, taille = :taille");

        $query->execute([
            ":name" => $basilique->getName(),
            ":description" => $basilique->getDescription(),
            ":taille" => $basilique->getTaille()
        ]);

    }

}