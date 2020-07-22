<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',    'site_logo',    'site_favicon',     'email',    'phone',
        'facebook',     'twitter',      'linkedin',         'vimeo',    'youtube',
        'about_us',     'address',
        'breaking_news_category_id'
    ];

    public static function getDescription() {
        return "Với tiêu chí đặt lợi ích của quý khách hàng lên hàng đầu, trung tâm Hàn ngữ Hồng Quân cam kết đưa ra những dịch vụ với chất lượng tốt nhất, cam kết chi phí ở mức thấp nhất. Luôn luôn hướng tới khách hàng, đồng hành cùng quý khách hàng trong chặng đường chinh phục đất nước Hàn Quốc.";
    }
    public static function getTitle() {
        return "Kỹ sư Hàn Quốc, Du học Hàn Quốc tại Nghệ An";
    }

}
