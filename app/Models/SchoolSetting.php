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
        'facebook_url',
        'footer_description',
        'about_image',
        'why_school_image',
        'testimonial_image',
        'faq_image',
    ];

    public static function defaults(): array
    {
        return [
            'school_name' => 'পশ্চিম ডগরী আইডিয়াল স্কুল',
            'logo' => 'images/logo.png',
            'header_label' => 'বিদ্যালয় সংক্রান্ত তথ্যের জন্য',
            'phone' => '01772-849386',
            'address' => 'পাশ্চিম ডাগরী, মির্জাপুর, গাজীপুর সদর, গাজীপুর',
            'whatsapp_url' => 'https://wa.me/8801772849386',
            'facebook_url' => null,
            'footer_description' => 'পশ্চিম ডগরী আইডিয়াল স্কুল নিরাপদ ও সহায়ক পরিবেশে মানসম্মত শিক্ষা, সৃজনশীলতা, আত্মবিশ্বাস এবং নৈতিক মূল্যবোধ গড়ে তুলতে কাজ করে।',
            'about_image' => null,
            'why_school_image' => null,
            'testimonial_image' => null,
            'faq_image' => null,
        ];
    }

    public static function current(): self
    {
        $setting = static::query()->first();

        if ($setting) {
            $setting->setAttribute('logo_url', $setting->logo ? asset('storage/'.$setting->logo) : asset('images/logo.png'));
            $setting->setImageUrls();

            return $setting;
        }

        $setting = new static(static::defaults());
        $setting->setAttribute('logo_url', asset('images/logo.png'));
        $setting->setImageUrls();

        return $setting;
    }

    protected function setImageUrls(): void
    {
        foreach ([
            'about_image' => 'assets/img/about1.png',
            'why_school_image' => 'assets/img/about3.png',
            'testimonial_image' => 'assets/img/review.png',
            'faq_image' => 'assets/img/faq.jpg',
        ] as $attribute => $fallback) {
            $this->setAttribute(
                $attribute.'_url',
                $this->{$attribute} ? asset('storage/'.$this->{$attribute}) : asset($fallback)
            );
        }
    }
}
