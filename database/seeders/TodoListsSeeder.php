<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoList::factory(5)->create();
        TodoList::create([
            'user_id' => '1',
            'name' => 'felipe',
        ]);
    }
}
