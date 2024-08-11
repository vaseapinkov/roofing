<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;

use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Roof replacement/ reparation paid by insurance company',
                'home_page_description' => 'M&R Roofing Company simplifies roof damage insurance claims. Our team guides homeowners through understanding policies, filing paperwork, and communicating with insurers to maximize benefits. Once approved, we promptly handle repairs or replacements with quality materials. Trust us to protect your home and make the insurance process smooth and stress-free.',
                'icon' => 'images/services-1.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Roof repair',
                'description' => 'M&R Roofing Company understands that a damaged roof risks your home and family. Our skilled team offers exceptional repair services, from minor leaks to severe storm damage, using top-quality materials and advanced techniques. Trust us to restore your roof and provide peace of mind with reliable, efficient service.',
                'icon' => 'images/services-2.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Roof renovation',
                'description' => 'Elevate your home’s aesthetic and functionality with M&R Roofing Company’s expert renovation services. Our team offers a variety of roofing styles and materials to enhance curb appeal and energy efficiency. Let us transform your roof into a stunning, protective statement piece that adds value and beauty to your home.',
                'icon' => 'images/services-3.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Roof inspection',
                'description' => 'Concerned about your roof? M&R Roofing Company offers a complimentary roof inspection to assess its condition. Our experienced inspectors identify potential issues before they become costly repairs. With our no-obligation report, you’ll gain insights to make informed maintenance or renovation decisions. Schedule your free inspection today and keep your roof in excellent shape!',
                'icon' => 'images/services-4.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Siding repair',
                'description' => 'M&R Roofing Company provides top-notch siding repair services to restore your home’s exterior. Whether facing weather damage, pests, or aging, our skilled technicians use high-quality materials and proven techniques for seamless repairs. Enhance your home’s curb appeal and durability with our expert services. Trust us to rejuvenate and protect your investment.',
                'icon' => 'images/services-5.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Siding replacement',
                'description' => 'Is your siding aging or damaged? It might be time for a replacement. M&R Roofing Company offers top-notch siding solutions that enhance your home’s beauty, energy efficiency, and value. Our expert team will help you choose from a variety of materials and styles. With our exceptional craftsmanship, your new siding will last and transform your home’s appearance. Upgrade with us today for a stylish, protective upgrade.',
                'icon' => 'images/services-6.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Windows replacement',
                'description' => 'M&R Roofing Company offers expert window replacement services to enhance your home’s energy efficiency, security, and aesthetic appeal. If your windows are outdated or damaged, our team will help you choose from a range of styles and energy-efficient options. We ensure meticulous installation and superior craftsmanship for lasting results. Upgrade your home with us for improved comfort, style, and reduced energy bills.',
                'icon' => 'images/services-7.svg',
                'show_on_home_page' => true,
            ],
            [
                'name' => 'Same day repair',
                'description' => 'When emergencies strike, M&R Roofing Company offers fast, same-day repair services for urgent issues. Our skilled technicians handle roof leaks, siding damage, and window problems promptly, with the right tools and expertise. We prioritize quick, professional repairs to restore your home’s safety and comfort with minimal disruption. Contact us for immediate, reliable assistance.',
                'icon' => 'images/services-8.svg',
                'show_on_home_page' => true,
            ],
        ];
        collect($services)->each(fn($service) => Service::create($service));

        $testimonials = [
            [
                'review_link' => 'https://maps.app.goo.gl/mA9qytPd6zTXc6fv5',
                'client_name' => 'Faisal Ansari',
                'message' => 'M&R Roofing did a g`reat job from start to end. Erickson and Kim were always available to assist us in all the process. There are professional, knowledgeable, friendly, and ensured the job was scheduled and completed as discussed. The roofing crew were great and their services was very detail. They took special care protecting the landscaping and deck furniture, and when finished they did a great job cleaning up and putting everything back. I am very happy with all the process and definitely refer M&R Roofing to friends and family.',
                'project_photo' => 'images/review-1.jpg',
                'client_avatar' => 'images/user-1.png',
                'show_on_home_page' => true,
                'stars' => 5,
            ],
            [
                'review_link' => 'https://maps.app.goo.gl/4kxrTfs4mFDhifTb8',
                'client_name' => 'Sue Sawchak',
                'message' => 'M&R did a great job on our roof.  The process was easy from initial inspection through installation.   The team was polite, professional and quick to reply.  This was one of the easiest projects we have done.',
                'project_photo' => 'images/review-2.jpg',
                'client_avatar' => 'images/user-2.png',
                'show_on_home_page' => true,
                'stars' => 5,
            ],
            [
                'review_link' => 'https://maps.app.goo.gl/UqHAnZfvPsMrsEVN7',
                'client_name' => 'joann carter',
                'message' => 'Saul & Catmelo from M&R Roofing were a pleasure to work with from beginning to end with our roof replacement. The house looks amazing and fresh - what a difference a nrw roof makes. The crew was professional and did anazing installation and cleanup- would DEFINITELY recommend working with this company for roof replacement -.',
                'project_photo' => 'images/review-3.jpg',
                'client_avatar' => 'images/user-3.png',
                'show_on_home_page' => true,
                'stars' => 5,
            ],
            [
                'review_link' => 'https://maps.app.goo.gl/yq2tVQn71cyTcYoq9',
                'client_name' => 'Gerardo Jimenez',
                'message' => 'The guys over at M&R Roofing exceeded all of my expectations, in terms of quality and professionalism, They were honest and did everything that they said they would and more.  I was very happy with the sales rep Erick he was very polite, professional and charismatic and made sure everything that was expected to be done for my roof was taken care of and helped answer all my questions throughout the process.  I couldn\'t be happier with the workers they were very careful and mindful not to damage anything around the perimeter of the house and took special care to make sure the roof and Siding  came out perfect.  Once again I can\'t say enough good things about everyone over at M&R Roofing they are the best around',
                'project_photo' => 'images/review-4.jpg',
                'client_avatar' => 'images/user-4.png',
                'show_on_home_page' => false,
                'stars' => 5,
            ],
            [
                'review_link' => 'https://maps.app.goo.gl/hxDkV8VFfn4xKsreA',
                'client_name' => 'Marlon Villeda',
                'message' => 'We received wind damage from one of the many storms. M&R Roofing helped us through the whole process from filing a claim to the day the roof was installed. He is incredible to work with. We never felt pushed into spending money we did not have. He educated us on the different types of materials and answered my many questions. Erick took over when the roof was installed. He was just as easy and great to work with. He made sure nothing was damaged and everything is perfect. I could not have been more impressed with everyone. The guys who actually installed the roof were very nice and left my yard cleaner than it started. I would definitely recommend them to anyone.',
                'project_photo' => 'images/review-5.jpg',
                'client_avatar' => 'images/user-5.png',
                'show_on_home_page' => true,
                'stars' => 5,
            ],
        ];
        collect($testimonials)->each(fn($testimonial) => Testimonial::create($testimonial));

        $features = [
            [
                'name' => '10 Years Warranty',
                'icon' => 'images/feature-icon-1.svg',
                'home_page_description' => 'Get 10 Years warranty on our services and 50 Years warranty on materials.',
                'home_page_image' => 'images/feature-1.jpg',
                'show_on_page_image' => true,
            ],
            [
                'name' => '0% Interest Rate',
                'icon' => 'images/feature-icon-2.svg',
                'home_page_description' => 'For a limited time, take advantage of our special financing plan that allows you to replace your roof or access any of our services with 0% interest for 1 year!',
                'home_page_image' => 'images/feature-2.jpg',
                'show_on_page_image' => true,
            ],
            [
                'name' => 'Preferred contractor',
                'icon' => 'images/feature-icon-3.svg',
                'home_page_description' => 'M&R Roofing has been approved to be preferred contractor int the Owns Corning Roofing Contractors Network of Independent Contractors.',
                'home_page_image' => 'images/feature-3.jpg',
                'show_on_page_image' => true,
            ],
        ];

        collect($features)->each(fn($feature) => Testimonial::create($feature));

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mrroofingllc.com',
            'password' => Hash::make('password'),
        ]);
    }
}
