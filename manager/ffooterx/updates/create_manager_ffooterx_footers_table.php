<?php namespace Manager\Ffooter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFeaturedFooterTable extends Migration
{

    public function up()
    {
        Schema::create('manager_ffooterx_footers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('icon');
            $table->string('disk_name')->nullable();
            $table->string('file_name')->nullable();
            $table->string('link_url')->nullable();
            $table->text('content_html')->nullable();
            $table->integer('sort_order');
            $table->integer('state');
            $table->integer('rotate');
            $table->integer('public');
            $table->timestamps();
        });
       
    }

    public function down()
    {
        Schema::drop('manager_ffooterx_footers');
    }

}
