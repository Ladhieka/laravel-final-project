<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanIdToCommentsAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id');

            $table->foreign('jawaban_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments_answers', function (Blueprint $table) {
            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['jawaban_id']);
        });
    }
}
