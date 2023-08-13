<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('des');
            $table->text('des1')->nullable();
            $table->text('codes1')->nullable();
            $table->text('des2')->nullable();
            $table->text('codes2')->nullable();
            $table->text('des3')->nullable();
            $table->text('codes3')->nullable();
            $table->text('des4')->nullable();
            $table->text('codes4')->nullable();
            $table->text('des5')->nullable();
            $table->text('codes5')->nullable();
            $table->text('des6')->nullable();
            $table->text('codes6')->nullable();
            $table->text('des7')->nullable();
            $table->text('codes7')->nullable();
            $table->text('des8')->nullable();
            $table->text('codes8')->nullable();
            $table->text('des9')->nullable();
            $table->text('codes9')->nullable();
            $table->text('des10')->nullable();
            $table->text('codes10')->nullable();
            $table->text('des11')->nullable();
            $table->text('codes11')->nullable();
            $table->text('des12')->nullable();
            $table->text('codes12')->nullable();
            $table->text('des13')->nullable();
            $table->text('codes13')->nullable();
            $table->text('des14')->nullable();
            $table->text('codes14')->nullable();
            $table->text('des15')->nullable();
            $table->text('codes15')->nullable();

            $table->integer('admin_id');
            $table->integer('sub_category_id')->nullable();
            $table->string('image')->nullable();
            // seo
            $table->string('meta_title')->nullable();
            $table->text('meta_des')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
