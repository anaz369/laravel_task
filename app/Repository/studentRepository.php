<?php
namespace App\Repository;
use App\Models\student;

class studentRepository implements studentRepositoryinterface{
    public function getstudentsDetaails(){
        $students= student::with('parentName','courseOpted')->get();
        return view('index')->with('students',$students);
    }
}

?>
