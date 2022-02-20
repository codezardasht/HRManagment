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
        Schema::create('active_log_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->text('activity')->nullable(false);
            $table->string('api_token')->nullable(false);
            $table->integer('type')->comment('for separting sections');
            $table->integer('VRID')->comment('for section id example type 1 is employee vertual id 2 two is create employe');
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
        Schema::dropIfExists('active_log_users_column');
    }
};
