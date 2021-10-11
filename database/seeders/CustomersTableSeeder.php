<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class   CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = "Trần Văn Ngọc";
        $customer->email = "tranngoc@gmail.com";
        $customer->password = Hash::make("123456");
        $customer->image = "";
        $customer->address = "Thái Bình";
        $customer->phone = "0375112345";
        $customer->date_of_birth = "2001-12-26";
        $customer->save();

        $customer = new Customer();
        $customer->name = "Ngô Quốc Thịnh";
        $customer->email = "thinhcubi27@gmail.com";
        $customer->password = Hash::make("123456");
        $customer->image = "";
        $customer->address = "Lào Cai";
        $customer->phone = "020201020";
        $customer->date_of_birth = "2000-12-27";
        $customer->save();

        $customer = new Customer();
        $customer->name = "Hà Huy Cường";
        $customer->email = "huycuong@gmail.com";
        $customer->password = Hash::make("123456");
        $customer->image = "";
        $customer->address = "Hà Nam";
        $customer->phone = "0301049271";
        $customer->date_of_birth = "1998-10-7";
        $customer->save();
    }
}
