<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Repositories\Contracts\StudentRepositoryInterface;
use App\Models\Student;

/**
 * Class StudentController
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{

    //Public: Hace que la variable/funcion se pueda acceder desde cualquier lugar, por ejemplo, otras clases
    //Private: Hace que la variable/funcion se pueda utlizar desde la misma clase que las define
    //protected: Hace que la variable/funcion se pueda acceder desde la clase que las define y tambien desde cualquier otra clase que herede de ella

    public function __construct(StudentRepositoryInterface $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        {
            $students =  $this->student->getAllStudents();

            return view('students.index')->with('students', $students); //Retorna todos los estudiantes
        }

    }
    /** *  @param int $id
     * @return RedirectResponse
    */

    public function create()
    {
        return view('students.create'); //Retorna formulario de creacion de  estudiantes
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'first_last_name' => 'required',
            'second_last_name' => 'required',
            'mail' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'course' => 'required',
            'gender' => 'required',
            'school' => 'required'
        ]);

        $data = $request->all();

        if($image = $request->file('photo')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['photo'] = "$name";
        }

        $this->student->createStudent($data);

        return redirect('/students'); //Required and validate
    }

    public function edit($id)
    {
        $student=Student::find($id);
        return view('students.edit')->with('student', $student); //Retorna vista de edicion de estudiantes
    }
     /**
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'first_last_name' => 'required',
            'second_last_name' => 'required',
            'mail' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'course' => 'required',
            'gender' => 'required',
            'school' => 'required'
        ]);

        $data = $request->all();

        if($image = $request->file('photo')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['photo'] = "$name";
        }

        $this->student->updateStudent($id, $data);

        return redirect('/students'); //Actualiza un estudiante
    }

   /**
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        $this->student->delete($id);
        return redirect()->route('students.index'); //Elimina un estudiante

    }
     /**
     * @param int $id
     * @return RedirectResponse
     */
}

// Camel case => firstName  En variables
// Pascal case => FirstName  definion de los nombres de las clasesgit gitZ
// Snake case => first_name Nombres de variables
// kebab case => first-name url

