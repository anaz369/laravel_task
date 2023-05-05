<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table='tbl__course';

    public function students(){
        return $this->belongsToMany(student::class,'tbl_student_opted_course');
    }
}
