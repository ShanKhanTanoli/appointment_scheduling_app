<?php

use App\Models\Site;
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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
        });

        Site::create([
            'code' => 'IAD16',
            'slug' => strtoupper(Str::random(20)),
        ]);

        Site::create([
            'code' => 'IAD56',
            'slug' => strtoupper(Str::random(20)),
        ]);

        Site::create([
            'code' => 'IAD57',
            'slug' => strtoupper(Str::random(20)),
        ]);

        Site::create([
            'code' => 'IAD76',
            'slug' => strtoupper(Str::random(20)),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
};
