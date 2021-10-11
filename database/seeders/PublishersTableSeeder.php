<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = new Publisher();
        $publisher->name = 'Thanh Niên';
        $publisher->phone1 = '035989889';
        $publisher->phone2 = '059955656';
        $publisher->address1 = 'Thái Hà - Đống Đa - Hà Nội';
        $publisher->address2 = 'Khuất Duy Tiến - Hà Đông - Hà Nội';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Kim Đồng';
        $publisher->phone1 = '035989889';
        $publisher->phone2 = '059955656';
        $publisher->address1 = 'Thái Hà - Đống Đa - Hà Nội';
        $publisher->address2 = 'Khuất Duy Tiến - Hà Đông - Hà Nội';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Tuổi Trẻ';
        $publisher->phone1 = '035989889';
        $publisher->phone2 = '059955656';
        $publisher->address1 = 'Thái Hà - Đống Đa - Hà Nội';
        $publisher->address2 = 'Khuất Duy Tiến - Hà Đông - Hà Nội';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'First New';
        $publisher->phone1 = '035989889';
        $publisher->phone2 = '059955656';
        $publisher->address1 = 'Thái Hà - Đống Đa - Hà Nội';
        $publisher->address2 = 'Khuất Duy Tiến - Hà Đông - Hà Nội';
        $publisher->save();
    }
}
