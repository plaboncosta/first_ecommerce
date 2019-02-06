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
        $now = Carbon::now()->toDateString();
        User::insert([
            'role_id' => 1,
            'name' => 'Plabon Costa',
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rootadmin'),
            'created_at' => $now,
        ]);
    }
}
