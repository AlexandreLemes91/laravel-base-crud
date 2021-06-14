<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            /* nuovo record */
            $new_Comic = new Comic();

            /* inserimento dati */
            $new_Comic->title = $comic['title'];
            $new_Comic->description = $comic['description'];
            $new_Comic->thumb = $comic['thumb'];
            $new_Comic->price = $comic['price'];
            $new_Comic->series = $comic['series'];
            $new_Comic->sale_date = $comic['sale_date'];
            $new_Comic->type = $comic['type'];

            /* salvataggio del nuovo record */
            $new_Comic->save();
        }
    }
}
