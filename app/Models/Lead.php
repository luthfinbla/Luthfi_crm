<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'telepon', 'status'];

    public function project()
    {
        return $this->hasOne(Project::class);  
    }
}