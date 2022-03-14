<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('video');
            $table->string('link')->nullable();
            $table->string('caption')->nullable();
            $table->integer('likes');
            $table->timestamps();
        });


        DB::table('likes')->insert(
        array(
            'video' => 1,
            'likes' => 1,
            'link' => 'eNqoQ29rZhU',
            'caption' => 'Promotional Video'
        ));

        DB::table('likes')->insert(
        array(
            'video' => 2,
            'likes' => 1,
            'link' => 'srDugu1qFpA',
            'caption' => 'Employee Video'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
