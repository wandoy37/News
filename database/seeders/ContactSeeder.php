<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'title' => 'Kantor Pusat News Berita Digital',
            'address' => 'Jalan Gerilya RT.51 No.06, Sungai Pinang Dalam, Kalimantan Timur - Indonesia.',
            'telephone' => '082148722747',
            'email' => 'newsdigital@mail.com',
            'twitter' => 'https://twitter.com/',
            'facebook' => 'https://www.facebook.com/',
            'whatsapp' => '6282148722747',
            'instagram' => 'https://www.instagram.com/',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6760180135325!2d117.17166614909556!3d-0.48391419964521254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5d5f7e5c3f997%3A0x388faea3cbd43adb!2sJl.%20Gerilya%2C%20Kec.%20Sungai%20Pinang%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1653738675174!5m2!1sid!2sid',
        ]);
    }
}
