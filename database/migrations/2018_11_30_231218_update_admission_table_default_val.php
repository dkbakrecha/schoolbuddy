<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAdmissionTableDefaultVal extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (Schema::hasTable('academic_enquries')) {
            Schema::table('academic_enquries', function (Blueprint $table) {
                if (Schema::hasColumn('academic_enquries', 'enquiry_date')) {
                    $table->date('enquiry_date')->default(date('Y-m-d'))->change();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
