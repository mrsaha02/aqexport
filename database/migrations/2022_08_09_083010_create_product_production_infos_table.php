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
        Schema::create('product_production_infos', function (Blueprint $table) {
            $table->id();
            $table->string('proid')->nullable();
            $table->string('cutting_planning')->nullable();
            $table->string('cutting_start')->nullable();
            $table->string('cutting_finish')->nullable();
            $table->string('printing_start')->nullable();
            $table->string('printing_finish')->nullable();
            $table->string('sewing_planning')->nullable();
            $table->string('sewing_start')->nullable();
            $table->string('sewing_finish')->nullable();
            $table->string('finishing_start')->nullable();
            $table->string('finishing_finish')->nullable();
            $table->string('shipment_planning')->nullable();
            $table->string('shipment_start')->nullable();
            $table->string('shipment_finish')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('product_production_infos');
    }
};
