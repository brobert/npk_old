<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('agencies', function (Blueprint $table) {
            //
//             $table->engine = 'MyISAM';

            $table->increments('id');
            $table->string('code', 30)->unique();
            $table->string('name', 255 );
            $table->text('description')->not_null()->default('');
            $table->softDeletes();
            $table->timestamps();

            $table->index('code');
            $table->index('name');
        });

            Schema::create('units', function (Blueprint $table) {
                // columns
            $table->increments('id');
            $table->integer( 'agency_id')->not_null();
            $table->string('name');
            $table->string('description');
            $table->timestamps();

//             $table->foreign('agency_id')->references('id')->on('agencies');
        });

        Schema::create('users', function (Blueprint $table) {
            // storage
            $table->engine = 'MyISAM';
            // columns
            $table->increments( 'id');
            $table->string( 'login')->unique()->not_null();
            $table->string( 'name');
            $table->string( 'second_name');
            $table->string( 'sur_name');
            $table->enum( 'type', ['developer', 'agency', 'admin', 'worker', 'child'])->default('child');
            $table->integer( 'agency_id')->not_null();
            $table->integer( 'unit_id')->not_null();
            $table->string( 'email')->unique();
            $table->string( 'password');
            $table->rememberToken();
            $table->timestamps();

            // indexes
            $table->index( [ 'agency_id' ] );
            $table->index( [ 'unit_id' ] );
            $table->index( [ 'type' ] );

//             // foreign keys
//             $table->foreign('agency_id')->references('id')->on('agencies');
//             $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('units');
        Schema::drop('agencies');
    }
}
