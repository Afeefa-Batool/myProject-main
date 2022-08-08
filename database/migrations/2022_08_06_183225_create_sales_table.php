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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('cardholder_first_name', 50)->default('');
            $table->string('cardholder_last_name', 50)->default('');
            $table->string('cardholder_address', 75)->default('');
            $table->string('cardholder_city', 50)->default('');
            $table->string('cardholder_state', 25)->default('');
            $table->string('cardholder_zip', 15)->default('');
            $table->integer('cardholder_last_4')->default('0');
            $table->integer('customer_id')->default('0');

            $table->integer('product_id')->default('0');
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
        Schema::dropIfExists('sales');
    }
};
