<?php namespace Eugene3993\Seolight\Classes;

use Eugene3993\Seolight\Models\Settings;

class Robots {
    public static function generate() {
        $content = str_replace('$domain', 'https://'.$_SERVER['HTTP_HOST'], Settings::get('robots_txt'));
        return $content;
    }
}
