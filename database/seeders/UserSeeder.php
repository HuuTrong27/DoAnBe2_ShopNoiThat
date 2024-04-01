<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng users (nếu có)
        DB::table('users')->truncate();

        // Thêm dữ liệu mẫu cho bảng users
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'nguyenhuutrongvtabs@gmail.com',
            'password' => 'aaa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
