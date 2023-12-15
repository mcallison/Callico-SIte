<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FOImbueAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $attributes = [
            ['name' => 'mind', 'type' => 'location'],
            ['name' => 'body', 'type' => 'location'],
            ['name' => 'soul', 'type' => 'location'],
            ['name' => 'create', 'type' => 'action'],
            ['name' => 'destroy', 'type' => 'action'],
            ['name' => 'transfer', 'type' => 'action'],
            ['name' => 'negate', 'type' => 'action'],
            ['name' => 'fire', 'type' => 'element'],
            ['name' => 'water', 'type' => 'element'],
            ['name' => 'earth', 'type' => 'element'],
            ['name' => 'air', 'type' => 'element'],
            ['name' => 'life', 'type' => 'element'],
            ['name' => 'chaos', 'type' => 'element'],
            ['name' => 'energy', 'type' => 'element'],
            ['name' => 'death', 'type' => 'element'],
            ['name' => 'order', 'type' => 'element'],
            ['name' => 'time', 'type' => 'element'],
            ['name' => 'order', 'type' => 'domain'],
            ['name' => 'chaos', 'type' => 'domain'],
            ['name' => 'life', 'type' => 'domain'],
            ['name' => 'energy', 'type' => 'domain'],
            ['name' => 'time', 'type' => 'domain'],
            ['name' => 'knowledge', 'type' => 'domain'],
            ['name' => 'death', 'type' => 'domain'],
            ['name' => 'water', 'type' => 'domain'],
            ['name' => 'earth', 'type' => 'domain'],
        ];

        \App\Models\FOImbueAttribute::insert($attributes);
    }
}
