<?php

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\jobs::create([
            'title'=>'senior php developer',
            'careers_id'=>1,
            'quote'=>'We are looking for a Junior Backend PHP Developer',
            'job_requirements'=>'HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana',
            'job_reponsabilities'=>'HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana',

        ]);


        \App\jobs::create([
        'title'=>'junior php developer',
        'careers_id'=>1,
        'quote'=>'We are looking for a Junior Backend PHP Developer',
        'job_requirements'=>'HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana',
        'job_reponsabilities'=>'HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana',

    ]);
        \App\jobs::create([
            'title'=>'junior vr developer',
            'careers_id'=>2,
            'quote'=>'We are looking for a Junior Backend PHP Developer',
            'job_requirements'=>'HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana',
            'job_reponsabilities'=>'HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana',

        ]);
    }
}
