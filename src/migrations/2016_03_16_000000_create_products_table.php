<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateProductsTable extends Migration
    {

        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->decimal('price', 10, 2);
            });
        }

        public function down() {
            Schema::drop('products');
        }

    }
