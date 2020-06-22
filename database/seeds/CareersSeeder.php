<?php

use Illuminate\Database\Seeder;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Careers::create([
           'image'=>asset('front_assets/img/careers/web.jpg'),
           'title'=>'web Develobment',
           'description'=>'Web development is the work involved in developing a website for the Internet',
        ]);


        \App\Careers::create([
            'image'=>asset('front_assets/img/careers/web.jpg'),
            'title'=>'VR',
            'description'=>'Augmented reality (AR) and Virtual Reality (VR) bridge the digital and physical world',
        ]);


        \App\Careers::create([
            'image'=>asset('front_assets/img/careers/web.jpg'),
            'title'=>'3D Modeling',
            'description'=>'In 3D computer graphics, 3D modeling is the process of developing a',
        ]);
    }
}
