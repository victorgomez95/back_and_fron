<?php

use Illuminate\Database\Seeder;

class MerchTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tipos = array("APPAREL","EYEWEAR","LEATHER");
      foreach ($tipos as $tipo) {
        DB::table('merchtypes')->insert([
          'name' => $tipo
        ]);
      }
    }
}
