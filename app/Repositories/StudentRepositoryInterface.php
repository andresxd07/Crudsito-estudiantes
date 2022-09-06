<?php

namespace App\Repositories;


Interface StudentRepositoryInterface
{
    public function getAllStudents();

    public function createStudent(array $data);

    public function editStudent(int $id);

    public function updateStudent($id, array $data);

    public function delete($id);
}
