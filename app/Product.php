<?php
use Cohensive\Embed\Facades\Embed;

class Product extends Model
{

    public function getVideoHtmlAttribute()
    {
    	$video = 'https://www.youtube.com/watch?v=jnvu1GpylP0';
        $embed = Embed::make($video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
    }

}
