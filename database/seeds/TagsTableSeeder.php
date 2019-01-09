<?php

use App\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Tag::insert([
            ['name' => 'Sony', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Samsung', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Republic', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Toshiba', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Random', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
