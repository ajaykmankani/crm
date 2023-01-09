<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_infos', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('phone');
            $table->string('show_email');
            $table->string('form_email');
            $table->text('tagline');
            $table->longText('short_intro');
            $table->longText('long_intro');
            $table->longText('privacy_policy');
            $table->longText('terms_&_conditions');
            $table->string('industry');
            $table->text('address');
            $table->string('logo');
            $table->string('whatsapp');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('snapchat');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('vimeo');
            $table->string('linkedin');
            $table->string('pinterest');
            $table->string('tiktok');
            $table->string('reddit');
            $table->string('quora');
            $table->string('koo');
            $table->string('Discord');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_infos');
    }
}
