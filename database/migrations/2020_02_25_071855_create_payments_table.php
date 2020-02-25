<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('transaction_date', 0);
            $table->float('transaction_amount', 0)->default(0);
            $table->string('transaction_code')->unique();
            $table->string('transaction_phone')->nullable();
            $table->string('transaction_name')->nullable();
            $table->string('transaction_status')->nullable();
            $table->boolean('is_used')->default(0);
            $table->string('transaction_reference')->unique();
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
        Schema::dropIfExists('payments');
    }
}
