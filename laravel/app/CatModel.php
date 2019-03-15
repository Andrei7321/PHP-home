<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use InstagramScraper\Instagram;

class CatModel extends Model
{
    public static function throughTags($tag, $count=6)
    {
    	$instagram = new \InstagramScraper\Instagram();
    	$medias = $instagram->getMediasByTag($tag, $count);
    	$urls = [];
    	foreach ($medias as $value) {
    		$urls[] = $value->getImageHighResolutionUrl();
    	}
    	return $urls;
    }
    public static function throughComment($comment, $count=6)
    {
    	$instagram = new \InstagramScraper\Instagram();
    	$medias = $instagram->getMediasByComment($comment, $count);
    	$urls = [];
    	foreach ($medias as $value) {
    		$urls[] = $value->getImageHighResolutionUrl();
    	}
    	return $urls;
    }
}
