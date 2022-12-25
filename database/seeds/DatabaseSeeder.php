<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 1)->create(['api_token' => 'CXsvQ9ttsYTTboAvNnfG7m7ZQ7n0YROxT5tBUNPsk0etYq8d9WR3KqwImWCe']);
    }
}
