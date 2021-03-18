<?php

namespace App\Services;

use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentService
 {
     private $repository;

     public function __construct(StudentRepositoryInterface $repository)
     {
        $this->repository = $repository;    
     }

    public function getAllStudents(int $per_page)
    {
        return $this->repository->getAllStudents($per_page);
    }

    public function getStudent(int $id)
    {
        return $this->repository->getStudent($id);
    }
 }