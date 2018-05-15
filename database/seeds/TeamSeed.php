<?php

use Illuminate\Database\Seeder;

class TeamSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Perpignan', 'nb_matches' => '2', 'nb_wins' => '1', 'nb_losses' => '1', 'total_tries' => '4', 'total_points' => '69', 'placement' => '2',],
            ['id' => 2, 'name' => 'Montauban', 'nb_matches' => '2', 'nb_wins' => '2', 'nb_losses' => '0', 'total_tries' => '6', 'total_points' => '102', 'placement' => '1',],
            ['id' => 3, 'name' => 'Mont-De-Marsan', 'nb_matches' => '2', 'nb_wins' => '0', 'nb_losses' => '2', 'total_tries' => '1', 'total_points' => '34', 'placement' => '3',],

        ];

        foreach ($items as $item) {
            \App\Team::create($item);
        }
    }
}
