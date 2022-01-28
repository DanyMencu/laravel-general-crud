<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Game;



class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Random Faker 20 games
        for ($i = 0; $i < 20; $i++) {
            $new_game = new Game();

            $new_game->title = $faker->words(rand( 1, 5 ), true);
            $new_game->slug = Str::slug ($new_game->title, '-');
            $new_game->author = $faker->words(rand(1, 3), true);
            $new_game->console = 'pc';
            $new_game->price = $faker->randomFloat(2, 9, 101);
            $new_game->status = 'nuovo';
            $new_game->image = $faker->imageUrl(360, 360, 'food', true);

            $new_game->save();
        }
    }
}
