<?php
if (file_exists('../log/details_url_human2.txt')) {
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/webot/en/lib/txttolink4.php";
    @txttolink4($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human2.txt', 'http://en.webot.org/?u=');
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/webot/en/lib/filterlink.php";
    @filterlink($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human2.txt.htm', '[' . strtoupper($q) . ']');
    if (file_exists('../log/details_url_human2.txt.htm.htm')) {
        $lines = array_unique(file('../log/details_url_human2.txt.htm.htm'));
        $lines = array_reverse($lines);
        file_put_contents("../news/data/popular_$q.html", implode($lines));
        @include "data/popular_$q.html";
    }
}
?>