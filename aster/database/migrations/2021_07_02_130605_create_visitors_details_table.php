<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("email");
            $table->string("passport");
            $table->string("name");
            $table->date("dob");
            $table->string("code");
            $table->string("phone");
            $table->string("address")->nullable();
            $table->string("firstssn")->nullable();
            $table->string("lastssn")->nullable();
            $table->string("payment_method")->nullable();
            $table->string("occupation");
            $table->string("status")->default(0);
            $table->softDeletes();
            $table->integer("formupload")->default(0);
            $table->string("iduploaded")->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors_details');

    }
}
