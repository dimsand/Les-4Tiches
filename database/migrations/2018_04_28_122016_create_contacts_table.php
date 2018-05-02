<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 150);
            $table->string('prenom', 150)->nullable();
            $table->string('email', 250);
            $table->string('subject', 150)->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
            $table->dateTime('last_date_recontact')->nullable();
            $table->string('via_page', 200)->nullable();
            $table->integer('mail_sent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
