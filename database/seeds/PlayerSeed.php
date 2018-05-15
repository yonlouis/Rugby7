<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'team_id' => 1, 'name' => 'Kevin', 'surname' => 'Durant', 'birth_date' => '', 'age' => '23', 'position' => 'loose-head', 'tries' => '2',],
            ['id' => 2, 'team_id' => 1, 'name' => 'Stephen', 'surname' => 'Curry', 'birth_date' => '', 'age' => '22', 'position' => 'lock', 'tries' => '2',],

        ];

        foreach ($items as $item) {
            \App\Player::create($item);
        }
    }
}
