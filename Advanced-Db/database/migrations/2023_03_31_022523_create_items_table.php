<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        try {
            echo "Creating items table";
            Schema::create('items', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('quantity');
                $table->decimal('cost', 10, 2)->default(0);
                $table->decimal ('sell_price', 10, 2)->default(0);
                $table->timestamps();
            });
        } catch (Exception $e) {
            
            echo $e->getMessage();
        }
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
