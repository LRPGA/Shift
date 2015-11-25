<?php

class Render{
    private static $html_start;
    private static $html_end;
    private static $content;
    
    public static function init(){
        self::$html_start = '<!DOCTYPE HTML>
            <html>
            <head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <title>Home</title>
            </head>
            <body>';
        self::$html_end = '</body>
            </html>';   
    }
    
    public static function output(){
        echo self::$html_start;
        echo self::$content;
        echo self::$html_end;
    }
}

?>