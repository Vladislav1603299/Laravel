<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*protected $news = [
        [
            'category' => 'sport',
            'newsList' => [
                [
                    'id' => 1,
                'title' => 'Hockey',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 1',
                ],
                [
                    'id' => 2,
                'title' => 'Football',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 2',
                ],
                [
                    'id' => 3,
                'title' => 'Volleyball',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 3',
                ],
                [
                    'id' => 4,
                'title' => 'Basketball',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 4',
                ],
            ]
        ],
        [
            'category' => 'theart',
            'newsList' => [
                [
                    'id' => 5,
                'title' => 'Fire Theater',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 1',
                ],
                [
                    'id' => 6,
                'title' => 'Opera',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 2',
                ],
                [
                    'id' => 7,
                'title' => 'Ballet',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 3',
                ],
                [
                    'id' => 8,
                'title' => 'Shadow Theater',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 4',
                ],
            ]
        ],
        [
            'category' => 'kitchen',
            'newsList' => [
                [
                    'id' => 9,
                'title' => 'Paella',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 1',
                ],
                [
                    'id' => 10,
                'title' => 'Bunny chow',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 2',
                ],
                [
                    'id' => 11,
                'title' => 'Pastilla',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 3',
                ],
                [
                    'id' => 12,
                'title' => 'Tandoori chickens',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 4',
                ],
            ]
        ],
        [
            'category' => 'politics',
            'newsList' => [
                [
                    'id' => 13,
                'title' => 'News 1',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 1',
                ],
                [
                    'id' => 14,
                'title' => 'News 2',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 2',
                ],
                [
                    'id' => 15,
                'title' => 'News 3',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 3',
                ],
                [
                    'id' => 16,
                'title' => 'News 4',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 4',
                ],
            ]
        ],
        [
            'category' => 'games',
            'newsList' => [
                [
                    'id' => 17,
                'title' => 'Dota',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 1',
                ],
                [
                    'id' => 18,
                'title' => 'Counter strike',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 2',
                ],
                [
                    'id' => 19,
                'title' => 'Warface',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 3',
                ],
                [
                    'id' => 20,
                'title' => 'World of Tanks',
                'spoiler' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro suscipit iste quis, esse temporibus doloribus sit pariatur molestiae voluptates placeat perspiciatis autem dolor tempora optio recusandae vitae adipisci corporis aliquam.',
                'autor' => 'autor 4',
                ],
            ]
        ],
    ];*/
}
