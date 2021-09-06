<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'Student';
    protected $fillable = ['mssv','name_sv','mail','link_file_dat','sdt'];
}
