<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->string('pname');
        $table->string('pimage');
        $table->string('ptitle');
        $table->integer('quantity')->default(1);
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
