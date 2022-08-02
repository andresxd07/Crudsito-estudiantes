<?php

namespace App\Repositories;

use App\Models\Student;
use Ramsey\Collection\Collection;

/**
 * Class ....
 * @package
 */
interface StudentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllData(): Collection;

    /**
     * Data example:
     * [
     *  'id': "5",
     *  'name': "Julian",
     *  'firstlastname': "Perez",
     *  'secondLastname': "Gonzales",
     *  'mail': "julian@hotmail.com",
     *  'photo': "imagen de julian",
     *  'course': "septimo",
     *  'gender': "hombre",
     *  'school': "Academia de arte sasa"
     * ]
     *
     *
     * @param int|null $id
     * @param array $data
     * @return Student
     */
    public function storeOrUpdate(array $data, int $id = null): Student;

    public function view($id);

    public function delete($id);
}
