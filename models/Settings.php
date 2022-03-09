<?php namespace Eugene3993\Seolight\Models;

use Model;

class Settings extends Model {

    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'eugene_seo_settings';
    public $settingsFields = 'fields.yaml';
    protected $cache = [];

}