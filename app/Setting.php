<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',    'site_logo',    'site_favicon',     'email',    'phone',
        'facebook',     'twitter',      'linkedin',         'vimeo',    'youtube',
        'about_us',     'address',
        'breaking_news_category_id', 'meta_description'
    ];

    public static function getDescription() {
        if(Setting::first() !== null)
            return Setting::first()->meta_description;
        return "this is default description";
    }
    public static function getTitle() {
        if(Setting::first() !== null)
            return Setting::first()->site_name;
        return "this is default title";
    }
    public static function getIcon() {
        if(Setting::first() !== null)
            return 'images/'.Setting::first()->site_favicon;
        return "favicon.ico";
    }
    public static function getLogo() {
        if(Setting::first() !== null)
            return 'images/'.Setting::first()->site_logo;
        return "img/core-img/logo.png";
    }
    public static function getPhoneNumber() {
        if(Setting::first() !== null)
            return Setting::first()->phone;
        return "0947467073";
    }
}
