<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('icon', 100)->nullable();
            $table->timestamps();
        });


        $categories = ['Motori', 'Informatica', 'Elettrodomestici', 'Libri', 'Giochi', 'Sport', 'Immobili', 'Telefoni', 'Arredamento', 'Abbigliamento'];

        // $categories = [
        //     [
        //         'name' => 'Motori',
        //         'icon' => 'fa-car',

        //     ], 'Informatica', 'Elettrodomestici', 'Libri', 'Giochi', 'Sport', 'Immobili', 'Telefoni', 'Arredamento', 'Abbigliamento'
        // ];



        foreach ($categories as $category) {

            Category::create(
                [
                    'name' => $category,
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
