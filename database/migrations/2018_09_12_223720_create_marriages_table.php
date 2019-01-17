<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('marriages', function (Blueprint $table) {
            $table->increments('id');
            //groom portion
            $table->string('groom_name');
            $table->string('groom_email');
            $table->string('groom_dob');
            $table->string('groom_nid');
            $table->string('groom_father_name');
            $table->string('groom_father_nid');
            $table->string('groom_status');
            $table->string('married_bride_name')->nullable();
            $table->string('married_bride_nid')->nullable();

            //bride portion
            $table->string('bride_name');
            $table->string('bride_email');
            $table->string('bride_dob');
            $table->string('bride_nid');
            $table->string('bride_father_name');
            $table->string('bride_father_nid');
            $table->string('bride_status');
            $table->string('married_groom_name')->nullable();
            $table->string('married_groom_nid')->nullable();


            $table->string('religion');
            $table->string('mortgage_money')->nullable();
            $table->string('paid_mortgage_money')->nullable();
            $table->string('money_confirmation')->nullable();

            //witness portion
            $table->string('fw_name');
            $table->string('fw_dob');
            $table->string('fw_nid');
            $table->string('fw_father_name');
            $table->string('fw_father_nid');

            //final confirmation portion
            $table->integer('pin');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('_token');
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
        Schema::dropIfExists('marriages');
    }
}
