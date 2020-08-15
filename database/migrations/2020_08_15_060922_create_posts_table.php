<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->comment("标题转化为URL,SEO用")->unique();
            $table->string('title')->comment("文章标题")->index();
            $table->text('content')->comment("文章内容");
            $table->timestamp('published_at')->comment("文章正式发布时间")->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('posts');
    }
}
