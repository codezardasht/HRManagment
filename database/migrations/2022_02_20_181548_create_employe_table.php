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
        Schema::create('employe', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->integer('age')->nullable(false);
            $table->decimal('salary','10','2');
            $table->enum('gender',['male', 'female', 'other']);
            $table->timestamp('hired_date')->useCurrent();
            $table->enum('job_title',['manager','employee']);
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
        Schema::dropIfExists('employe');
    }
};
