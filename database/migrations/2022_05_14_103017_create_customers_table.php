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
        Schema::disableForeignKeyConstraints();
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('roles_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string('phone')->nullable();
            $table->string('gender');
            $table->string('status');
            $table->date('brithdate')->nullable();
            $table->integer('address_id')->nullable();
            $table->datetime('inactive_date')->nullable();
            $table->string('inactive_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('customers');
    }
};
