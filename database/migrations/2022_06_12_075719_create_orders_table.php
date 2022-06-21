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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->from(100);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('status', ['Delivered', 'Not delivered'])->default('Not delivered');
            $table->float('subTotal');
            $table->string('shippingFee');
            $table->float('total');
            $table->double('rate')->default(5);
            $table->string('phone')->unique()->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('orders');
    }
};