<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_pages', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->text('summary');
            $table->text('content');
            $table->boolean('active')->default(false);
            $table->integer('parent');
            $table->integer('order');
            $table->integer('user_id')->unsigned();
        });

        Schema::table('site_pages', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::create('page_metas', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('page_id')->unsigned();
            $table->string('meta', 255);
            $table->text('value');
        });

        Schema::table('page_metas', function(Blueprint $table){
            $table->foreign('page_id')->references('id')->on('site_pages')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_pages', function(Blueprint $table){
            $table->dropForeign('site_pages_user_id_foreign');
        });
        Schema::drop('site_pages');

        Schema::table('page_meta', function(Blueprint $table){
            $table->dropForeign('page_meta_page_id_foreign');
        });
        Schema::drop('page_meta');
    }
}
