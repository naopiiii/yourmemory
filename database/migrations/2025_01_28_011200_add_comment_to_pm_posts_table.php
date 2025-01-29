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
        Schema::table('pm_posts', function (Blueprint $table) {
            $table->string('comment')->nullable()->after('img'); // img カラムの後に comment を追加
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pm_posts', function (Blueprint $table) {
            $table->dropColumn('comment');
        });
    }
};

