<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentattendance extends Model
{
    protected $table = 'studentattendance';
    protected $fillable = ['id', 'id_schedule', 'mssv_student','status0','status1','status2','status3','status4',
    'status5','status6','status7','status8','status9','status10','status11','status12','status13','status14',
    'updated_at','id_class'];
}
