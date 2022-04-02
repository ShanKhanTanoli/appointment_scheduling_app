<?php

use App\Models\Appointment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('alias')->nullable();
            $table->string('slug')->unique()->nullable();

            $table->unsignedBigInteger('site_id')->nullable();
            $table->foreign('site_id')->references('id')
                ->on('sites')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('trainer_id')->nullable();
            $table->foreign('trainer_id')->references('id')
                ->on('trainers')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('training_type_id')->nullable();
            $table->foreign('training_type_id')->references('id')
                ->on('training_types')->onUpdate('cascade')->onDelete('cascade');

            $table->date('date')->nullable();

            $table->time('time')->nullable();

            $table->timestamps();
        });

        for ($user = 1; $user < 11; $user++) {
            Appointment::create([
                'first_name' => 'User' . $user,
                'last_name' => 'User' . $user,
                'alias' => strtoupper(Str::random(20)),
                'slug' => strtoupper(Str::random(20)),
                'site_id' => mt_rand(1, 4),
                'trainer_id' => mt_rand(1, 11),
                'date' => date('2022-4-' . mt_rand(1, 11)),
                'time' => date('H:i'),
                'training_type_id' => mt_rand(1, 2),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
