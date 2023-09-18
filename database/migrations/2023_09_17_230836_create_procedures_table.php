<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->string('procedure_tipe');
            $table->string('procedure_place');
            $table->string('place');
            $table->string('Expected_implementation_date');
            $table->string('Actual_implementation_date');
            $table->string('statue');
            $table->string('procedure_Administrator');
            $table->string('procedures_Performing_the_required_work');
            $table->string('procedure_result');
            $table->string('Receipt_fee');
            $table->string('procedures_Transfers');
            $table->string('procedure_filming');
            $table->string('procedure_stamp');
            $table->string('procedure_other');
            $table->string('procedure_payment');
            $table->string('procedure_note');
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
        Schema::dropIfExists('procedures');
    }
}
