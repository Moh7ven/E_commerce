<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;

    protected $fillable=['nom_admn','prenom_admn','email_admn','numero_admn','password_admn','photo_admn','residence_admn'];
}
