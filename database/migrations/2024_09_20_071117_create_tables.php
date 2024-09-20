<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });

        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('series_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('processor')->nullable();
            $table->string('graphics')->nullable();
            $table->string('display')->nullable();
            $table->float('weight')->nullable();
            $table->string('camera')->nullable();
            $table->string('connectivity')->nullable();
            $table->timestamps();
        });

        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('interfaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('rams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->constrained()->onDelete('cascade');
            $table->string('sku')->unique();
            $table->decimal('price', 10, 2);
            $table->string('thumbnail')->nullable();
            $table->string('battery')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });

        Schema::create('model_sensor', function (Blueprint $table) {
            $table->foreignId('model_id')->constrained()->onDelete('cascade');
            $table->foreignId('sensor_id')->constrained()->onDelete('cascade');
            $table->primary(['model_id', 'sensor_id']);
        });

        Schema::create('model_interface', function (Blueprint $table) {
            $table->foreignId('model_id')->constrained()->onDelete('cascade');
            $table->foreignId('interface_id')->constrained()->onDelete('cascade');
            $table->primary(['model_id', 'interface_id']);
        });

        Schema::create('product_ram', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('ram_id')->constrained()->onDelete('cascade');
            $table->primary(['product_id', 'ram_id']);
        });

        Schema::create('product_storage', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('storage_id')->constrained()->onDelete('cascade');
            $table->primary(['product_id', 'storage_id']);
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_storage');
        Schema::dropIfExists('product_ram');
        Schema::dropIfExists('model_interface');
        Schema::dropIfExists('model_sensor');
        Schema::dropIfExists('products');
        Schema::dropIfExists('storages');
        Schema::dropIfExists('rams');
        Schema::dropIfExists('interfaces');
        Schema::dropIfExists('sensors');
        Schema::dropIfExists('models');
        Schema::dropIfExists('series');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('brands');
    }
}
