<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
         
            $article = new Article(); 
            $article->title = $faker->word();
            $article->subtitle = $faker->text(100);
            $article->author = $faker->name();
            $article->text = $faker->text(100);
            $article->publication_date = $faker->date( 'Y-m-d') ;
            $article->save();
        }
       
    }
}
