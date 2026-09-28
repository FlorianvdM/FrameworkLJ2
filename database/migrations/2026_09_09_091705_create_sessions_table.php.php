<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Intentionally left blank: sessions table is created by the default Laravel users migration.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op: this migration exists only to avoid duplicate table creation.
    }
};