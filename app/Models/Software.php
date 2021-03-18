<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'required',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
