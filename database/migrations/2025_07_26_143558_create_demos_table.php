<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'demos', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'email', 50 )->unique();
            $table->string( 'firstName', 50 );
            $table->string( 'lastName', 50 )->nullable();
            $table->string( 'country' )->default( "Bangladesh" );
            $table->string( 'pincode' )->default( 'abc123' )->invisible();
            $table->timestamp( 'create_at' )->useCurrent();
            $table->timestamp( 'update_at' )->useCurrent()->useCurrentOnUpdate;
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'demos' );
    }
};
