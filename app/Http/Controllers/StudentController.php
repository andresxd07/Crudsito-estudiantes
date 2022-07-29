<?php


namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Models\student;
use App\Repositories\StudentInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use function is_null;
use function redirect;

class StudentController extends Controller
{
    protected $student;
    public function __construct(StudentInterface $student)
    {
        $this->student = $student;
    }

    public function index(){
        if(View::exists('student.index')){
            return \view('student.index',[
                'students' => $this->student->getAllData()
            ]);
        }
    }

    public function storeOrUpdate(Request $request,$id = null){
        $data = $request->only(['Name', 'Firstname','Secondname','Mail','Photo','Course','Gender','School']);
        if(!is_null($id)){ //update
            $this->student->storeOrUpdate($id,$data);
            return redirect()->route('student.index')->with('message','Ha sido actualizado!');

    }}

    public function view($id){
        if(View::exists('student.edit')){
            return view('student.edit',['student' => $this->student->view($id)]);
        }
    }

    public function delete($id){
        $this->student->delete($id);
        return redirect()->route('student.index')->with('message','Ha sido borrado!');
    }
}
