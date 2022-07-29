<?php

namespace App\Repositories;

interface StudentInterface
{
    public function getAllData();

    public function storeOrUpdate($id = null,$data);

    public function view($id);

    public function delete($id);
}
