<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu'; // Specify the table name

    protected $fillable = [
        'nama_menu', 'deskripsi', 'foto', 'harga',
    ];
}
