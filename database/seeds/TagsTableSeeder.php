<?php
use App\Tag;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'html',
            'css',
            'php',
            'js',
            'vuejs',
            'laravel'
        ];

        foreach($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->name = Str::Slug($tag, '-');
            $newTag->save();
        }
    }
}
