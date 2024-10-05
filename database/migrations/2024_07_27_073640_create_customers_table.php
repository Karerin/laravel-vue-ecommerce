<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'first_name', length:45);  
            $table->string(column: 'last_name', length:45);
            $table->string(column: 'phone')->nullable();  
            $table->string(column: 'status', length:45)->nullable();  
            $table->timestamps();
            $table->foreignIdFor(model: User::class, column: 'created_by')->nullable();
            $table->foreignIdFor(model: User::class, column: 'updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
