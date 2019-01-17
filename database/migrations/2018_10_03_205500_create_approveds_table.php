<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approveds', function (Blueprint $table) {
            $table->increments('id');
            //groom portion
            $table->string('groom_name');
            $table->string('groom_email');
            $table->string('groom_dob');
            $table->string('groom_nid');
            $table->string('groom_father_name');
            $table->string('groom_father_nid');

            //bride portion
            $table->string('bride_name');
            $table->string('bride_email');
            $table->string('bride_dob');
            $table->string('bride_nid');
            $table->string('bride_father_name');
            $table->string('bride_father_nid');

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
            $table->integer('admin_id');

            $table->string('_token')->nullable();
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
        Schema::dropIfExists('approveds');
    }
}
