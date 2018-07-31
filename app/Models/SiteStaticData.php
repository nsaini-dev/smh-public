<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteStaticData extends Model
{
    public static function getDefaultData() 
    {
        $section = [];

        
        $section['banner']['slides'] = [
            [
                'image' => 'misc/cc-front-01.jpeg', 
                'slogans' => [
                    'Prevent youth migration',
                    'through JOB creation'
                ]
            ],
            [
                'image' => 'banner/ghost612.jpg', 
                'slogans' => [
                    'Help us bring back LIFE',
                     'to ghost villages'
                ]
            ],
            [
                'image' => 'banner/Youth_group_06.jpg', 
                'slogans' => [
                    'Let us bring them',
                     'also into FOCUS'
                ]
            ],
            [
                'image' => 'banner/Girls group 02.jpg', 
                'slogans' => [
                    'Equal OPPORTUNITIES',
                     'for everyone'
                ]
            ],
            [
                'image' => 'banner/Man leaving home_01.jpg', 
                'slogans' => [
                    'Stay close to',
                     'your ROOTS'
                ]
            ],
            [
                'image' => 'banner/men with parent 01.jpg', 
                'slogans' => [
                    'EMPOWERMENT',
                     'for everyone'
                ]
            ],
            [
                'image' => 'banner/Girls in a row 01.jpg', 
                'slogans' => [
                    'Do not leave',
                     'ANYONE behind'
                ]
            ],
            [
                'image' => 'banner/Two men laptop in village.jpg', 
                'slogans' => [
                    'Why should all jobs',
                     'go to big cities'
                ]
            ]
            
        ];

        $section['who_we_are']['data'] = [
            'heading' => 'Who are we?',
            'subheading' => 'we are a non profit organisation commited to empower the youth in remote villages of India, who are usually deprived of job opportunities',
            'description' => 'Save My Homeland is a non-profit trust registered under Indian Trust Act, 1882. It is an initiative started by some IT experts and motivated volunteers to empower the societies which were left behind due to lack of opportunities.'
        ];

        $section['our_objective']['data'] = [
            'heading' => 'Our Objective',
            'subheading' => 'We are dedicated to prevent migration of talented youth to cities by making them corporate world ready and bringing IT projects to their door steps',
            'image' => 'misc/Men leaving home 01.jpg',
            'image' => 'misc/Men leaving home 01.jpg',
            'description' => 'Our main objective is to help the youth in remote areas of India who are either deprived of professional training or have to migrate to bigger cities in order to gain education or employment. We wish to do this by bringing professional training and jobs at their door step.

The rural and small towns youth in India has immense potential for growth, but, they are stinted by a lack of training and job opportunities. *Geographical terrains and/or other factors make it difficult for any industry to survive or produce at a competitive cost in remote and hillys areas of India. Due to lack of industries and thereby lack of jobs, people in these regions are forced to migrate. There are thousands of such so called ‘ghost villages’, which have been left abandoned.

We believe that IT jobs could be one quick fix for this problem. One only needs talent, internet and a computer to get started. They are least depended on any physical infrastructure to perform. The literacy rate in many of such regions are good. People are educated but they lack targeted IT and soft skills required for the corporate world today. We need to give them the missing IT related trainings and make them corporate world ready. But this is not enough to stop their migration, until we bring them IT job opportunities to their door steps. We are trying to establish these missing links between the people especially youth (who are either deprived of professional training or have to migrate to bigger cities in order to gain education or employment in these areas) and IT jobs by-
•	Career coaching and arranging any missing market-oriented IT and soft skills trainings for free or at a bare minimum cost.
•	Approching customers all around the world to bring IT related jobs to these regions and get it executed by the local people as far as possible, ofcourse under the supervision of IT experts.
•	By providing adequate hardware, work space and IT infrastructure.
This could be a wining situation for the customers as well, as the cost of projects would be much lesser than those running in big cities.'
        ];
        $section['our_projects']['data'] = [
            'heading' => 'Our Current Projects',
            'subheading' => 'We are dedicated to prevent migration of talented youth to cities by making them corporate world ready and bringing IT projects to their door steps',
            'image' => 'misc/Computer_institute_01.jpg',
            'description' => 'Ramnagar Project: 
The work on our first project is currently on in full swing and our first computer center is expected to open by July, 2018.
Ramnagar is a small township in the Nainital district of Uttarakhand in India. Situated in the Terai area just before the Shivalik range of the Himalayas start, bordering the Jim Corbett National Park, Ramnagar has a population of roughly 1,00,000 people. Rate of literacy is high but there are no opportunities for professional training or growth in the district, because of which most of the youth migrates to cities.
SMH has opened an IT institute in Ramnagar to give free professional training to the youth, so that they do not have to move out for acquiring such skills. We further plan to bring IT jobs to the youth, right in Ramnagar so that they can find fulfilling employment right at their doorstep.
This institute is run by professional volunteers from across the world, who communicate with the students through video conferencing.'
        ];
        $section['what_we_do']['data'] = [
            'heading' => 'What we do?',
            'subheading' => 'here comes some subheading for this section',

            'blocks' => [
                [
                    'title' => 'We Empower',
                    'icon' => 'book',
                    'description' => 'You want to start a career in IT, let us help you ensure that you are equipped with all the necessary skills. You may be a beginner or already posses some technical knowledge, we will try to fill the missing gap between your dream job and yourself.

*All you have to do is to let us know that which area you want to work in. Then we would like to know how much are you ready to start a job in your desired field. We will let the experts analyse your skills set and try to arrange a free of cost trainings to make you market ready. 

We have experts in different IT fields like software programming, Web Designing, SAP, software testing, etc. to help you learn market oriented technical skills. We know that technical skills alone do not guarrenty an employment in the modern world. To be corporate ready, one has to be proficient with international languages and communication skills. We have professional trainers to improve your soft skills particularly in corporate communication. This is what we can do for you:
1.	Give you IT career counselling.
2.	Try to arrange free of cost IT courses in our computer center, which match your talent.
'
                ],
                [
                    'title' => 'We Employ',
                    'icon' => 'laptop',
                    'description' => 'If you already have IT skills and looking for a career in IT, we may hire you in one of the customer projects available at that time. You may even get a job as a trainer in our computer center.'
                ]
            ]
        ];

        $section['get_involved']['data'] = [
            'heading' => 'Get Involved',
            'subheading' => 'here comes some subheading for this section',

            'blocks' => [
                [
                    'title' => 'Become a Volunteer',
                    'icon' => 'users',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia.'
                ],
                [
                    'title' => 'Bring IT Projects',
                    'icon' => 'laptop',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia.'
                ],
                [
                    'title' => 'Donate Money, Books or Infrastructure',
                    'icon' => 'rupee',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia.'
                ],
                [
                    'title' => 'Spread the Word',
                    'icon' => 'bullhorn',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia.'
                ]
            ]

        ];

        $section['meet_the_team']['data'] = [
            'heading' => 'Meet the Team',
            'subheading' => 'here comes some subheading for this section',

            'blocks' => [
                [
                    'name' => 'Mr. Mohit Chhabra',
                    'role' => 'Trainer',
                    'image' => 'team/teacher1.jpg'
                ],
                [
                    'name' => 'Mr. Sandeep Balaji',
                    'role' => 'Trainer',
                    'image' => 'team/teacher2.jpg'
                ],
                [
                    'name' => 'Mr. Shashi Mohan',
                    'role' => 'Data Analyst',
                    'image' => 'team/teacher3.jpg'
                ],
                [
                    'name' => 'Mr. Rupak Agarwal',
                    'role' => 'Marketing Manager',
                    'image' => 'team/teacher4.jpg'
                ],
                [
                    'name' => 'Mr. Prashant Kulshrestha',
                    'role' => 'PR Manager',
                    'image' => 'team/teacher5.jpg'
                ],
                [
                    'name' => 'Mr. Karthik Rao',
                    'role' => 'Trainer',
                    'image' => 'team/teacher6.jpg'
                ],
                [
                    'name' => 'Mr. Sumer Mehta',
                    'role' => 'Managing Director',
                    'image' => 'team/teacher7.jpg'
                ],
                [
                    'name' => 'Mr. Deepak Kikan',
                    'role' => 'IT Head',
                    'image' => 'team/teacher8.jpg'
                ]
                ,
                [
                    'name' => 'Mr. Deepak Kikan',
                    'role' => 'IT Head',
                    'image' => 'team/teacher8.jpg'
                ]
            ]
        ];





        // DO NOT CHANGE ANY THING HERE

        foreach($section['banner']['slides'] as $index => &$slide) 
        {
            if($index == 0) {
                $slide['slideStatusClass'] = ' active ';
            } 
            else {
                $slide['slideStatusClass'] = ' not-active ';
            }
        }

        return $section;
    }

}
