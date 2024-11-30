<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('representasis', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->foreignId('representasi_category_id')->index()->constrained();
            $table->string('kondisi');
            $table->integer('skor_resiko');
            $table->string('rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representasis');
    }
};
