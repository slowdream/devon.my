<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', static function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('breast'); // Грудь
            $table->string('appearance'); // Внешность
            $table->string('orientation'); // Ориентация
            $table->string('hair_type'); // Цвет волос
            $table->string('body_type'); // Телосложение

            $table->string('district')->nullable();
            $table->string('street')->nullable();
            $table->string('phone_number')->nullable();
            $table->jsonb('messengers')->nullable();

            $table->time('call_from')->nullable();
            $table->time('call_to')->nullable();
            $table->integer('age_limit_from')->nullable();
            $table->integer('age_limit_to')->nullable();
            $table->integer('contacts_limit')->nullable();

//            $table->integer('apartment_hour_1_price')->nullable();
//            $table->integer('outcall_hour_1_price')->nullable();
//            $table->integer('apartment_hour_2_price')->nullable();
//            $table->integer('outcall_hour_2_price')->nullable();
//            $table->integer('night_apartment_price')->nullable();
//            $table->integer('night_outcall_price')->nullable();
//            $table->integer('express_program_price')->nullable();

            $table->jsonb('outcall_type')->nullable(); // Куда выезжает

            $table->jsonb('price_table')->nullable();

            $table->text('description')->nullable();

            $table->jsonb('services')->nullable();

            $table->integer('user_id');

            $table->timestamps();

            $table->index('services')->algorithm('gin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
