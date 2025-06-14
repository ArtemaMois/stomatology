<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string('email');
            $table->string('phone');
            $table->dateTimeTz("date");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
