<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        /*
        User::create([
            'name' => 'Haniif Ahmad Jauhari',
            'email' => 'haniif02aj@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Budi Agus',
            'email' => 'budia@gmail.com',
            'password' => bcrypt('12345')
        ]);
        */

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        Article::factory(20)->create();
        /*
        Article::create([
            'title' => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus vero suscipit rerum eum quibusdam nostrum error et tempore at aspernatur molestias, minima aut dolores. Quam, possimus. Et nemo deserunt voluptas necessitatibus totam vel quaerat culpa labore tempore placeat. Dicta voluptatibus laudantium deleniti nobis fugit praesentium voluptas architecto inventore modi minus accusantium, atque quo ex reiciendis, sint exercitationem, unde id harum. Tempora molestias labore ab voluptates eum rerum totam illo mollitia, ipsam obcaecati magnam rem, quia quis repellendus? Eaque nesciunt reiciendis ab ipsa error itaque fuga, atque, rerum, omnis delectus dignissimos ex non at. Omnis minus earum mollitia ea facere!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Article::create([
            'title' => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus vero suscipit rerum eum quibusdam nostrum error et tempore at aspernatur molestias, minima aut dolores. Quam, possimus. Et nemo deserunt voluptas necessitatibus totam vel quaerat culpa labore tempore placeat. Dicta voluptatibus laudantium deleniti nobis fugit praesentium voluptas architecto inventore modi minus accusantium, atque quo ex reiciendis, sint exercitationem, unde id harum. Tempora molestias labore ab voluptates eum rerum totam illo mollitia, ipsam obcaecati magnam rem, quia quis repellendus? Eaque nesciunt reiciendis ab ipsa error itaque fuga, atque, rerum, omnis delectus dignissimos ex non at. Omnis minus earum mollitia ea facere!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Article::create([
            'title' => 'Artikel Ketiga',
            'slug' => 'artikel-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus vero suscipit rerum eum quibusdam nostrum error et tempore at aspernatur molestias, minima aut dolores. Quam, possimus. Et nemo deserunt voluptas necessitatibus totam vel quaerat culpa labore tempore placeat. Dicta voluptatibus laudantium deleniti nobis fugit praesentium voluptas architecto inventore modi minus accusantium, atque quo ex reiciendis, sint exercitationem, unde id harum. Tempora molestias labore ab voluptates eum rerum totam illo mollitia, ipsam obcaecati magnam rem, quia quis repellendus? Eaque nesciunt reiciendis ab ipsa error itaque fuga, atque, rerum, omnis delectus dignissimos ex non at. Omnis minus earum mollitia ea facere!',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Article::create([
            'title' => 'Artikel Keempat',
            'slug' => 'artikel-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus vero suscipit rerum eum quibusdam nostrum error et tempore at aspernatur molestias, minima aut dolores. Quam, possimus. Et nemo deserunt voluptas necessitatibus totam vel quaerat culpa labore tempore placeat. Dicta voluptatibus laudantium deleniti nobis fugit praesentium voluptas architecto inventore modi minus accusantium, atque quo ex reiciendis, sint exercitationem, unde id harum. Tempora molestias labore ab voluptates eum rerum totam illo mollitia, ipsam obcaecati magnam rem, quia quis repellendus? Eaque nesciunt reiciendis ab ipsa error itaque fuga, atque, rerum, omnis delectus dignissimos ex non at. Omnis minus earum mollitia ea facere!',
            'category_id' => 3,
            'user_id' => 1
        ]);
        */
    }
}