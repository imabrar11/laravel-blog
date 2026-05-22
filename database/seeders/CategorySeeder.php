<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology',
            'Programming',
            'Web Development',
            'Mobile Development',
            'Artificial Intelligence',
            'Machine Learning',
            'Cyber Security',
            'Cloud Computing',
            'DevOps',
            'Data Science',
            'Business',
            'Marketing',
            'Finance',
            'Startup',
            'Entrepreneurship',
            'Education',
            'Health',
            'Fitness',
            'Lifestyle',
            'Travel',
            'Food',
            'Sports',
            'Entertainment',
            'Gaming',
            'Movies',
            'Music',
            'Fashion',
            'Photography',
            'News',
            'Politics',
        ];

        foreach ($categories as $category) {
            CategoryModel::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
