<?php

use Illuminate\Support\Str;
use App\Models\TrainingType;
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
        Schema::create('training_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
        });

        TrainingType::create([
            'name' => 'Initial Certification',
            'slug' => strtoupper(Str::random(10)),
        ]);

        TrainingType::create([
            'name' => 'Quarterly Refresher',
            'slug' => strtoupper(Str::random(10)),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_types');
    }
};
