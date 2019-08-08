<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::create([
            'name' => 'Carlos',
            'email' => 'carlos@correo.com',
            'password' => Hash::make('password')
        ]);
        $author2 = User::create([
            'name' => 'Carla',
            'email' => 'carla@correo.com',
            'password' => Hash::make('password')
        ]);
        $tag1 = Tag::create([
            'name' => 'Record',
        ]);
        $tag2 = Tag::create([
            'name' => 'Progress',
        ]);
        $tag3 = Tag::create([
            'name' => 'Customers',
        ]);
        $tag4 = Tag::create([
            'name' => 'Record',
        ]);
        $category1 = Category::create([
            'name' => 'Freebie'
        ]);
        $category2 = Category::create([
            'name' => 'Partnership'
        ]);
        $category3 = Category::create([
            'name' => 'Updates'
        ]);
        $category4 = Category::create([
            'name' => 'Design'
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'lipsum',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
            'user_id' => $author1->id

        ]);

        $post2 = Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'lipsum',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg',
            'user_id' => $author1->id

        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'lipsum',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',


        ]);

        $post4 = $author2->posts()->create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'lipsum',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg',


        ]);

        $post1->tags()->attach([$tag1->id,$tag2->id]);
        $post2->tags()->attach([$tag2->id,$tag3->id]);
        $post3->tags()->attach([$tag3->id,$tag1->id]);
    }
}
