<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_users', function (Blueprint $table) {
            $table->id('in_userid');
            $table->string('in_username')->unique();;
            $table->string('in_email')->unique();
            $table->string('in_password');
            $table->string('in_fullname');
            $table->text('in_forgpass');
            $table->enum('in_status', ['Yes', 'No']);
            $table->tinyInteger('in_usertype');
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
        Schema::dropIfExists('in_users');
    }
}
