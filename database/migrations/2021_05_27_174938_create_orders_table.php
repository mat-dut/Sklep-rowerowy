<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('imie')->nullable(true);
            $table->string('nazwisko')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('numer_telefonu')->nullable(true);
            $table->string('adres_dostawy')->nullable(true);
            $table->string('produkty')->nullable(true);
            $table->string('cena')->nullable(true);;
            $table->string('zrealizowane')->nullable(true);
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
        Schema::dropIfExists('orders');
    }
}
