<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('wallet_address');
            $table->string('customer_id');
            $table->string('withdraw_amount');
            $table->enum('status', ['pending','processing','done']);
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
        Schema::dropIfExists('withdraw_list');
    }
}
