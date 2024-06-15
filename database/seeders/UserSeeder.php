<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "admin",
            'email' => "admin@nuawi.com",
            'password' => 123456, // password
        ]);
        User::factory(4)->has(Article::factory()->count(2))->create();
    }
}
