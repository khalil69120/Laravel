<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        [
            'title' => 'bla bla',
            'author' => 'pratchett',
            'genre' => 'action',
            'publication_year' => 2000,
            'synopsis' => 'la guerre'
        ],
        [
            'title' => 'blo blo',
            'author' => 'pratchett',
            'genre' => 'action',
            'publication_year' => 2005,
            'synopsis' => 'la grande bataille'
        ],
        [
            'title' => 'bli bli',
            'author' => 'pratchett',
            'genre' => 'action',
            'publication_year' => 2010,
            'synopsis' => 'la bataille fait rage'
        ],
           
        ]);

    }
}
