<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_cases', function (Blueprint $table) {
            $table->id();
            $table->string('clint_name');
            $table->string('case_tipe');
            $table->string('case_file_nu');
            $table->string('tipe');
            $table->string('year');
            $table->string('case_nu');
            $table->string('case_inventory_nu');
            $table->string('cost');
            $table->string('summary');
            $table->string('case_subject');
            $table->string('clint_statue');
            $table->string('Place of detention');
            $table->string('case_date');
            $table->string('case_litigation');
            $table->string('case_court');
            $table->string('case_attorney');
            $table->string('adversary_adress');
            $table->string('adversary_name');
            $table->string('adversary_mopile');
            $table->string('adversary_capacity');
            $table->string('adversary_lawer_mopile');
            $table->string('adversary_lawer');
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
        Schema::dropIfExists('legal_cases');
    }
}
