<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    protected $fillable = [
        'school_name',
        'logo',
        'header_label',
        'phone',
        'address',
        'whatsapp_url',
        'footer_description',
    ];

    public static function defaults(): array
    {
        return [
            'school_name' => 'পাশ্চিম ডাগরী আইডিয়াল স্কুল',
            'logo' => 'images/logo.png',
            'header_label' => 'বিদ্যালয় সংক্রান্ত তথ্যের জন্য',
            'phone' => '01772-849386',
            'address' => 'পাশ্চিম ডাগরী, মির্জাপুর, গাজীপুর সদর, গাজীপুর',
            'whatsapp_url' => 'https://wa.me/8801772849386',
            'footer_description' => 'পাশ্চিম ডাগরী আইডিয়াল স্কুল নিরাপদ ও সহায়ক পরিবেশে মানসম্মত শিক্ষা, সৃজনশীলতা, আত্মবিশ্বাস এবং নৈতিক মূল্যবোধ গড়ে তুলতে কাজ করে।',
        ];
    }

    public static function current(): self
    {
        $setting = static::query()->first();

        if ($setting) {
            $setting->setAttribute('logo_url', $setting->logo ? asset('storage/'.$setting->logo) : asset('images/logo.png'));

            return $setting;
        }

        $setting = new static(static::defaults());
        $setting->setAttribute('logo_url', asset('images/logo.png'));

        return $setting;
    }
}
