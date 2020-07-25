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
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->meta_description;
        return "this is default description";
    }
    public static function getTitle() {
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->site_name;
        return "this is default title";
    }
    public static function getIcon() {
        if(Setting::where('id',1)->first() !== null)
            return 'images/'.Setting::where('id',1)->first()->site_favicon;
        return "favicon.ico";
    }
    public static function getLogo() {
        if(Setting::where('id',1)->first() !== null)
            return 'images/'.Setting::where('id',1)->first()->site_logo;
        return "img/core-img/logo.png";
    }
    public static function getPhoneNumber() {
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->phone;
        return "0947467073";
    }
    public static function getFacebook() {
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->facebook;
        return "";
    }
    public static function getTwitter() {
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->twitter;
        return "";
    }
    public static function getYoutube() {
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->youtube;
        return "";
    }
    public static function getLinkedin() {
        if(Setting::where('id',1)->first() !== null)
            return Setting::where('id',1)->first()->linkedin;
        return "";
    }
}
