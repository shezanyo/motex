<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->decimal('price', 8, 2); // Assuming price is stored as a decimal
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
