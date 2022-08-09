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
        Schema::create('product_sampling_infos', function (Blueprint $table) {
            $table->id();
            $table->string('pro_order_no')->nullable();
            $table->string('style_approval')->nullable();
            $table->string('style_comments')->nullable();
            $table->string('plannig_sample')->nullable();
            $table->string('sample_received')->nullable();
            $table->string('pp_sample')->nullable();
            $table->string('pp_comments')->nullable();
            $table->string('production_sample')->nullable();
            $table->string('production_comments')->nullable();

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
        Schema::dropIfExists('product_sampling_infos');
    }
};
