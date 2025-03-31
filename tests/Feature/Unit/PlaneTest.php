<?php

namespace Tests\Feature\Unit;

use Tests\TestCase;
use App\Models\Plane;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlaneTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;

    public function test_if_function_totalSeats_is_correct(): void
    {
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


        $totalSeats = Plane::totalSeats();

        $this->assertEquals(720, $totalSeats);
    }

    public function test_if_function_totalSeats_is_correct_extrem_test_0(): void
    {
        Plane::factory()->create([
            'registration'  => 'JM2121',
            'seats'  => '0',
            'imgplane' => 'img/plane1.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM4545',
            'seats'  => '0',
            'imgplane' => 'img/plane2.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM4747',
            'seats'  => '0',
            'imgplane' => 'img/plane3.png'
        ]);


        $totalSeats = Plane::totalSeats();

        $this->assertEquals(0, $totalSeats);
    }

    public function test_if_function_totalSeats_is_correct_extrem_test_negative(): void
    {
        Plane::factory()->create([
            'registration'  => 'JM2121',
            'seats'  => '100',
            'imgplane' => 'img/plane1.png'
        ]);
        Plane::factory()->create([
            'registration'  => 'JM4545',
            'seats'  => '-100',
            'imgplane' => 'img/plane2.png'
        ]);

        $totalSeats = Plane::totalSeats();

        $this->assertEquals(0, $totalSeats);
    }
}
