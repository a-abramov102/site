<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsRss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RssNews', function (Blueprint $table) {
            $table->id();
            $table->string('title', 191);
            $table->text('url')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('create_date');
            $table->text('autor')->nullable();
            $table->text('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RssNews');
    }
}
