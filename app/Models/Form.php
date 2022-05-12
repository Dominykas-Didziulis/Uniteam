<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        
        'vardas',
        'pavarde',
        'el_Pastas',
        'gimimo_Data',
        'gimimo_Miestas',
        'trys_Zodziai',
        'pomegiai',
        'auto_Marke',
        'muzikos_Zanras',
        'filmas',
        'didziausia_Baime',
        'salis_Aplankyti',
        'kreiptis_galima'  
    
    ];
    use HasFactory;
}
