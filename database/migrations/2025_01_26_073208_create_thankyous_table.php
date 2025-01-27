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
        Schema::create('thankyous', function (Blueprint $table) {
            $table->id(); // 自動採番のプライマリキー
            $table->unsignedBigInteger('ty_post_id'); // 外部キー: ty_postsテーブルのID
            $table->string('tankyou'); // サンキュー
            $table->timestamps(); // 作成日時(created_at)と更新日時(updated_at)

            // 外部キー制約
            $table->foreign('ty_post_id')->references('id')->on('ty_posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thankyous');
    }
};
