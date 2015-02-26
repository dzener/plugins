<?php namespace Manager\Ffooterx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFootersTable extends Migration
{

    public function up()
    {
        Schema::create('manager_ffooterx_footers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manager_ffooterx_footers');
    }

}
