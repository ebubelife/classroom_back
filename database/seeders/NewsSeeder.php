<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_update')->insert([
            [
                'title' => 'Post-UTME Screening Dates Announced for Top Nigerian Universities',
                'subtitle' => 'Universities have released screening schedules for upcoming admissions.',
                'body' => 'The Post-UTME screening dates have been announced for leading universities across Nigeria. Candidates are advised to check the official websites for updates and prepare accordingly.',
                'featured_image' => 'post_utme_screening.jpg',
                'author' => 'Admin',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'JAMB Updates UTME Syllabus for 2025',
                'subtitle' => 'New topics added to science and arts subjects to better prepare candidates.',
                'body' => 'The Joint Admissions and Matriculation Board (JAMB) has made updates to the UTME syllabus for 2025, including new topics to enhance candidate readiness.',
                'featured_image' => 'jamb_updates.jpg',
                'author' => 'Admin',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'How to Prepare for Post-UTME Exams',
                'subtitle' => 'Experts share essential tips and resources to ace Post-UTME exams.',
                'body' => 'Preparing for Post-UTME exams can be challenging. Experts recommend focused study, practice tests, and understanding the format to maximize your chances.',
                'featured_image' => 'post_utme_preparation.jpg',
                'author' => 'Admin',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Top 5 Nigerian Universities with Competitive Post-UTME Exams',
                'subtitle' => 'A look at the institutions with the toughest Post-UTME assessments.',
                'body' => 'Some Nigerian universities are known for their rigorous Post-UTME exams. Here’s a look at five of the most competitive institutions for prospective students.',
                'featured_image' => 'competitive_universities.jpg',
                'author' => 'Admin',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'JAMB Announces New Cut-Off Marks for UTME and Post-UTME',
                'subtitle' => 'The latest updates on admission thresholds for Nigerian students.',
                'body' => 'JAMB has updated the cut-off marks for this year’s UTME and Post-UTME exams. Students should check these new thresholds to understand their eligibility for various programs.',
                'featured_image' => 'new_cut_off_marks.jpg',
                'author' => 'Admin',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
