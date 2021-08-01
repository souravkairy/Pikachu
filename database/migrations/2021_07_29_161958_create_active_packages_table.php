<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('package_id');
            $table->string('customer_id')->nullable();
            $table->string('package_name');
            $table->string('screen_shot');
            $table->string('txnId');
            $table->enum('status', ['active', 'inactive'])->nullable();
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
        Schema::dropIfExists('active_packages');
    }
}
