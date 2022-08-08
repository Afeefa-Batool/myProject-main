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
        Schema::create('sale_items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)->default('');
            $table->string('code_number', 40)->default('0');
            $table->integer('product_id')->default('0');
            $table->integer('sale_id')->default('0');
            $table->integer('customer_id')->default('0');
            $table->integer('quantity')->default('0');
            $table->decimal('price', 10, 2)->nullable()->default('0.00');
            $table->decimal('base_price', 10, 2)->nullable()->default('0.00');
            $table->decimal('total_amount', 10, 2)->default('0.00');
            $table->timestamp('validated_at')->nullable();
            $table->integer('date_added')->default('0');

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
        Schema::dropIfExists('sale_items');
    }
};
