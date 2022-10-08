<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Repositories\Contracts\SubjectRepositoryInterface;
use App\Models\Subject;


/**
 * Class SubjectController
 * @package App\Http\Controllers
 */
class SubjectController extends Controller
{

    public function __construct(SubjectRepositoryInterface $subject)
    {
        $this->subject = $subject;
    }

    public function index()
    {
        {
            $subjects =  $this->subject->getAllSubjects();

            return view('subjects.index')->with('subjects', $subjects); //Retorna todas las materias
        }

    }
    /** * 
     * @return RedirectResponse
    */

    public function create()
    {
        return view('subjects.create'); //Retorna formulario de creacion de  materias
    }

    public function store(Request $request)
    {
        $request->validate([
            'NameSubject' => 'required',
            'Teacher' => 'required',
            'Days' => 'required',
            'Hours' => 'required'
        ]);

        $data = $request->all();
        $this->subject->createSubject($data);

        return redirect('/subjects'); //Required and validate
    }

    public function edit($id)
    {
        $subject=Subject::find($id);
        return view('subjects.edit')->with('subject', $subject); //Retorna vista de edicion de materias
    }
     /**
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'NameSubject' => 'required',
            'Teacher' => 'required',
            'Hours' => 'required',
            'Days' => 'required'
        ]);

        $data = $request->all();
        $this->subject->updateSubject($id, $data);

        return redirect('/subjects'); //Actualiza una materia
    }

   /**
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        $this->subject->delete($id);
        return redirect()->route('subjects.index'); //Elimina una materia

    }
     /**
     * @param int $id
     * @return RedirectResponse
     */
}
