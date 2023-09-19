<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Rifal Prasetyo',
            'email' => 'hrdsdsms765@gmail.com',
            'username' => 'rifalPrasetyo',
            'password' => bcrypt('12345')

        ]);

        // User::create([
        //     'name' => 'Muhammad Yuanendra',
        //     'email' => 'yuan@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        Category::create([
            'name' => 'Web progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::factory(3)->create();
        Post::factory(21)->create();
        // Post::create([
        //     'title' => 'Lorem ipsum 1',
        //     'slug' => 'lorem-ipsum1',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt magni totam autem quod rerum quibusdam ipsum corrupti tenetur rem assumenda nam, aperiam ipsam optio aliquid a qui? Dolorum inventore sed provident ratione omnis doloremque commodi vel error, cupiditate laborum nam recusandae aperiam qui fugiat optio magni deserunt consequatur neque fugit quod, ad minus accusantium praesentium et? Accusamus animi consectetur atque quibusdam adipisci quo, quis assumenda incidunt placeat voluptas alias magnam perspiciatis sunt cum velit impedit unde! Perferendis molestiae quaerat odio nisi non, quas eveniet veritatis atque ab officia voluptates incidunt consectetur fugit. Voluptate quaerat impedit libero qui quibusdam quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Lorem ipsum 2',
        //     'slug' => 'lorem-ipsum2',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt magni totam autem quod rerum quibusdam ipsum corrupti tenetur rem assumenda nam, aperiam ipsam optio aliquid a qui? Dolorum inventore sed provident ratione omnis doloremque commodi vel error, cupiditate laborum nam recusandae aperiam qui fugiat optio magni deserunt consequatur neque fugit quod, ad minus accusantium praesentium et? Accusamus animi consectetur atque quibusdam adipisci quo, quis assumenda incidunt placeat voluptas alias magnam perspiciatis sunt cum velit impedit unde! Perferendis molestiae quaerat odio nisi non, quas eveniet veritatis atque ab officia voluptates incidunt consectetur fugit. Voluptate quaerat impedit libero qui quibusdam quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Lorem ipsum 3',
        //     'slug' => 'lorem-ipsum3',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt magni totam autem quod rerum quibusdam ipsum corrupti tenetur rem assumenda nam, aperiam ipsam optio aliquid a qui? Dolorum inventore sed provident ratione omnis doloremque commodi vel error, cupiditate laborum nam recusandae aperiam qui fugiat optio magni deserunt consequatur neque fugit quod, ad minus accusantium praesentium et? Accusamus animi consectetur atque quibusdam adipisci quo, quis assumenda incidunt placeat voluptas alias magnam perspiciatis sunt cum velit impedit unde! Perferendis molestiae quaerat odio nisi non, quas eveniet veritatis atque ab officia voluptates incidunt consectetur fugit. Voluptate quaerat impedit libero qui quibusdam quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Lorem ipsum 4',
        //     'slug' => 'lorem-ipsum4',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt magni totam autem quod rerum quibusdam ipsum corrupti tenetur rem assumenda nam, aperiam ipsam optio aliquid a qui? Dolorum inventore sed provident ratione omnis doloremque commodi vel error, cupiditate laborum nam recusandae aperiam qui fugiat optio magni deserunt consequatur neque fugit quod, ad minus accusantium praesentium et? Accusamus animi consectetur atque quibusdam adipisci quo, quis assumenda incidunt placeat voluptas alias magnam perspiciatis sunt cum velit impedit unde! Perferendis molestiae quaerat odio nisi non, quas eveniet veritatis atque ab officia voluptates incidunt consectetur fugit. Voluptate quaerat impedit libero qui quibusdam quia.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Lorem ipsum 3',
        //     'slug' => 'lorem-ipsum3',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt magni totam autem quod rerum quibusdam ipsum corrupti tenetur rem assumenda nam, aperiam ipsam optio aliquid a qui? Dolorum inventore sed provident ratione omnis doloremque commodi vel error, cupiditate laborum nam recusandae aperiam qui fugiat optio magni deserunt consequatur neque fugit quod, ad minus accusantium praesentium et? Accusamus animi consectetur atque quibusdam adipisci quo, quis assumenda incidunt placeat voluptas alias magnam perspiciatis sunt cum velit impedit unde! Perferendis molestiae quaerat odio nisi non, quas eveniet veritatis atque ab officia voluptates incidunt consectetur fugit. Voluptate quaerat impedit libero qui quibusdam quia.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
