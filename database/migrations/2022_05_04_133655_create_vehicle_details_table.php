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
        Schema::create('vehicle_details', function (Blueprint $table) {
            $table->id();
            $table->string('dors');
            $table->string('seats');
            $table->unsignedInteger('vehicle_id')->index();
            $table->timestamps();
            
            $table->foreign('vehicle_id')
            ->references('id')
            ->on('vehicles')
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
        Schema::dropIfExists('vehicle_details');
    }
};
