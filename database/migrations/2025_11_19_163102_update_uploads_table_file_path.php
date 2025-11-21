<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('uploads', function (Blueprint $table) {
            // Make file_path a text field so long video paths fit
            $table->text('file_path')->change();
        });
    }

    public function down()
    {
        Schema::table('uploads', function (Blueprint $table) {
            $table->string('file_path', 255)->change();
        });
    }
};
