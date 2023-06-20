<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            ['name' => 'Music'],
            ['name' => 'Art'],
            ['name' => 'Sports'],
            ['name' => 'Collectibles'],
        ];


        foreach ($data as $item) {
            $item['user_id'] = 2;
            Collection::create($item);
        }


    }
}