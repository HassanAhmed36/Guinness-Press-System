<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 20 blogs
        for ($i = 1; $i <= 20; $i++) {
            $blog = new Blog();
            $blog->title = fake()->sentence();
            $blog->slug = fake()->slug();
            $blog->keywords = fake()->words(5, true);
            $blog->blog = fake()->paragraphs(5, true);
            $blog->case_study = fake()->paragraphs(3, true);
            $blog->research_study = fake()->paragraphs(3, true);
            $blog->published_at = fake()->dateTimeBetween('-1 year', 'now');
            $blog->is_active = fake()->boolean();
            $blog->save();
            $tagIds = [];
            for ($j = 1; $j <= rand(3, 5); $j++) {
                $tagName = fake()->unique()->word;
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $blog->tags()->attach($tagIds);
        }
    }
}
