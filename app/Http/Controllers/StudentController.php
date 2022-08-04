<?php

namespace App\Http\Controllers;


use App\Repositories\Contracts\StudentRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


/**
 * Class StudentController
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{

    //Public: Hace que la variable/funcion se pueda acceder desde cualquier lugar, por ejemplo, otras clases
    //Private: Hace que la variable/funcion se pueda utlizar desde la misma clase que las define
    //protected: Hace que la vaiablr/funcion se pueda acceder desde la clase que las define y tambien desde cualquier otra clase que herede de ella

    /**
     * @var StudentRepositoryInterface
     */

    /**
     * @param StudentRepositoryInterface $studentRepository
     */
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        if (View::exists('student.index')) {
            return view('student.index',[
                'students' => $this->studentRepository->getAllData() //Retorna la lista de estudiantes
            ]);
        }

    }

      /** * @param Request $request
     * @param int $id
     * @return RedirectResponse
    */
    public function storeOrUpdate(Request $request, int $id)
    {
        $data = $request->only(['name', 'first_name','second_name','mail','photo','course','gender','school']); // TODO corregir nombres de variables
        $this->studentRepository->storeOrUpdate($id, $data);

        return redirect()->route('student.index')->with('message', 'Ha sido creado!')
        ;

    }


     /**
     * @param int $id
     * @return Application|Factory|\Illuminate\Contracts\View\View
     *
     */
    public function view(int $id)
    {
        if (View::exists('student.edit')) {
            return view('student.edit',['student' => $this->studentRepository->view($id)]);
        }
        //Retorna vista de edicion de estudiantes
    }

   /**
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        $this->studentRepository->delete($id);
        return redirect()->route('student.index')->with('message', 'Ha sido borrado!');
        //Elimina un estudiante
    }
}
