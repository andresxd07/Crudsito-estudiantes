<?php

namespace App\Repositories;
use App\Models\student;
use App\Repositories\Contracts\StudentepositoryInterface;

class StudentRepository implements StudentRepositoryInterface {

    /**
     * @param int $id
     * @param string $name
     * @param string $firstlastname
     * @param string $secondlastname
     * @param string $mail
     * @param string $photo
     * @param string $course
     * @param string $gender
     * @param string $school
     *
     */


public function getAllData() {


    return Student::all();
    //Retorna una lista de estudiantes
}



public function storeOrUpdate(array $data, int $id = null)
{

    if (is_null($id)) {
        $student = new Student();
    } else {
        $student = Student::find($id);
    }

    $student->name = $data['name'];
    $student->first_last_name = $data['first_lastname'];
    $student->second_last_name = $data['second_lastname'];
    $student->mail = $data['mail'];
    $student->photo = $data['photo'];
    $student->course = $data['course'];
    $student->gender = $data['gender'];
    $student->school = $data['school'];

    return $student->save();
    //Si no existe el id crea un nuevo estudiante, si existe el id lo busca
}

public function view($id){

    return Student::find($id);
    //Retorna la vista de edicion de estudiantes
}

public function delete($id){

    return Student::find($id)->delete();
    //Eliminia un estudiante
}
}
