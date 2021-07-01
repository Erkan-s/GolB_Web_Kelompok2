<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content', function(Blueprint $table){
            // $table->TinyInteger('category_id')->unsigned()->after('authors_id');
            // $table->foreign('category_id')->references('id')->on('category')->onDelete('restrict')->onUpdate('cascade');
            $table->dropForeign('content_type_id_foreign');
            $table->dropColumn('type_id', 'title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content', function (Blueprint $table) {
            $table->integer('type_id');
            $table->string('title', 50);
        });

    }
}
