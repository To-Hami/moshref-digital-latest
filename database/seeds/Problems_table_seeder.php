<?php

use App\Models\Problem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Problems_table_seeder extends Seeder
{

    public function run()
    {
        {
            DB::table('problems')->delete();
            $problems = [
                'تدخين',
                ' سلوك',
                ' عنف',
                'تنمر',
                ' غياب و تأخر',
                '  المستوي الدراسي',
                'المواقف اليومية',
                ' صحية',
                ' أسرية ',
                ' نفسية',
                'تعويض درجات السلوك والمواظبة'

            ];
            foreach ($problems as $problem) {
              Problem::create(['Name' => $problem]);
            }
        }
    }
}
