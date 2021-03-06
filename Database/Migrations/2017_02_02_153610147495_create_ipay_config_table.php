<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpayConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipay__config', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // fields
            $table->boolean('status')->nullable();

            $table->string('title',255);

            $table->integer('merchantid');

            $table->integer('accountid');

            $table->string('apikey',255);
            
            $table->string('currency',10);

            $table->boolean('mode')->nullable();

            $table->string('replyurl',255);

            $table->string('confirmationurl',255);

            $table->text('options')->nullable();

            // Your fields
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
        Schema::dropIfExists('ipay__config');
    }
}
