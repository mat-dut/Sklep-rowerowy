<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nazwa', 'kategoria', 'dlugosc_rolki', 'wysokosc_rolki', 'srednica_rolki', 'srednica_tulejki', 'ilosc_warstw', 'material', 'perforacja', 'paletyzacja', 'pakowanie', 'gramatura', 'zdjecie', 'cena'];

}
