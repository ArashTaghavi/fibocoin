<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyUserPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_user_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('currency_user_id');
            $table->foreign('currency_user_id')->references('id')->on('currency_users')->onDelete('cascade');
            $table->float('amount');
            $table->integer('status')->default(2);
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
        Schema::dropIfExists('cuurency_user_payments');
    }
}
