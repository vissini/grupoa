<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    protected $entity;

    public function __construct(Student $student)
    {
        $this->entity = $student;
    }

    public function getAllStudents($per_page)
    {
        return $this->entity->paginate($per_page);
    }

    public function getStudent($id)
    {
        return $this->entity::findOrFail($id);
    }

}
