<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPhotoAnnonces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonces', function (Blueprint $table) {
            $table->string('photo1')->nullable()->after('text');
                $table->string('photo2')->nullable()->after('photo1');
                    $table->string('photo3')->nullable()->after('photo2');
                        $table->string('photo4')->nullable()->after('photo3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonces', function (Blueprint $table) {
            $table->dropColumn('photo1');
            $table->dropColumn('photo2');
            $table->dropColumn('photo3');
            $table->dropColumn('photo4');
        });
    }
}
