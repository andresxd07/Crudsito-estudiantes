<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface 
{
        /**
         * @property int $id
         * @property string $name
         * @property string $firstlastname
         * @property string $secondlastname
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
            //     'firstlastname' => $data['firstlastname'],
            //     'secondlastname' => $data['secondlastname'],
            //     'mail' => $data['mail']
            //     'photo' => $data['photo'],
            //     'course' => $data['course'],
            //     'gender' => $data['gendeer'],
            //     'school' => $data['school']
            // ]);
            
            $student = new Student();
            $student->Name = $data['Name'];
            $student->Firstlastname = $data['Firstlastname'];
            $student->Secondlastname = $data['Secondlastname'];
            $student->Mail = $data['Mail'];
            $student->Photo = $data['Photo'];
            $student->Course = $data['Course'];
            $student->Gender = $data['Gender'];
            $student->School = $data['School'];

            return $student->save();  //Crea un estudiante
    }

    public function editStudent(int $id)
    {
        return Student::find($id); 
    }

    public function updateStudent($id, array $data)
    {
        $student = Student::find($id);
        $student->Name = $data['Name'];
        $student->Firstlastname = $data['Firstlastname'];
        $student->Secondlastname = $data['Secondlastname'];
        $student->Mail = $data['Mail'];
        $student->Photo = $data['Photo'];
        $student->Course = $data['Course'];
        $student->Gender = $data['Gender'];
        $student->School = $data['School'];

        return $student->save();  //Actualiza un estudiante
    }

    public function delete($id){

        return Student::find($id)->delete();        //Eliminia un estudiante

    }
}

