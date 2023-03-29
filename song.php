<?php
$music = new Song;
$music->Name = "Castles in the Air";
$music->Artist = "Don McLean";
$music->duration = 3.42;
$music->Audience = "Refined Gentlemen";
$music->get_music();

class Song
{
    var  $Name;
    var $Artist;
    var $duration;
    var $Audience;

    function get_music()
    {
        echo "The song name is ".$this->Name."<br>";
        echo "The artist of the song is ".$this->Artist."<br>";
        echo "The duration of the song is ".$this->duration."minutes"."<br>";
        echo "The main audience of this song are ".$this->Audience."<br>";
    }

}
?>