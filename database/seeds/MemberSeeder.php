<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'username'  =>  'MasterYodA',
            'email'     =>  'beachman4@hotmail.com',
            'password'  =>  '39eb101542f59231dfbc52245b93903a'
        ]);
    }
}
