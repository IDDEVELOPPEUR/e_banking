<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
//    public function up(): void
//    {
////        Schema::create('transactions', function (Blueprint $table) {
////            $table->id();
////            $table->timestamps();
////        });
//    }

    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('envoyeur_id');
//            $table->unsignedBigInteger('receiver_id')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->integer('montant');
            $table->string('type');
            $table->timestamps();

            $table->foreign('envoyeur_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('set null');
        });
    }

    /**





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
