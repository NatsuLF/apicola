<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Post;
use App\Tag;
use App\Image;
use App\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->command->info('Seeding starts.');

        $this->command->info('Removing data');
        DB::table('users')->delete();
        DB::table('posts')->delete();
        DB::table('tags')->delete();
        DB::table('items')->delete();
        DB::table('images')->delete();

        $this->command->info('Creating users');
        $default_user = User::create([
            'name' => env('DEFAULT_USER_NAME'),
            'email' => env('DEFAULT_USER_EMAIL'),
            'password' => bcrypt(env('DEFAULT_USER_PASSWORD'))
        ]);

        $another_default_user = User::create([
          'name' => env('ANOTHER_DEFAULT_USER_NAME'),
          'email' => env('ANOTHER_DEFAULT_USER_EMAIL'),
          'password' => bcrypt(env('ANOTHER_DEFAULT_USER_PASSWORD'))
        ]);

        $this->command->info('Creating tags');
        $tag1 = Tag::create(['name' => 'Tag1']);
        $tag2 = Tag::create(['name' => 'Tag2']);
        $tag3 = Tag::create(['name' => 'Tag3']);
        $tag4 = Tag::create(['name' => 'Tag4']);

        $this->command->info('Creating posts');
        $post1 = Post::create([
            'title' => 'Las abejas',
            'published' => true,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'slug' => 'Las_avejas',
            'summary' => 'Lorem ipsum dolor sit amet'
        ]);

        $post2 = Post::create([
            'title' => 'La miel de abeja',
            'published' => true,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'slug' => 'La_miel_de_abeja',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
        ]);

        $this->command->info('Linking tags and posts');
        $post1->tags()->attach($tag1->id);
        $post1->tags()->attach($tag2->id);
        $post1->tags()->attach($tag3->id);

        $post2->tags()->attach($tag1->id);
        $post2->tags()->attach($tag4->id);

        $this->command->info('Linking users with posts');
        $another_default_user->posts()->save($post1);
        $another_default_user->posts()->save($post2);

        $this->command->info('Creating images');
        $image = Image::create([
            'url' => 'https://dl.dropboxusercontent.com/s/kknqpayixxbn3zg/colmena-hexagonal.png?dl=0'
        ]);

        $this->command->info('Creating Item');
        $item = Item::create([
            'name' => 'Colmena hexagonal',
            'price' => 250,
            'description' => 'Colmena hexagonal modelo Vincent',
            'eng_desc' => 'Hexagonal hive model Vicente',
            'slug' => 'Colmena_hexagonal'
        ]);

        $this->command->info('Linking images with items');
        $item->images()->save($image);

        $this->command->info('Linking items with users');
        $default_user->items()->save($item);

        $this->command->info('Seeding ended with no problems');
    }
}
