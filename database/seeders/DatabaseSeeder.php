<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plane;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'isAdmin' => true
        ]);
        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@user1.com',
            'isAdmin' => false
        ]);

        Plane::factory()->create([
            'registration'  => 'JM2121',
            'seats'  => '250',
            'imgplane' => 'img/plane1.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM4545',
            'seats'  => '240',
            'imgplane' => 'img/plane2.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM4747',
            'seats'  => '230',
            'imgplane' => 'img/plane3.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM6565',
            'seats'  => '220',
            'imgplane' => 'img/plane4.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM9595',
            'seats'  => '210',
            'imgplane' => 'img/plane5.png'
        ]);
    }
}
