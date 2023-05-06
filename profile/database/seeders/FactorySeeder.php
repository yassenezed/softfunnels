<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::factory(199)->create();
 
        // \App\Models\Profile::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // we can do that as a factory and we can insert staticly
        // DB::table('profiles')->insert([

        //     'name'=> Str::random(20),
        //     // 'name'=> 'Zed',
        //     //we can also do that

        //     'mail'=>Str::random(20)."gmail@com",
        //     'pd'=> Hash::make('password'),
        //     'bio'=> Str::random(255),
        // ]);
        //and php artisan db:seed --class=profileSeeder
    }
}
