<?php

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
        \App\Models\Post::insert([
            'user_id' => 1,
           'titulo' => 'Bolsonaro assume presidencia do Brasil',
           'resumo' => 'No dia 01 de janeiro',
           'conteudo' => 'Lorem ipsum dolor sit amet misp lapa sood epa sldoa',
           'slug' => 'bolsonaro-assume-presidencia',
            'situacao' => 'ras',
            'created_at' => now()

        ]);
    }
}
