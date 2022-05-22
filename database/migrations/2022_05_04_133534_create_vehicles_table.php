<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('mod_id');
            $table->string('engine');
            $table->string('image');
            $table->boolean('status')->default(false);
            $table->string('color');
            $table->decimal('price',9,2);
            $table->timestamps();
            
            $table->foreign('mod_id')
            ->references('id')
            ->on('mods')
            ->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
