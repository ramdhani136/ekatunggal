<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1;$i<=20;$i++){
            DB::table('barang')->insert([
                'nama'=>$faker->name,
                'qty'=>$faker->numberBetween(1000,1200),
                'satuan'=>$faker->jobtitle,
                'lokasi'=>$faker->address(20)
            ]);
        }

    }
}
