<?php

namespace Database\Seeders;

use App\Models\ToolCategory;
use Illuminate\Database\Seeder;

class ToolCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toolCategories = [
            'All',
            'Artificial intelligence',
            'Productivity',
            'Marketing',
            'Developer tools',
            'Design',
            'SEO',
            'Chatbots',
            'Social media',
            'Customer support',
            'No code',
            'Content creation',
            'Blogging',
            'Writing',
            'Productized services',
            'Sales',
            'iOS',
            'Website builders',
            'Developer APIs',
            'Analytics',
            'Building products',
            'Video',
            'Feedback tools',
            'Education',
            'Chrome extensions',
            'Knowledge management',
            'Mac',
            'Email',
            'Market research',
            'Video editing',
            'E-commerce',
            'Note taking',
            'Voice',
            'Business intelligence',
            'Audio',
            'Ship fast',
            'Finance',
            'Reading',
            'Lead generation',
            'Marketplaces',
            'Collaboration',
            'Task management',
            'SaaS boilerplates',
            'Notion',
            'Data visualization',
            'Monitoring',
            'Books',
            'Freelancers',
            'Photography',
            'Project management',
            'Speech recognition',
            'Databases',
            'Screenshots',
            'Optimization',
            'Bots',
            'Web hosting',
            'Machine learning',
            'Advertising',
            'Careers',
            'Podcasting',
            'Form builders',
            'Open source',
            'Remote work',
            'Branding',
            'Jobs',
            'Cloud computing',
            'To do lists',
            'Browser extensions',
            'Accounting',
            'CMS',
            'Communities',
            'News',
            'Privacy',
            'Cloud infrastructure',
            'Language learning',
            'Job boards',
            'Journaling',
            'Scrapers',
            'Interior design',
            'Fintech',
            'Search',
            'Payments',
            'Translation',
            'Performance monitoring',
            'Reduce costs',
            'Mental health',
            'Motion design',
            'Online scheduling',
            'Recruiting',
            'Journalism',
            'Security',
            'Fundraising',
            'Angel investing',
            'Image recognition',
            'Fitness',
            'Storage',
            'File sharing',
            'Messaging',
            'Parenting',
            'Venture capital',
            'Stable diffusion',
            'Music',
            'Meeting software',
            'Families',
            'Apple watch',
            'Affiliate tracking',
            'Tourism',
            'Big data',
            'Google cloud',
            'Investment management',
            'A/B testing',
            'Testimonials',
            'Legal',
            'Trading',
            'Web3',
            'Jira',
            'Restaurants',
            'Dating',
            'Billing',
            'Home inventory',
            'Guides',
            'Travel',
            'Waitlist',
            '3D technology',
            'Banking',
            'Nutrition',
        ];

        foreach ($toolCategories as $toolCategory) {
            ToolCategory::create(['name' => $toolCategory]);
        }
    }
}
