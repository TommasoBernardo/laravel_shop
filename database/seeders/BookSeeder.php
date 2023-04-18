<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'Slayer',
                'author' => 'Kiersten White',
                'image' => 'https://bookcart.azurewebsites.net/Upload/6d91b7b0-b8d1-41ad-a0ef-65e2324fc1b3Slayer.jpg',
                'price' => 13.14
            ],
            [
                'name' => 'The Simple Wild',
                'author' => 'KA Tucker',
                'image' => 'https://bookcart.azurewebsites.net/Upload/b868eb26-f12c-4dcf-ba19-03e0d6cafb8d36373564.jpg',
                'price' => 11.53
            ],
            [
                'name' => 'The Hate You Give',
                'author' => 'Angie Thomas',
                'image' => 'https://bookcart.azurewebsites.net/Upload/3d894fa1-8746-4443-b244-99624cc39f1fq1we.jpg',
                'price' => 22.7
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'image' => 'https://bookcart.azurewebsites.net/Upload/5b7162d6-2780-461b-be6f-e4debac083ad18007564.jpg',
                'price' => 34.8
            ],
            [
                'name' => 'The Beholder',
                'author' => 'Anna Bright',
                'image' => 'https://bookcart.azurewebsites.net/Upload/5ba1968d-a7f5-4a04-99c2-281088b8532fqq.jpg',
                'price' => 9.98
            ],
            [
                'name' => 'La ladra di parole',
                'author' => ' Abi Daré',
                'image' => 'https://www.ibs.it/images/9788842932932_0_536_0_75.jpg',
                'price' => 17.99
            ],
            [
                'name' => 'Lo Hobbit o la riconquista del tesoro',
                'author' => ' John R. R. Tolkien',
                'image' => 'https://m.media-amazon.com/images/I/71gWo8CqMsL.jpg',
                'price' => 20.00
            ],
            [
                'name' => 'La ragazza di fuoco. Hunger games ',
                'author' => ' Suzanne Collins ',
                'image' => 'https://m.media-amazon.com/images/I/71-6LTR2ejL.jpg',
                'price' => 7.99
            ],
            [
                'name' => 'Il ladro di fulmini',
                'author' => ' Rick Riordan',
                'image' => 'https://www.nonsolocinema.com/wp/wp-content/uploads/2010/03/arton19721.jpg',
                'price' => 9.88
            ],
            [
                'name' => 'Gli arancini di Montalbano',
                'author' => ' Andrea Camilleri',
                'image' => 'https://www.mondadoristore.it/img/Commissario-Montalbano-Il-Alberto-Sironi/ea803280704576/BL/BL/10/NZO/?tit=Commissario+Montalbano+%28Il%29+-+Gli+Arancini+Di+Montalbano&aut=Alberto+Sironi',
                'price' => 9
            ],
            [
                'name' => 'The Witcher',
                'author' => 'Andrzej Sapkowski',
                'image' => 'https://www.lafeltrinelli.it/images/9781473231061_0_424_0_75.jpg',
                'price' => 998
            ],
            [
                'name' => 'Shadowhunters - 1. Città di ossa ',
                'author' => 'Cassandra Clare ',
                'image' => 'https://m.media-amazon.com/images/I/51fAUkwDo-L.jpg',
                'price' => 12
            ]
        ];

        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}
