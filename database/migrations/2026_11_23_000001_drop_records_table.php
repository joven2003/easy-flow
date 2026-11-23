<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('records');
    }

    public function down(): void
    {
        // The old records table is no longer part of the application.
    }
};
