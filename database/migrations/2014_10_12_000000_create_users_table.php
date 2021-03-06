<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sure_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('date_of_birth')->date()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ref_from')->nullable();
            $table->string('ref_link')->nullable();
            $table->string('ref_commision')->default(0);
            $table->string('p_ref_commision')->default(0);
            $table->string('traiding_bonous')->default(0);
            $table->string('remaining_balance')->default(0);
            $table->string('wallet_address')->nullable();
            $table->string('next_withdraw_date')->nullable();
            $table->enum('task_status', ['pending', 'completed']);
            $table->integer('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
