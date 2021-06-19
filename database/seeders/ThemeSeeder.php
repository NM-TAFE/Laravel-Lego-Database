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
                'name' => 'Tst',
                'theme_id' => null,
            ],
            [
                'id' => 2,
                'name' => 'Test-Sub-1',
                'theme_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Test-Sub-2',
                'theme_id' => 1,
            ],
        ];

        foreach ($themes as $theme) {
            Theme::create($theme);
        }
    }
}
