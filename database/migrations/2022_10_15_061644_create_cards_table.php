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
            $table->string('phone');

            $table->string('greeting');
            $table->text('description');

            // options
            $table->date('birthdate');
            $table->smallInteger('weight');
            $table->smallInteger('height');
            $table->smallInteger('chest');
            $table->string('hair');
//            $table->string('nationality'); // Русская и тп
            $table->string('figure');

            $table->jsonb('service_ids')->default('[]');

            $table->integer('user_id');

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
        Schema::dropIfExists('cards');
    }
};
