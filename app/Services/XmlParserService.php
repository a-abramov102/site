<?php

namespace App\Services;

use App\Models\RssNews;
use App\Models\User\DBUser;
use Orchestra\Parser\Xml\Facade as XmlParser;
use SimpleXMLElement;

class XmlParserService
{
    public function parse(string $link): array
    {
        ini_set('user_agent', "Godzilla/42.4 (Gabba Gandalf Client 7.3; C128; Z80) Lord of the RSS Weed Edition (KHTML, like Gold Dust Day Gecko) Chrome/97.0.43043.0 Safari/1337.42");

        $xml = XmlParser::load($link);

        return $parse;
    }
    public function saveNews(string $link)
    {
        ini_set('user_agent', "Godzilla/42.4 (Gabba Gandalf Client 7.3; C128; Z80) Lord of the RSS Weed Edition (KHTML, like Gold Dust Day Gecko) Chrome/97.0.43043.0 Safari/1337.42");
        $xml=simplexml_load_file($link);
        foreach($xml->channel->item  as $item){
            $title = (string)$item->title ;
            $url = (string)$item->link;
            $description = (string)$item->description;
            $create_date = (string)$item->pubDate;
            $autor = (string)$item->author;
            $img = 'test';

            $done = RssNews::create(array('title'=>$title,'url'=>$url,'description'=>$description,'autor'=>$autor,'img'=>$img));
            if (!$done){
                dd($done);
            }
        }

        /*

        \Storage::disk('public')->put('test' . '.txt', $parse );*/
    }

}