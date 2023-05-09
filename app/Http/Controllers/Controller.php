<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\student;
use App\Repository\studentRepositoryinterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $student;

    public function __construct(studentRepositoryinterface $student ){
         $this->student=$student;
    }
    public function index(){
       return $this->student->getstudentsDetaails();

    }
        public function updateStatus(Request $request)
        {
            $student = student::find($request->input('student_id'));
            $course = course::find($request->input('course_id'));
            $status = $request->input('status');
            $student->courseOpted()->updateExistingPivot($course->id, ['is_active' => $status]);
            return response()->json(['success' => true,'status' => $status]);
        }

}
