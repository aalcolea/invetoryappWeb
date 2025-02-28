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
        Schema::table('productos', function (Blueprint $table) {
            $table->integer('cantLoose')->nullable()->after('category_id'); 
            $table->decimal('priceLoose', 10, 2)->nullable()->after('precio');
            $table->decimal('priceRetLoose', 10, 2)->nullable()->after('precioRet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn(['cantLoose', 'priceLoose', 'priceRetLoose']);
        });
    }
};
