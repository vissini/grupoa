<?php

namespace App\Repositories\Contracts;

interface StudentRepositoryInterface
{
    public function getAllStudents($per_page);
    public function getStudent($id);

} 