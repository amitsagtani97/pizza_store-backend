<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->increments('id');

      $table->unsignedInteger('user_id')->nullable();
      $table->foreign('user_id')->references('id')->on('users');

      $table->float('total', 8, 2);
      $table->enum('status', ['in_cart', 'in_processing', 'out_for_delivery', 'delivered'])->default('in_cart');

      $table->timestamp('created_at')->useCurrent();
      $table->timestamp('updated_at')->useCurrent();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('orders');
  }
}
