<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table='tbl__student';

    public function parentName(){
        return $this->belongsTo(parentTable::class,'Fk_parent_id','id');
     }

    public function courseOpted(){
        return $this->belongsToMany(course::class,'tbl_student_opted_course')->withPivot('is_active','id');
    }

}
