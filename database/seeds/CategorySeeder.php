<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Flats" => "FLA", "Boots" => "BOT", "Safety" => "SAF",
            "Sandals" => "SAN", "Monk" => "MON", "Derby" => "DER", "Slippers" => "SLI",
            "Brogue" => "BRO", "Loafers" => "LOA", "Oxford" => "OXF"];
        foreach ($categories as $key => $value) {
            \App\Category::create([
                'name' => $key,
                'code' => $value,
            ]);
        }
    }
}
