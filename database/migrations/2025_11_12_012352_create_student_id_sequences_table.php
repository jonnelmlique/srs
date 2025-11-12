<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_id_sequences', function (Blueprint $table) {
            $table->id();
            $table->year('year')->unique();
            $table->unsignedInteger('last_sequence')->default(0);
            $table->timestamps();
        });

        // Insert current year
        DB::table('student_id_sequences')->insert([
            'year' => date('Y'),
            'last_sequence' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('student_id_sequences');
    }
};
