<?php

use App\Models\Trainer;
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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('number')->unique()->nullable();
            $table->string('slug')->unique()->nullable();

            $table->unsignedBigInteger('site_id')->nullable();

            $table->foreign('site_id')->references('id')
            ->on('sites')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('training_type_id')->nullable();

            $table->foreign('training_type_id')->references('id')
            ->on('training_types')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        Trainer::create([
            'name' => 'Aaron Maxwell',
            'email' => 'aaron@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Ben Crutchley',
            'email' => 'ben@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Josh Top',
            'email' => 'josh@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Jake Riddick',
            'email' => 'jake@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Vince Martin',
            'email' => 'vince@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Shaun Darling',
            'email' => 'shanun@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Ryan Mason',
            'email' => 'ryan@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Alex Vaughn',
            'email' => 'alex@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Zachary Sansom',
            'email' => 'zachary@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

        Trainer::create([
            'name' => 'Jason Dean',
            'email' => 'jason@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);


        Trainer::create([
            'name' => 'Justin Hague',
            'email' => 'justin@email.com',
            'number' => mt_rand(0000000000,9999999999),
            'slug' => strtoupper(Str::random(20)),
            'site_id' => mt_rand(1,4),
            'training_type_id' => mt_rand(1,2),
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
};
