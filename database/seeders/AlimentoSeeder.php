<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alimentos')->insert([
            'nombre' => 'Acelga',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('alimentos')->insert([
            'nombre' => 'Ahuyama',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('alimentos')->insert([
            'nombre' => 'Ajo',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('alimentos')->insert([
            'nombre' => 'Apio',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Arveja seca importada',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Arveja verde en vaina',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Berenjena',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Br??coli',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Calabac??n',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Calabaza',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cebolla cabezona blanca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cebolla cabezona roja',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cebolla junca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ch??colo mazorca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cilantro',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Coliflor',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Espinaca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Fr??jol',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Fr??jol verde',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Garbanzo',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Granos Secos',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Habichuela',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lechuga Batavia',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lechuga crespa',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lenteja',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pepino cohombro',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pepino de rellenar',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Perejil',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Piment??n',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Remolacha',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Repollo',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomate chonto',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomate de ??rbol',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomate Riogrande',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomates otros',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Verduras y hortalizas otras',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Zanahoria',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate Choquette',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate com??n',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate Hass',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate papelillo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacates otros',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Banano bocadillo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Banano criollo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ciruela importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ciruela nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Coco',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Curuba',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Durazno importado',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Durazno nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Fresa',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Frutas importadas otras',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Frutas otras',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Granadilla',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Guan??bana',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Guayaba pera',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Guayabas otras',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Gulupa',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Kiwi',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lim??n com??n',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lim??n mandarino',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lim??n Tahit??',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lulo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mandarina Arrayana',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mandarina Oneco',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango com??n',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango de az??car',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango Tommy',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango Yulima',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mangos otros',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Manzana importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Manzana nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Maracuy??',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mel??n',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mora',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Naranja com??n',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Naranja Valencia y/o Sweet',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papaya Maradol',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papaya Paulina',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papaya tainung',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Patilla',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Patilla baby',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pera importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pera nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pi??a gold',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pitahaya',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tangelo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uchuva',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uva importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uva Isabela',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uva nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Zapote',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Arracacha',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Jengibre',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa Betina',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa capira',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa criolla',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa nevada',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa parda pastusa',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa R-12',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa rub??',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa superior',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa suprema',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa ??nica',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pl??tano guineo',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pl??tano hart??n verde',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pl??tanos otros',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ulluco',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Yuca',
            'categoria' => 'Tub??rculos, ra??ces y pl??tanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Arroz',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Avena',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ma??z Amarillo',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ma??z Blanco',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Bebidas l??cteas',
            'categoria' => 'Huevos y L??cteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Huevo',
            'categoria' => 'Huevos y L??cteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'L??cteos otros',
            'categoria' => 'Huevos y L??cteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Leche en polvo',
            'categoria' => 'Huevos y L??cteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Leche pasteurizada UHT',
            'categoria' => 'Huevos y L??cteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Quesos y cuajadas',
            'categoria' => 'Huevos y L??cteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Carne de cerdo',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Carne de pollo',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Carne de res',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Carnes frias y embutidos',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Bocachico',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cachama',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Camar??n',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mariscos otros',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mojarra',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tilapia',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Aceites',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Agua envasada',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'At??n en lata',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Az??car',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Bebidas alcoh??licas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Bebidas otras',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Caf??',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cereales para desayuno',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cervezas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Chocolate',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Condimentos',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Confiter??a',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Conservas y enlatados',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cremas y sopas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Galletas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Gaseosas y maltas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Grasas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Harinas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Panela',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pasabocas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pastas alimenticias',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Procesados otros',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Productos de panaderia',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Sal yodada',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Salsas y aderezos',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Sardinas en lata',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
