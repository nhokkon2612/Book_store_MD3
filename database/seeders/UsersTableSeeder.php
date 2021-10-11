<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Boss';
        $user->email = 'boss@gmail.com';
        $user->password = Hash::make('boss123456');
        $user->phone = '0265999998';
        $user->address = '177 Cầu Diễn Hà Nội';
        $user->cmnd = '02456871686';
        $user->bank_id = '65464646465685858';
        $user->bank_name = 'Chưa có';
        $user->date_of_birth = '2000-12-27';
        $user->save();


        $user = new User();
        $user->name = 'QTV';
        $user->email = 'qtv@gmail.com';
        $user->password = Hash::make('qtv123456');
        $user->phone = '615165565';
        $user->address = '17 Cầu Diễn Hà Nội';
        $user->cmnd = '64656789556';
        $user->bank_id = '552464235466';
        $user->bank_name = 'Chưa có';
        $user->date_of_birth = '1988-12-27';
        $user->save();

        $user = new User();
        $user->name = 'Managar';
        $user->email = 'manager@gmail.com';
        $user->password = Hash::make('manager123456');
        $user->phone = '664585287';
        $user->address = '177 Cầu Đen Hà Nội';
        $user->cmnd = '4595659566598';
        $user->bank_id = '89565598956';
        $user->bank_name = 'Chưa có';
        $user->date_of_birth = '1997-12-27';
        $user->save();
    }
}
