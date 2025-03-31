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
    
    public function test_if_total_seats_is_corect(): void
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

        $result = Plane::totalSeats();
        $this->assertEquals(720, $result);


    }
}
