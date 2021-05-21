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
            $table->string('nazwa')->nullable(true);
            $table->string('kategoria')->nullable(true);
            $table->string('dlugosc_rolki')->nullable(true);
            $table->string('wysokosc_rolki')->nullable(true);
            $table->string('srednica_rolki')->nullable(true);
            $table->string('srednica_tulejki')->nullable(true);
            $table->string('ilosc_warstw')->nullable(true);
            $table->string('material')->nullable(true);
            $table->string('perforacja')->nullable(true);
            $table->string('paletyzacja')->nullable(true);
            $table->string('pakowanie')->nullable(true);
            $table->string('gramatura')->nullable(true);
            $table->string('zdjecie')->nullable(true);
            $table->string('cena')->nullable(true);
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
