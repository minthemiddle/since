<?php

namespace Tests\Feature;

use App\Models\Entry;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EntryTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    
    /** @test **/
    public function logged_in_user_can_see_entry_form()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('entries.create'));

        $response->assertStatus(200);
    }
    
    /** @test **/
    public function logged_in_user_can_create_entry()
    {
        $user = User::factory()->create();
        $entry = [
            'title' => fake()->word,
        ];
        
        $response = $this->actingAs($user)->post(route('entries.store'), $entry);
        
        $this->assertDatabaseHas('entries', $entry);

        $response->assertStatus(302);
    }
}
