<?php

namespace App\Repositories;

use App\Models\Subject;
use App\Repositories\Contracts\SubjectRepositoryInterface;


class SubjectRepository implements SubjectRepositoryInterface 
{
        /**
         * @property int $id
         * @property string $name_subject
         * @property string $teacher
         * @property integer $hours
         * @param string $days
         *
    */

    public function getAllSubjects()
    {
        return Subject:: all();  //Carga todos los estudiantes
    }
    
    public function createSubject(array $data)
    {
        // Student::create([
            //     'name_subject' => $data['name_subject'],
            //     'teacher' => $data['teacher'],
            //     'hours' => $data['hours'],
            //     'days' => $data['days']
            // ]);
            
            $subject = new Subject();
            $subject->name_subject = $data['name_subject'];
            $subject->teacher = $data['teacher'];
            $subject->hours = $data['hours'];
            $subject->days = $data['days'];

            return $subject->save();  //Crea una materia
    }

    public function editSubject(int $id)
    {
        return Subject::find($id); 
    }

    public function updateSubject($id, array $data)
    {
        $subject = Subject::find($id);
        $subject->name_subject = $data['name_subject'];
        $subject->teacher = $data['teacher'];
        $subject->hours = $data['hours'];
        $subject->days = $data['days'];
        
        return $subject->save();  //Actualiza una materia
    }

    public function delete($id){

        return Subject::find($id)->delete();        //Eliminia una materia

    }
}

