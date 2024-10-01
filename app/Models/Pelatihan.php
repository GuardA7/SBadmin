<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'pelatihans';


    protected $fillable = [
        'name',
        'position',
        'LSP',
        'Kuota',
        'start_date',
        'Harga'
    ];
}
