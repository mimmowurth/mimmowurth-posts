<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Category;

return new class extends Migration
{
    // /
    //  * Run the migrations.
    //  */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $categories = ['politica', 'economia', 'food&drink', 'sport', 'intrattenimento', 'tech'];

        foreach($categories as $category)
        {
            Category::create([
                'name' => $category,
            ]);

        }
    }

    // /
    //  * Reverse the migrations.
    //  */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }

    
};