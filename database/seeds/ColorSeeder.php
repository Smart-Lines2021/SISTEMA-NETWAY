<?php

use Illuminate\Database\Seeder;
use App\Admin\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::truncate();
        $color = new Color;//Creamos color
        $color->nombre = "Negro";
        $color->save();//Guardamos color

        $color = new Color;//Creamos color
        $color->nombre = "Azul";
        $color->save();//Guardamos color

        $color = new Color;//Creamos color
        $color->nombre = "Blanco";
        $color->save();//Guardamos color


        $color = new Color;//Creamos color
        $color->nombre = "Gris";
        $color->save();//Guardamos color

        $color = new Color;//Creamos color
        $color->nombre = "Magenta";
        $color->save();//Guardamos color
    }
}
