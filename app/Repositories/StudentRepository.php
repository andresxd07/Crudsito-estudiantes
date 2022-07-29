<?php

namespace App\Repositories;
use App\Models\student;

class StudentRepository implements StudentInterface {

public function getAllData(){
    return Student::latest()->get();
}

public function storeOrUpdate($id = null,$data){
    if(is_null($id)){
        $student = new Student();
        $student->name = $data['Name'];
        $student->firstlastname = $data['Firstlastname'];
        $student->secondlastname = $data['Secondlastname'];
        $student->mail = $data['Mail'];
        $student->photo = $data['Photo'];
        $student->course = $data['Course'];
        $student->gender = $data['Gender'];
        $student->school = $data['School'];

        return $student->save();
    }else{
        $student = Student::find($id);
        $student->name = $data['Name'];
        $student->firstlastname = $data['Firstlastname'];
        $student->secondlastname = $data['Secondlastname'];
        $student->mail = $data['Mail'];
        $student->photo = $data['Photo'];
        $student->course = $data['Course'];
        $student->gender = $data['Gender'];
        $student->school = $data['School'];
        return $student->save();
    }
}

public function view($id){
    return Student::find($id);
}
public function delete($id){
    return Student::find($id)->delete();
}
}
