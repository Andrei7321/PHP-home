<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use InstagramScraper\Instagram;

class CatModel extends Model
{
    public  function throughTags($tag, $count=6)
    {
    	$instagram = new \InstagramScraper\Instagram();
    	$medias = $instagram->getMediasByTag($tag, $count);
    	// $urls = [];
    	// foreach ($medias as $value) {
    	// 	$urls[] = $value->getImageHighResolutionUrl();
    	// }
    	return $medias;
    }


    // public static function throughComments($tag, $count=6)
    // {
    //     $instagram = new \InstagramScraper\Instagram();
    //     $medias = $instagram->getMediasByTag($tag, $count);
    //     $comments = [];
    //     foreach ($medias as $value) {
    //         $comments[] = $value->getCaption();
    //     }
    //     return $comments;
    // }
    // "Caption: {$media->getCaption()}\n";
    
}
