<?php

use Illuminate\Database\Seeder;
use App\Role;
use Carbon\Carbon;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateString();
        Role::insert([
            'name' => 'Admin',
            'created_at' => $now,
        ]);
    }
}
