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
        Schema::create('audits', function (Blueprint $table) {
            $table->id('id');
            $table->string('title')->nullable();
            $table->string('code')->nullable()->unique();
            $table->string('date')->nullable();
            $table->string('divisi')->nullable();
            $table->string('activity')->nullable();
            $table->text('file_surat_tugas')->nullable();
            $table->text('file_nota_dinas')->nullable();
            $table->json('member')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};
