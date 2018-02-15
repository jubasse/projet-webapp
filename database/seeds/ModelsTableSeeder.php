<?php

use Illuminate\Database\Seeder;
use Model\Models\WomanModel;
use Model\Models\ManModel;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            if ($i%2 === 0) {
                factory(WomanModel::class)->create();
            } else {
                factory(ManModel::class)->create();
            }
        }
    }
}
