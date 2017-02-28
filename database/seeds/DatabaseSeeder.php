<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


    /**
     * Run the database seeds.
     *
     * @return void
     */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();
        $this->call('PostTableSeeder');
    }

}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Article::class, 20)->create();
    }
}
