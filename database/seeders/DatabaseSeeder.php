<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\Status;
use App\Models\User;
use Database\Factories\StatusFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // generationg three base status for application transcations accepted, pending and rejected
        Status::factory(['id' => 1, 'title' => 'accepted'])->create();
        Status::factory(['id' => 2, 'title' => 'pending'])->create();
        Status::factory(['id' => 3, 'title' => 'rejected'])->create();

        // generating admin user
        User::factory([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
        ])->create();

        // generating more users
        User::factory(10)->create();

        //generating some transactions
        Transaction::factory(100)->create();
    }
}
