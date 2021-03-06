<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'vardas',
        'pavarde',
        'el_Pastas',
        'gimimo_Data',
        'gimimo_Miestas',
        'trys_Zodziai',
        'pomegiai',
        'kreiptis_galima', 
        'auto_Marke',
        'muzikos_Zanras',
        'filmas',
        'didziausia_Baime',
        'salis_Aplankyti',
    ];
    use HasFactory;
}
