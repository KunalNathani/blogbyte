<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryNews = Category::create(['name' => 'News']);
        $categoryDesign = Category::create(['name' => 'Design']);
        $categoryTechnology = Category::create(['name' => 'Technology']);
        $categoryEngineering = Category::create(['name' => 'Engineering']);

        $tagCustomer = Tag::create(['name' => 'Customer']);
        $tagCoding = Tag::create(['name' => 'Coding']);
        $tagFrontend = Tag::create(['name' => 'Frontend']);
        $tagBackend = Tag::create(['name' => 'Backend']);
        $tagJava = Tag::create(['name' => 'Java']);

        $categoriesArray = collect([$categoryEngineering, $categoryDesign,
                            $categoryNews, $categoryTechnology]);
        $tagsArray = collect([$tagCustomer, $tagBackend, $tagFrontend,
                    $tagCoding, $tagJava]);

        for ($i=0; $i < 10; $i++) {
            $post = Post::create([
                'category_id' => $categoriesArray->random()->id,
                'user_id' => User::all()->random()->id,
                'title' => fake()->sentence(3),
                'excerpt' => fake()->sentence(),
                'body' => fake()->paragraph(3),
                'image' => 'posts/3.jpg',
                'published_at' => Carbon::now()->format('Y-m-d')
            ]);
            $tags = $tagsArray->random(random_int(1, count($tagsArray)-1))->pluck('id');
            $post->tags()->attach($tags);
        }
    }
}
