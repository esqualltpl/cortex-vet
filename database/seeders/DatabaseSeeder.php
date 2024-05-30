<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(BreedsTableSeeder::class);
        $this->call(SpeciesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(TestesTableSeeder::class);
        $this->call(TestOptionsTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(ResultDetailsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
    }
}
