<?php

use Illuminate\Database\Seeder;

class BorrowRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrowRecords = factory(App\Borrow::class, 15)->create();
    }
}
