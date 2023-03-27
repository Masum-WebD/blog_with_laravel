<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
                "email" => "test@masum.com",
                "name"=>"masum",
                "password"=>bcrypt("12345678")
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->where("email", "=", "test@masum.com")->delete();
    }
};
