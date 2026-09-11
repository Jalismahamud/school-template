<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'name' => 'ফাতেহা তূল সাবাহ',
                'result_title' => 'বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড)',
                'role_number' => '৩০৩০৭৫',
                'sort_order' => 1,
            ],
            [
                'name' => 'তাহাসিন আক্তার হিমি',
                'result_title' => 'বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড)',
                'role_number' => '৩০৩০৭৬',
                'sort_order' => 2,
            ],
            [
                'name' => 'জান্নাতুল জারা',
                'result_title' => 'বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড)',
                'role_number' => '৩০৩০৭৭',
                'sort_order' => 3,
            ],
            [
                'name' => 'মোছাঃ নুসরাত জাহান',
                'result_title' => 'বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড)',
                'role_number' => '৩০৩০৭৮',
                'sort_order' => 4,
            ],
            [
                'name' => 'সাদিয়া ইসলাম',
                'result_title' => 'বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড)',
                'role_number' => '৩০৩০৭৯',
                'sort_order' => 5,
            ],
        ];

        foreach ($rows as $row) {
            Student::updateOrCreate(['name' => $row['name']], $row);
        }
    }
}