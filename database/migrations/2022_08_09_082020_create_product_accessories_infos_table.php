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
        Schema::create('product_accessories_infos', function (Blueprint $table) {
            $table->id();
            $table->string('proid')->nullable();
            $table->string('main_label')->nullable();
            $table->string('care_label')->nullable();
            $table->string('size_label')->nullable();
            $table->string('flag_label')->nullable();
            $table->string('patch_label')->nullable();
            $table->string('hang_tag')->nullable();
            $table->string('hang_tag_string')->nullable();
            $table->string('eyelet')->nullable();
            $table->string('elastic')->nullable();
            $table->string('zipper')->nullable();
            $table->string('poly')->nullable();
            $table->string('gum_tape')->nullable();
            $table->string('carton')->nullable();
            $table->string('others')->nullable();
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
        Schema::dropIfExists('product_accessories_infos');
    }
};
