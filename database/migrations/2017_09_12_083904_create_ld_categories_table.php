<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLdCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('ld_Categories', function (Blueprint $table) {
            $table->increments('id');
            //$table->primary('id');
            $table->integer('parent_id')->default('0');
            $table->integer('order')->default('0');
            $table->string('title',50);
            $table->timestamps();
            //$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
            //$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
