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
        Schema::create('product_lab_infos', function (Blueprint $table) {
            $table->id();
            $table->string('pro_order_no')->nullable();
            $table->string('plannig_lab')->nullable();
            $table->string('lab_received')->nullable();
            $table->string('color_way')->nullable();
            $table->string('print_stricke_offs')->nullable();
            $table->string('comments_received')->nullable();
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
        Schema::dropIfExists('product_lab_infos');
    }
};
