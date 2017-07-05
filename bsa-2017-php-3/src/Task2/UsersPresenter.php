<?php

namespace BinaryStudioAcademy\Task2;

class UsersPresenter
{
    private $repository;
    private $usersArray;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getOrderedByLastName(): array
    {
        $this->usersArray = $this->repository->getAll();

        usort($this->usersArray, function(array $a, array $b) : int {
            return $a['last_name'] <=> $b['last_name'];
        });

        return $this->usersArray;
    }
}
