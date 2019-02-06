<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        User::insert([
            'role_id' => 1,
            'name' => 'Plabon Costa',
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rootadmin'),
            'created_at' => $now,
        ]);


        for ($i=1; $i <= 10 ; $i++) {
            User::create([
                'role_id' => 0,
                'name' => 'User Costa' . $i,
                'username' => 'User' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => bcrypt('rootuser'),
                'created_at' => $now,
            ]);
        }
        
    }
}
