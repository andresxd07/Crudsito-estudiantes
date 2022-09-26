<?php

namespace App\Repositories\Contracts;


Interface SubjectRepositoryInterface
{
    public function getAllSubjects();

    public function createSubject(array $data);

    public function editSubject(int $id);

    public function updateSubject($id, array $data);

    public function delete($id);
}
