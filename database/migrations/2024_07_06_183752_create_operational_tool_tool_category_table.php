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
        Schema::create('operational_tool_tool_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('tool_category_id')->constrained();
            $table->foreignId('operational_tool_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operational_tool_tool_category');
    }
};
