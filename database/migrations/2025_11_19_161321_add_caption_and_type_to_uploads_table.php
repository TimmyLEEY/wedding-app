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
          Schema::table('uploads', function ($table) {
        if (!Schema::hasColumn('uploads', 'caption')) {
            $table->text('caption')->nullable();
        }

        if (!Schema::hasColumn('uploads', 'file_type')) {
            $table->string('file_type', 10)->nullable();
        }
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('uploads', function (Blueprint $table) {
            //
        });
    }
};
