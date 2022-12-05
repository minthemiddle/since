<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Entry;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.test',
        ]);
        
        Entry::factory()->create([
            'title' => '🧠 Did brain jogging',
            'comment' => 'Doing a puzzle for it',
            // 'due' => 3*30*24*60, // 3 months, 30 days, 24 hours, 60 minutes
        ]);
        
        Entry::factory()->create([
            'title' => '🧃 Drank juice',
            'comment' => 'Quite a bit actually…',
            // 'due' => 21*24*60, // 21 days, 24 hours, 60 minutes
        ]);
    }
}
