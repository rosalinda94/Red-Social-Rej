<?php

use Illuminate\Database\Seeder;

class ReactionsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<4;$i++){
            DB::table('reactions_types')->insert([
                'name' => 'Categoria '.$i,
            ]);
        }
    }
}
