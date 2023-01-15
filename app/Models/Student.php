<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'address',
        'phone_number',
        'class_id',
        'section_id'
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }


    public function sections()
    {
        return $this->belongsTo(Section::class);
    }

}
