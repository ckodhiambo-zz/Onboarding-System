<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'onboarding_date',
        'supervisor',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function hardwares()
    {
        return $this->belongsToMany(Hardware::class);
    }

    public function softwares()
    {
        return $this->belongsToMany(Software::class);
    }
}
