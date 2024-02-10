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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('lastname', 30);
            $table->text('address');
            $table->integer('phone');
            $table->string('email', 30);
            $table->string('password', 30);
            $table->unsignedBigInteger('id_client_status');
            $table->foreign('id_client_status')->references('id')->on('client_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};