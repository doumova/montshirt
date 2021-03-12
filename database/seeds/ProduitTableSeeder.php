<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creation des produits
      
        DB::table('produits')->insert([
            [
                'nom'=>'tshirt',
                'prix_ht'=>"45",
                'description'=>"t-Shirt gonies gonies",
                'photo_principale'=>"https://upload.wikimedia.org/wikipedia/commons/2/24/Blue_Tshirt.jpg",
            ],
            [
                'nom'=>'tshirt',
                'prix_ht'=>"45",
                'description'=>"t-Shirt gonies gonies",
                'photo_principale'=>"https://upload.wikimedia.org/wikipedia/commons/c/c6/Grey_Tshirt.jpg",
            ],
            [
                'nom'=>'tshirt',
                'prix_ht'=>"45",
                'description'=>"t-Shirt gonies gonies",
                'photo_principale'=>"http://prestig.e-monsite.com/medias/album/t-shirt-bleu-marine.jpg",
            ],
            [
                'nom'=>'tshirt',
                'prix_ht'=>"45",
                'description'=>"t-Shirt gonies gonies",
                'photo_principale'=>"https://upload.wikimedia.org/wikipedia/commons/c/c6/Grey_Tshirt.jpg",
            ],
            [
                'nom'=>'tshirt',
                'prix_ht'=>"45",
                'description'=>"t-Shirt gonies gonies",
                'photo_principale'=>"https://upload.wikimedia.org/wikipedia/commons/0/0c/Crew_neck_T-shirt.jpg"
            ],
            [
                'nom'=>'tshirt',
                'prix_ht'=>"45",
                'description'=>"t-Shirt gonies gonies",
                'photo_principale'=>"https://upload.wikimedia.org/wikipedia/commons/c/c6/Grey_Tshirt.jpg",
            ],
        ]);
    }
}
