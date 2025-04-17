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
        Schema::table('students', function (Blueprint $table) {
            $table->string('gender')->nullable()->after('classroom_id');
            $table->integer('personal_phone')->unique()->after('gender');
            $table->integer('land_phone')->nullable();
            $table->text('address')->after('personal_phone');
            $table->string('mother_name')->nullable()->after('address');
            $table->integer('mother_phone')->nullable()->after('mother_name');
            $table->string('father_name')->nullable()->after('mother_phone');
            $table->integer('father_phone')->nullable()->after('father_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};