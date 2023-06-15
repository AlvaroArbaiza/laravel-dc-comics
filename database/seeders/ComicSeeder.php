<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // prendiamo l'array dalla cartella config per ciclarlo e poi usarlo per riempure la tabella
        $comics = config('comics');

        foreach ($comics as $element) {
            $newComic = new Comic();
            $newComic->title = $element['title'];
            $newComic->description = $element['description'];
            $newComic->thumb = $element['thumb'];
            $newComic->price = $element['price'];
            $newComic->series = $element['series'];
            $newComic->sale_date = $element['sale_date'];
            $newComic->type = $element['type'];
            $newComic->artists = implode(', ', $element['artists']);
            $newComic->writers = implode(', ', $element['writers']);
            $newComic->save();
        }
    }
}
