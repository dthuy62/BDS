<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
use Str;
use App\Models\News;

class BDS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:BDS';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $crawler = Goutte::request('GET', 'https://www.muabannhadat.vn/tin-tuc/om-dat-huyen-ngoai-thanh-coi-chung-om-qua-dang.html');
        $title = $crawler->filter('h1._Title')->each(function ($node) {
            print($node->text()."\n");
            return $node->text();
        })[0];
        $slug = Str::slug($title);
        $description = $crawler->filter('div._DesSummary')->each(function ($node) {
            print($node->text()."\n");
            return $node->text();
        })[0];
        $content = $crawler->filter('div.mbnd_detail_descripton')->each(function ($node) {
            print($node->text()."\n");
            return $node->text();

        })[0];
        $thumbnail = $crawler->filter('img.img-thumbnail')->each(function ($node) {
            // print($node->text()."\n");
            return $node->attr('src');

        })[0];
        $data = [
            'title' => $title,
            'slug' => $slug,
            'description' => $description,
            'content' => $content,
            'thumbnail' => $thumbnail
        ];
        News::create($data);
        // foreach ($link as $link) {

        //     $l = env("BAT_DONG_SAN") . $link . "\n";
        //     self::scrapeBDS($l);
        // }
    }
    // public static function scrapeBDS($url)
    // {
    //     $crawler = Goutte::request('GET',$url);

    //     $title = $crawler->filter('h1.detailsView-title-style')->each(function ($node) {
    //         return $node->text();
    //     });
    //      $slug = '';
    //     if(isset($title[0]))
    //     {
    //         $titles = $title[0];


    //         $slug = Str::slug($titles);

    //     }

    //     var_dump($slug);

    //     $description = $crawler->filter('h2.summary')->each(function ($node) {
    //         return $node->text();
    //     });
    //     if(isset($description[0]))
    //     {
    //         $description = $description[0];
    //     }

    //     $content = $crawler->filter('div.detailsView-contents-style detail-article-content')->each(function ($node) {
    //         return $node->text();
    //     });
    //     if(isset($content[0]))
    //     {
    //         $content = $content[0];
    //     }


    //     // $thumbnail = $crawler->filter('img.img-thumbnail._image')->each(function ($node) {
    //     //     return $node->attr('src');
    //     // })[0];






    }
