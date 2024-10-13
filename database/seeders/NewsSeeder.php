<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Post-UTME Screening Dates Announced for Top Nigerian Universities',
                'subtitle' => 'Universities have released screening schedules for upcoming admissions.',
            ],
            [
                'title' => 'JAMB Updates UTME Syllabus for 2025',
                'subtitle' => 'New topics added to science and arts subjects to better prepare candidates.',
            ],
            [
                'title' => 'How to Prepare for Post-UTME Exams',
                'subtitle' => 'Experts share essential tips and resources to ace Post-UTME exams.',
            ],
            [
                'title' => 'Top 5 Nigerian Universities with Competitive Post-UTME Exams',
                'subtitle' => 'A look at the institutions with the toughest Post-UTME assessments.',
            ],
            [
                'title' => 'JAMB Announces New Cut-Off Marks for UTME and Post-UTME',
                'subtitle' => 'The latest updates on admission thresholds for Nigerian students.',
            ],
        ]);
    }
}
