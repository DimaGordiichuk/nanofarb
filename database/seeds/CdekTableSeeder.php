<?php

use Illuminate\Database\Seeder;

class CdekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->dump();
    }

    protected function dump()
    {
        Eloquent::unguard();

        $path = 'database/seeds/cdek.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('CDEK table seeded!');
    }
}
