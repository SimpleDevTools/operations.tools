<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusinessType>
 */
class BusinessTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement($this->businessTypes()),
        ];
    }

    /**
     * @return array<array-key, string>
     */
    protected function businessTypes(): array
    {
        return [
            'Landscaping',
            'Lawyer',
            'Chiropractor',
            'Marketing Agency',
            'Accounting',
            'Consulting',
            'Dental',
            'Real Estate',
            'Restaurant',
            'Construction',
            'IT Services',
            'Fitness Center',
            'Daycare',
            'Veterinary',
            'Cleaning Services',
            'Hair Salon',
            'Barber Shop',
            'Auto Repair',
            'Plumbing',
            'Electrician',
            'Home Inspection',
            'Insurance Agency',
            'Retail Store',
            'E-commerce',
            'Event Planning',
            'Photography',
            'Interior Design',
            'Graphic Design',
            'Financial Planning',
            'Legal Services',
            'Tutoring',
            'Education Services',
            'Travel Agency',
            'Pet Services',
            'Bakery',
            'Catering',
            'Logistics',
            'Transportation',
            'HVAC Services',
            'Security Services',
            'Nursing Home',
            'Physical Therapy',
            'Mental Health Services',
            'Web Development',
            'Mobile App Development',
            'SEO Services',
            'Social Media Management',
            'Content Creation',
            'Video Production',
            'Public Relations',
            'Architecture',
            'Engineering',
            'Manufacturing',
            'Wholesale',
            'Distributor',
            'Retailer',
            'Franchise',
            'Non-Profit Organization',
            'Charity',
            'Event Venue',
            'Music Studio',
            'Dance Studio',
            'Yoga Studio',
            'Martial Arts School',
            'Auto Dealership',
            'Boat Dealership',
            'RV Dealership',
            'Pet Store',
            'Furniture Store',
            'Jewelry Store',
            'Clothing Boutique',
            'Cosmetic Store',
            'Grocery Store',
            'Pharmacy',
            'Liquor Store',
            'Bookstore',
            'Florist',
            'Hardware Store',
            'Garden Center',
            'Nursery',
            'Pest Control',
            'Roofing Services',
            'Carpentry',
            'Masonry',
            'Painting Services',
            'Flooring Services',
            'Appliance Repair',
            'Window Cleaning',
            'Dry Cleaning',
            'Laundry Services',
            'Tailoring',
            'Alterations',
            'Freelance Writing',
            'Blogging',
            'Podcasting',
            'Influencer Marketing',
            'Affiliate Marketing',
            'Dropshipping',
            'Subscription Box Service',
            'Coaching',
            'Personal Training',
        ];
    }
}
