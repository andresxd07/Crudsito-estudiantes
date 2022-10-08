<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface 
{
        /**
         * @property int $id
         * @property string $name
         * @property string $first_last_name
         * @property string $second_last_name
         * @property string $mail
         * @property string $photo
         * @property string $course
         * @property string $gender
         * @property string $school
         *
    */

    public function getAllStudents()
    {
        return Student:: all();  //Carga todos los estudiantes
    }
    
   
    public function createStudent(array $data)
    {
        // Student::create([
            //     'name' => $data['name'],
            //     'first_last_name' => $data['first_last_name'],
            //     'second_last_name' => $data['second_last_name'],
            //     'mail' => $data['mail']
            //     'photo' => $data['photo'],
            //     'course' => $data['course'],
            //     'gender' => $data['gendeer'],
            //     'school' => $data['school']
            // ]);
            
            $student = new Student();
            $student->name = $data['name'];
            $student->first_last_name = $data['first_last_name'];
            $student->second_last_name = $data['second_last_name'];
            $student->mail = $data['mail'];
            $student->photo = $data['photo'];
            $student->course = $data['course'];
            $student->gender = $data['gender'];
            $student->school = $data['school'];

            return $student->save();  //Crea un estudiante
    }

    public function editStudent(int $id)
    {
        return Student::find($id); 
    }

    public function updateStudent($id, array $data)
    {
        $student = Student::find($id);
        $student->name = $data['name'];
        $student->first_last_name = $data['first_last_name'];
        $student->second_last_name = $data['second_last_name'];
        $student->mail = $data['mail'];
        $student->photo = $data['photo'];
        $student->course = $data['course'];
        $student->gender = $data['gender'];
        $student->school = $data['school'];

        return $student->save();  //Actualiza un estudiante
    }

    public function delete($id){

        return Student::find($id)->delete();        //Eliminia un estudiante

    }
}
