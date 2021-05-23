<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('marka')->nullable(true);
            $table->string('nazwa')->nullable(true);
            $table->string('kategoria')->nullable(true);
            $table->string('cena')->nullable(true);
            $table->string('opis')->nullable(true);
            $table->string('plec')->nullable(true);
            $table->string('kolor')->nullable(true);
            $table->string('rozmiar_ramy')->nullable(true);
            $table->string('material_ramy')->nullable(true);
            $table->string('widelec')->nullable(true);
            $table->string('naped')->nullable(true);
            $table->string('przerzutka_przednia')->nullable(true);
            $table->string('przerzutka_tylna')->nullable(true);
            $table->string('manetki')->nullable(true);
            $table->string('mechanizm_korbowy')->nullable(true);
            $table->string('kaseta')->nullable(true);
            $table->string('typ_hamulcow')->nullable(true);
            $table->string('hamulce')->nullable(true);
            $table->string('rozmiar_kola')->nullable(true);
            $table->string('opony')->nullable(true);
            $table->string('siodlo')->nullable(true);
            $table->string('pedaly')->nullable(true);
            $table->string('waga')->nullable(true);
            $table->string('kod_produktu')->nullable(true);
            $table->string('rocznik')->nullable(true);
            $table->string('zdjecie')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
