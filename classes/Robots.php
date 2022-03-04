<?php namespace Eugene3993\Seolight\Classes;

use Eugene3993\Seolight\Models\Settings;

class Robots {
    public static function generate() {
        $domain = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
        $content = str_replace('$domain', $domain, Settings::get('robots_txt'));
        return $content;
    }
}
