<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'name' => 'xiqo',
            'cost' => '3',
            'pages' => '2',
            'description' => 'bello come marinqa',
            'languages' => 'italiano',
        ]);


    }
}
