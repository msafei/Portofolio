<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use App\Models\Experience;
use App\Models\Expertise;
use App\Models\Project;
use App\Models\SocialLink;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        // Profile
        Profile::create([
            'name' => 'MUHAMAD SAFEI',
            'title' => 'SOFTWARE ENGINEER',
            'subtitle' => 'KNOW MORE ABOUT ME',
            'bio' => "I am a Full Stack Developer & UI/UX Designer who enjoys building beautiful, responsive, and user-centric digital experiences. I specialize in PHP Native, Laravel, and modern JavaScript frameworks.",
            'start_year' => 2020,
            'media_path' => 'assets/vidio/me.mp4',
            'media_type' => 'video',
            'media_title' => 'The Visionary',
            'media_subtitle' => 'Self Portrait, 2026',
        ]);

        // Experiences
        $experiences = [
            [
                'company' => 'Online Multi Guna',
                'year_range' => '2017 - 2018',
                'role' => 'Creative Designer',
                'logo_path' => 'assets/img/work/onlineMulti.svg',
                'description' => 'Started as a Creative Designer, focusing on digital assets, brand identity, and intuitive interface layouts.',
                'is_present' => false,
                'sort_order' => 1
            ],
            [
                'company' => 'Powerblock Indonesia',
                'year_range' => '2019 - 2022',
                'role' => 'Senior IT Infrastructure',
                'logo_path' => 'assets/img/work/powerblock.svg',
                'description' => 'Managed internal IT infrastructure, ensured system uptime, and maintained critical hardware and network security architectures.',
                'is_present' => false,
                'sort_order' => 2
            ],
            [
                'company' => 'Posco DX Indonesia',
                'year_range' => '2022 - Present',
                'role' => 'Software Engineer',
                'logo_path' => 'assets/img/work/poscoDX.svg',
                'description' => 'Developing enterprise scalable applications, leading front-end architecture, and maintaining continuous deployment pipelines.',
                'is_present' => true,
                'sort_order' => 3
            ]
        ];

        foreach ($experiences as $exp) {
            Experience::create($exp);
        }

        // Expertises
        $expertises = [
            [
                'name' => 'Figma',
                'category' => 'Expertise',
                'logo_path' => 'assets/img/expertise/figma.svg',
                'description' => 'Figma is my primary tool for designing interfaces, creating interactive prototypes, and collaborating with stakeholders.',
                'sort_order' => 1
            ],
            [
                'name' => 'Zeplin',
                'category' => 'Expertise',
                'logo_path' => 'assets/img/expertise/zeplin.svg',
                'description' => 'Zeplin is used to handoff designs and style guides with accurate specs, assets, and code snippets.',
                'sort_order' => 2
            ],
            [
                'name' => 'Laravel',
                'category' => 'Expertise',
                'logo_path' => 'assets/img/expertise/laravel.svg',
                'description' => 'Laravel is a PHP web application framework with expressive, elegant syntax.',
                'sort_order' => 3
            ],
            [
                'name' => 'Flutter',
                'category' => 'Expertise',
                'logo_path' => 'assets/img/expertise/flutter.svg',
                'description' => 'Flutter is Google\'s UI toolkit for building natively compiled applications for mobile, web, and desktop from a single codebase.',
                'sort_order' => 4
            ],
            [
                'name' => 'Webflow',
                'category' => 'Expertise',
                'logo_path' => 'assets/img/expertise/webflow.svg',
                'description' => 'Webflow is a web design tool, CMS, and hosting platform in one.',
                'sort_order' => 5
            ],
            [
                'name' => 'Mikrotik',
                'category' => 'Expertise',
                'logo_path' => 'assets/img/expertise/mikrotik.svg',
                'description' => 'MikroTik is a Latvian company which was founded in 1996 to develop routers and wireless ISP systems.',
                'sort_order' => 6
            ]
        ];

        foreach ($expertises as $exp) {
            Expertise::create($exp);
        }

        // Projects
        $projects = [
            [
                'title' => 'XXI Mobile App',
                'category' => 'UI/UX Design',
                'tags' => 'Redesign & Prototype',
                'image_path' => 'assets/img/portofolio-1-mockup.jpg',
                'short_description' => 'Complete redesign of the Cinema XXI mobile application. Focused on improving user flow, ticket booking experience, and a modern dark editorial aesthetic.',
                'sort_order' => 1
            ],
            [
                'title' => 'Portfolio Website',
                'category' => 'Web Development',
                'tags' => 'Full Stack Build',
                'image_path' => 'assets/img/portofolio-2-mockup.jpg',
                'short_description' => 'Designed and developed a full-featured personal portfolio website with PHP native, magazine-style editorial layout, dark mode, and smooth animations.',
                'sort_order' => 2
            ]
        ];

        foreach ($projects as $proj) {
            Project::create($proj);
        }

        // Social Links
        $socials = [
            ['platform' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/msafei/'],
            ['platform' => 'Behance', 'url' => 'https://www.behance.net/savei_'],
            ['platform' => 'Dribbble', 'url' => 'https://dribbble.com/_savei'],
            ['platform' => 'Github', 'url' => 'https://github.com/msafei']
        ];

        foreach ($socials as $idx => $soc) {
            $soc['sort_order'] = $idx + 1;
            SocialLink::create($soc);
        }
    }
}
