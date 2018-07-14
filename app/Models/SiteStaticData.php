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
                'image' => 'banner/banner-1.jpg', 
                'slogans' => [
                    'Prevent Youth Migration',
                    'by Job Creation'
                ]
            ],
            [
                'image' => 'banner/ghost612.jpg', 
                'slogans' => [
                    'Help us bring back LIFE',
                    'to Ghost Villages'
                ]
            ]
        ];

        $section['who_we_are']['data'] = [
            'heading' => 'Who we are?',
            'subheading' => 'we are a non profit organisation commited to empower the youth in remote villages of India, who are usually deprived of job opportunities',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia.'
        ];

        $section['our_objective']['data'] = [
            'heading' => 'Our Objective',
            'subheading' => 'We are dedicated to prevent migration of talented youth to cities by making them corporate world ready and bringing IT projects to their door steps',
            'image' => 'misc/village-man-work-01.png',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia.'
        ];

        $section['what_we_do']['data'] = [
            'heading' => 'What we do?',
            'subheading' => 'here comes some subheading for this section',

            'blocks' => [
                [
                    'title' => 'We Empower',
                    'icon' => 'bar-chart',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia.'
                ],
                [
                    'title' => 'We Employ',
                    'icon' => 'certificate',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis excepturi voluptatibus minus in voluptate accusantium architecto dolore asperiores, quisquam officiis nobis sunt ratione officia. Voluptates quis doloremque numquam asperiores officia.'
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
