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
        Schema::create('plans', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('admin_id')->nullable();
            $table->string('plan_name');
            $table->integer('profit_percentage');
            $table->integer('trade_timeline');
            $table->integer('min_trade_amount');
            $table->integer('max_trade_amount');
            $table->integer('referral_bonus');
            $table->boolean('professional_signal')->default(0);
            $table->timestamps();
            $table->foreign('admin_id')
                    ->references('id')
                    ->on('admins')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
