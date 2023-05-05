<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parentTable extends Model
{
    use HasFactory;

    protected $table='tbl_parent';

    public function student(){
        return $this->hasmany(student::class,'Fk_parent_id','id');
    }
}
