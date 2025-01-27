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
        Schema::create('pm_posts', function (Blueprint $table) {
            $table->id(); // 自動採番のプライマリキー
            $table->unsignedBigInteger('user_id'); // 外部キー: ユーザーテーブルのID
            $table->string('img'); // 画像のURLまたはファイルパスを保存
            $table->timestamps(); // 作成日時(created_at)と更新日時(updated_at)

            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pm_posts');
    }
};
