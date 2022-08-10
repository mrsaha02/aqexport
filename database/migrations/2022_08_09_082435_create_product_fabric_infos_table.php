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
        Schema::create('product_fabric_infos', function (Blueprint $table) {
            $table->id();
            $table->string('proid')->nullable();
            $table->string('yarn_planning')->nullable();
            $table->string('yarn_start')->nullable();
            $table->string('yarn_finish')->nullable();
            $table->string('knitting_planning')->nullable();
            $table->string('knitting_start')->nullable();
            $table->string('knitting_finish')->nullable();
            $table->string('dyeing_planning')->nullable();
            $table->string('dyeing_start')->nullable();
            $table->string('dyeing_finish')->nullable();
            $table->string('deliver_cutting_planning')->nullable();
            $table->string('deliver_cutting_received')->nullable();
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
        Schema::dropIfExists('product_fabric_infos');
    }
};
