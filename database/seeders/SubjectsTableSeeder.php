<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            'English Language',
            'Mathematics',
            'Biology',
            'Chemistry',
            'Physics',
            'Economics',
            'Government',
            'Literature in English',
            'Commerce',
            'Financial Accounting',
            'Geography',
            'Agricultural Science',
            'Christian Religious Studies',
            'Islamic Religious Studies',
            'French Language',
            'History',
            'Civic Education',
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'subject' => $subject,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
