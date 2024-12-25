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
        Schema::create('studentresult', function (Blueprint $table) {
            $table->integer('rollno');
            $table->bigInteger('cnic');
            $table->string('name');
            $table->integer('obmarks');
            $table->integer('tmarks');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
