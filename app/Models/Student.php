<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = "code";

    protected $fillable = [
        'code', 'name', 'email', 'password', 'phone', 'subject', 'updated_at', 'created_at','department_num','photo'
    ];
    public function tablet(){
        return $this->hasOne(Tablet::class,'std_id','code')->withDefault(['tablet_name' => 'not found']);
    }
    //عند ال tables 
    // public function student(){
    //     return $this->hasOne(Tablet::class,'std_id','code')->withDefault(['tablet_name' => 'not found']);
    // }
    public function department(){
        return $this->belongsTo(Department::class,'dept_id','department_num')->withDefault(['department_num' => 'not found']);
    }
    public function courses(){
        return $this->belongsToMany(Course::class,'students_courses','std_id','crs_id','code','course_id')->withPivot('degree')->orderByPivot('degree','desc');
    }
    
}
