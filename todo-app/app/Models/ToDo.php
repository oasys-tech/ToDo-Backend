<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    public function toDoDetails()
    {
        return $this->hasMany(TodoDetail::class);
    }
}
