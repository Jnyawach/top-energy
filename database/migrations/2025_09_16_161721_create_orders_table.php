<?php

use App\Enum\OrderStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
            ->index()->constrained('products')->cascadeOnDelete();
            $table->string('customer_name',100);
            $table->string('company_name',100)->nullable();
            $table->string('phone_number',25);
            $table->string('email',50)->nullable();
            $table->integer('quantity');
            $table->string('uom',100);
            $table->timestamp('preferred_delivery_date')->nullable();
            $table->string('street_address',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('status',50)->default(OrderStatusEnum::PENDING->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
