<?php

namespace App\Repositories;

use App\Models\subject;
use App\Repositories\Contracts\SubjectRepositoryInterface;


class SubjectRepository implements SubjectRepositoryInterface 
{
        /**
         * @param int $id
         * @param string $NameSubject
         * @param string $Teacher
         * @param integer $Hours
         * @param string $Days
         *
    */

    public function getAllSubjects()
    {
        return Subject:: all();  //Carga todos los estudiantes
    }
    
   
    public function createSubject(array $data)
    {
        // Student::create([
            //     'NameSubject' => $data['namesubject'],
            //     'Teacher' => $data['teacher'],
            //     'Hours' => $data['hours'],
            //     'Days' => $data['days']
            // ]);
            
            $subject = new Subject();
            $subject->NameSubject = $data['NameSubject'];
            $subject->Teacher = $data['Teacher'];
            $subject->Hours = $data['Hours'];
            $subject->Days = $data['Days'];

            return $subject->save();  //Crea una materia
    }

    public function editSubject(int $id)
    {
        return Subject::find($id); 
    }

    public function updateSubject($id, array $data)
    {
        $subject = Subject::find($id);
        $subject->NameSubject = $data['NameSubject'];
        $subject->Teacher = $data['Teacher'];
        $subject->Hours = $data['Hours'];
        $subject->Days = $data['Days'];
        
        return $subject->save();  //Actualiza una materia
    }

    public function delete($id){

        return Subject::find($id)->delete();        //Eliminia una materia

    }
}
