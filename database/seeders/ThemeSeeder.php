<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Null_;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            [
                'id' => 1,
                'name' => 'Theme 1',
                'theme_id' => null,
            ],
            [
                'id' => 2,
                'name' => 'Theme 2',
                'theme_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Theme 3',
                'theme_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Theme 4',
                'theme_id' => 3,
            ],
            [
                'id' => 5,
                'name' => 'Theme 5',
                'theme_id' => 3,
            ],
            [
                'id' => 6,
                'name' => 'Theme 6',
                'theme_id' => null,
            ],
        ];

        foreach ($themes as $theme) {
            Theme::create($theme);
        }
    }
}
