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
        Schema::create('category_vehicle', function (Blueprint $table) {
            $table->unsignedInteger('vehicle_id')->index();
            $table->unsignedInteger('category_id')->index();

            $table->foreign('vehicle_id')
              ->references('id')
                ->on('vehicles')
                ->onDelete('cascade');
                
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
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
        Schema::dropIfExists('category_vehicle');
    }
};
