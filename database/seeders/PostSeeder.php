<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Faza Al Fariezhi',
            'category_id' => 1,
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia error fuga eveniet, ab hic nobis. Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum ratione officia necessitatibus repellendus asperiores voluptatem corporis quas vero vitae recusandae reiciendis quibusdam, modi magnam ullam, veritatis aut sapiente deserunt nostrum temporibus? Recusandae labore delectus aut aliquid distinctio voluptatum corporis ea fuga eum, officia eveniet amet minima, nostrum eos dolores. Repudiandae sint numquam eaque quo obcaecati molestiae? Iusto, iste. Maxime aspernatur, iure odio quo consequuntur dolore earum delectus voluptatem esse quod nostrum voluptatibus ipsa, ducimus suscipit commodi quae! Delectus dolorem aspernatur dolorum nam, id blanditiis nesciunt maiores vero omnis fugiat expedita ab tempora provident accusantium culpa. Eligendi aliquid adipisci rerum laboriosam.'
        ]);
        DB::table('posts')->insert([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Sandhika Galih',
            'category_id' => 2,
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia error fuga eveniet, ab hic nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, alias!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum ratione officia necessitatibus repellendus asperiores voluptatem corporis quas vero vitae recusandae reiciendis quibusdam, modi magnam ullam, veritatis aut sapiente deserunt nostrum temporibus? Recusandae labore delectus aut aliquid distinctio voluptatum corporis ea fuga eum, officia eveniet amet minima, nostrum eos dolores. Repudiandae sint numquam eaque quo obcaecati molestiae? Iusto, iste. Maxime aspernatur, iure odio quo consequuntur dolore earum delectus voluptatem esse quod nostrum voluptatibus ipsa, ducimus suscipit commodi quae! Delectus dolorem aspernatur dolorum nam, id blanditiis nesciunt maiores vero omnis fugiat expedita ab tempora provident accusantium culpa. Eligendi aliquid adipisci rerum laboriosam.'
        ]);
        DB::table('posts')->insert([
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'author' => 'Yogi Arfiansyah',
            'category_id' => 3,
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia error fuga eveniet, ab hic nobis. Lorem, ipsum dolor.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum ratione officia necessitatibus repellendus asperiores voluptatem corporis quas vero vitae recusandae reiciendis quibusdam, modi magnam ullam, veritatis aut sapiente deserunt nostrum temporibus? Recusandae labore delectus aut aliquid distinctio voluptatum corporis ea fuga eum, officia eveniet amet minima, nostrum eos dolores. Repudiandae sint numquam eaque quo obcaecati molestiae? Iusto, iste. Maxime aspernatur, iure odio quo consequuntur dolore earum delectus voluptatem esse quod nostrum voluptatibus ipsa, ducimus suscipit commodi quae! Delectus dolorem aspernatur dolorum nam, id blanditiis nesciunt maiores vero omnis fugiat expedita ab tempora provident accusantium culpa. Eligendi aliquid adipisci rerum laboriosam.'
        ]);
        DB::table('posts')->insert([
            'title' => 'Judul Post Keempat',
            'slug' => 'judul-post-keempat',
            'author' => 'Rendy Bayu F',
            'category_id' => 2,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias mollitia reiciendis eius consequatur veniam necessitatibus ducimus, soluta dolore inventore fuga.',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet earum eveniet nisi molestias corporis illo, culpa ex nobis quia? Aliquam doloribus, illum, porro cum, reiciendis atque eius veniam libero vitae eos aspernatur. Officiis, molestias reprehenderit eos voluptates minima corporis nulla minus architecto enim repellat, accusantium aliquam unde iste quisquam aspernatur expedita perferendis adipisci officia maiores dignissimos qui, quasi ullam porro. Nihil voluptatem suscipit voluptas. Officia, accusamus nulla itaque ducimus eos iure aliquid consequuntur possimus incidunt adipisci perferendis, atque modi molestias sapiente provident mollitia odit accusantium vel laboriosam, eaque harum? Vel sapiente ipsam saepe maxime harum. Repellat illum quis pariatur nam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi suscipit possimus iure a blanditiis doloremque repellendus fugit ipsa, obcaecati enim earum aperiam atque ducimus esse hic saepe natus. Nesciunt sint ex explicabo provident laboriosam nobis cupiditate distinctio nostrum, fugit consequuntur molestiae quia quasi voluptate magnam a pariatur ducimus, excepturi perspiciatis. Error amet dolor voluptatem? Molestias vitae, quo numquam quas beatae laudantium dolor consequuntur iusto. Porro adipisci dicta qui. Beatae quae animi possimus impedit provident aut! A nulla omnis modi nobis?</p>'
        ]);
    }
}
