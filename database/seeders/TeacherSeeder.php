<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'name' => 'জনাব মো. কামরুজ্জামান',
                'designation' => 'সভাপতি',
                'sort_order' => 1,
            ],
            [
                'name' => 'জনাব মো. শামীম আহম্মেদ',
                'designation' => 'প্রধান শিক্ষক (ভারপ্রাপ্ত)',
                'sort_order' => 2,
            ],
            [
                'name' => 'জনাব মো. আসাদুজ্জামান সৈকত',
                'designation' => 'পরিচালক',
                'sort_order' => 3,
            ],
        ];

        foreach ($rows as $row) {
            Teacher::firstOrCreate(['name' => $row['name']], $row);
        }
    }
}
