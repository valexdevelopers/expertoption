<?php

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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('user_id');
            $table->string('method');
            $table->json('payment_details');
            $table->string('fullanme');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('proof_of_payment')->nullable();
            $table->integer('amount_requested');
            $table->integer('paid_amount')->nullable();
            $table->string('status');
            $table->text('comment')->nullable();
            $table->string('user_identification_type');
            $table->string('user_identification_card');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
