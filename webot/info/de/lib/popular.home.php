<?php
$q='usnews';
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt')) {
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/webot/en/lib/txttolink4.php";
    @txttolink4($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt', 'http://en.webot.org/?u=');
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/webot/en/lib/filterlink.php";
    @filterlink($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt.htm', '[' . strtoupper($q) . ']');
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt.htm.htm')) {
        $lines = array_unique(file($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt.htm.htm'));
        $lines = array_reverse($lines);
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/webot/en/news/data/popular_$q.html", implode($lines));
        @include $_SERVER['DOCUMENT_ROOT'] . "/webot/en/news/data/popular_$q.html";
    }
}
?>
