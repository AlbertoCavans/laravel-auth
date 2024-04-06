<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function redDescription($n_chars = 20)
    {
        return(strlen($this->description) > $n_chars) ? substr($this->description, 0, $n_chars) . "..." : $this->description;
    }
}
