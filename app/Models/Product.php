<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['marka', 'nazwa', 'kategoria', 'cena', 'opis', 'plec', 'kolor', 'rozmiar_ramy', 'material_ramy', 'widelec', 'naped', 'przerzutka_przednia', 'przerzutka_tylna', 'manetki', 'mechanizm_korbowy', 'kaseta', 'typ_hamulcow', 'rozmiar_kola', 'opony', 'siodlo', 'pedaly', 'kod_produktu', 'rocznik'];

}
