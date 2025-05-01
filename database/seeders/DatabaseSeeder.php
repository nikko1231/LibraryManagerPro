<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tbl_user')->truncate(); 
    
        $user = User::create([
            'name' => 'nikko',
            'email' => 'nikkoregulacion@gmail.com',
            'password' => Hash::make('password123'),
            'is_admin' => 1,
            'profile_img' => 'admin.jpg',
        ]);
    }
}
