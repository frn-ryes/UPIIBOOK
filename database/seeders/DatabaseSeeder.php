<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Event;
use App\Models\Item;
use App\Models\Question;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        Item::factory(20)->create();
        User::factory(7)->create();
        Event::factory(20)->create();
        Question::factory(20)->create();
        Course::factory(20)->create();
        Comment::factory(50)->create();
    }
}
