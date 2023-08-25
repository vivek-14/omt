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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('dept_id')->nullable()->constrained('departments');
            $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('manager_id')->nullable()->constrained('employees');
            $table->string('position')->nullable();
            $table->date('join_date')->nullable();
            $table->date('leave_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('status')->nullable();
            $table->text('description')->nullable();
            $table->string('national_identity')->nullable();
            $table->string('identity_proof')->nullable();
            $table->string('immigration_status')->nullable();
            $table->string('immigration_proof')->nullable();
            $table->string('social_number')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};