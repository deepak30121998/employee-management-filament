<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_code', 'name'];


    public function employees()
    {
        $this->hasMany(Employee::class);
    }

    public function states()
    {
        $this->hasMany(State::class);
    }
}
