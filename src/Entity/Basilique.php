<?php

namespace App\Entity;

use App\Repository\BasiliqueRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[Table(name: 'basilique')]
#[TargetRepository(name: BasiliqueRepository::class)]

class Basilique {

    private int $id;
    private string $name;
    private string $description;
    private float $taille;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getTaille(): string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): void
    {
        $this->taille = $taille;
    }


}