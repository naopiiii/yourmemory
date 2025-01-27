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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id(); // 自動採番のプライマリキー
            $table->unsignedBigInteger('wl_post_id'); // 外部キー: wl_postsテーブルのID
            $table->string('wishlist'); // ウィッシュリストの内容
            $table->boolean('is_checked')->default(false); // チェック状態 (デフォルト: false)
            $table->timestamps(); // 作成日時(created_at)と更新日時(updated_at)

            // 外部キー制約
            $table->foreign('wl_post_id')->references('id')->on('wl_posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
