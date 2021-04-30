<?php

namespace Database\Seeders;

use App\Models\ToDo;
use App\Models\ToDoDetail;
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
        $todo = ToDo::factory()->create();
        ToDoDetail::factory(5)->create([
            'to_do_id' => $todo->id,
        ]);
    }
}
