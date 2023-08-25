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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ceo_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('info_id')->constrained('info')->onDelete('cascade');
            $table->foreignId('org_id')->nullable()->constrained('organizations');
            $table->foreignId('industry_id')->constrained('industries');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};