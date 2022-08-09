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
        Schema::create('product_infos', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_id')->nullable();
            $table->string('order_no')->nullable();
            $table->string('style')->nullable();
            $table->string('product_name')->nullable();
            $table->string('po_issue_date')->nullable();
            $table->string('shipment_date')->nullable();
            $table->string('febric_details')->nullable();
            $table->string('gsm')->nullable();
            $table->string('description')->nullable();
            $table->string('size')->nullable();
            $table->string('quantity')->nullable();
            $table->string('factory_name')->nullable();
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
        Schema::dropIfExists('product_infos');
    }
};
