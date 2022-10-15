<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'author' => 'Aguto',
            'img' => 'a.jpg',
            'slug' => 'judul-post-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut suscipit possimus incidunt nemo! Perspiciatis, ex praesentium ut quos impedit mollitia voluptatibus in officia, corporis, incidunt tempora nesciunt dolores exercitationem soluta. Doloribus officiis, neque earum dolor reiciendis unde iure tenetur consectetur odio vel adipisci id perferendis facere velit officia pariatur voluptas hic veniam minus assumenda minima cum numquam enim voluptatibus? Praesentium delectus ducimus, dolor tempora voluptatem nihil consequuntur architecto ea, rerum quo, repudiandae officia unde asperiores optio. Minus placeat dicta dolore.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'author' => 'Aguto',
            'img' => 'b.jpg',
            'slug' => 'judul-post-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos iusto assumenda, fuga eum voluptatibus dignissimos temporibus quod accusantium harum eaque ipsam est dolorum hic incidunt veniam vel veritatis, quisquam velit commodi quam omnis, atque molestias? Molestiae totam distinctio illum a, ut voluptatum aperiam in quisquam amet maxime minima dolore placeat minus sint! Quidem labore consequuntur rem voluptatibus doloremque maiores rerum iste ullam explicabo accusamus veniam, illo distinctio velit voluptate accusantium sint qui soluta dignissimos assumenda eos. Iste tempore beatae ab, deserunt vitae culpa, accusamus excepturi optio quibusdam veniam itaque facere omnis, reiciendis recusandae? Architecto earum ipsum accusantium itaque laboriosam debitis.'
        ],
        [
            'title' => 'Judul Post Ke Tiga',
            'author' => 'Aguto',
            'img' => 'c.jpg',
            'slug' => 'judul-post-Ke-tiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos iusto assumenda, fuga eum voluptatibus dignissimos temporibus quod accusantium harum eaque ipsam est dolorum hic incidunt veniam vel veritatis, quisquam velit commodi quam omnis, atque molestias? Molestiae totam distinctio illum a, ut voluptatum aperiam in quisquam amet maxime minima dolore placeat minus sint! Quidem labore consequuntur rem voluptatibus doloremque maiores rerum iste ullam explicabo accusamus veniam, illo distinctio velit voluptate accusantium sint qui soluta dignissimos assumenda eos. Iste tempore beatae ab, deserunt vitae culpa, accusamus excepturi optio quibusdam veniam itaque facere omnis, reiciendis recusandae? Architecto earum ipsum accusantium itaque laboriosam debitis.'
        ],
        [
            'title' => 'Judul Post Ke Empat',
            'author' => 'Aguto',
            'img' => 'd.jpg',
            'slug' => 'judul-post-Ke-empat',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos iusto assumenda, fuga eum voluptatibus dignissimos temporibus quod accusantium harum eaque ipsam est dolorum hic incidunt veniam vel veritatis, quisquam velit commodi quam omnis, atque molestias? Molestiae totam distinctio illum a, ut voluptatum aperiam in quisquam amet maxime minima dolore placeat minus sint! Quidem labore consequuntur rem voluptatibus doloremque maiores rerum iste ullam explicabo accusamus veniam, illo distinctio velit voluptate accusantium sint qui soluta dignissimos assumenda eos. Iste tempore beatae ab, deserunt vitae culpa, accusamus excepturi optio quibusdam veniam itaque facere omnis, reiciendis recusandae? Architecto earum ipsum accusantium itaque laboriosam debitis.'
        ],
        [
            'title' => 'Judul Post Ke Lima',
            'author' => 'Aguto',
            'img' => 'e.jpg',
            'slug' => 'judul-post-Ke-lima',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos iusto assumenda, fuga eum voluptatibus dignissimos temporibus quod accusantium harum eaque ipsam est dolorum hic incidunt veniam vel veritatis, quisquam velit commodi quam omnis, atque molestias? Molestiae totam distinctio illum a, ut voluptatum aperiam in quisquam amet maxime minima dolore placeat minus sint! Quidem labore consequuntur rem voluptatibus doloremque maiores rerum iste ullam explicabo accusamus veniam, illo distinctio velit voluptate accusantium sint qui soluta dignissimos assumenda eos. Iste tempore beatae ab, deserunt vitae culpa, accusamus excepturi optio quibusdam veniam itaque facere omnis, reiciendis recusandae? Architecto earum ipsum accusantium itaque laboriosam debitis.'
        ],
        [
            'title' => 'Judul Post Ke Enam',
            'author' => 'Aguto',
            'img' => 'f.jpg',
            'slug' => 'judul-post-Ke-enam',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos iusto assumenda, fuga eum voluptatibus dignissimos temporibus quod accusantium harum eaque ipsam est dolorum hic incidunt veniam vel veritatis, quisquam velit commodi quam omnis, atque molestias? Molestiae totam distinctio illum a, ut voluptatum aperiam in quisquam amet maxime minima dolore placeat minus sint! Quidem labore consequuntur rem voluptatibus doloremque maiores rerum iste ullam explicabo accusamus veniam, illo distinctio velit voluptate accusantium sint qui soluta dignissimos assumenda eos. Iste tempore beatae ab, deserunt vitae culpa, accusamus excepturi optio quibusdam veniam itaque facere omnis, reiciendis recusandae? Architecto earum ipsum accusantium itaque laboriosam debitis.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
