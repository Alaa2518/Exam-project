<?php

namespace Database\Seeders;

use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data
        Exam::truncate();
        //create row .1
        Exam::create([
            'title' => 'English Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .2
        Exam::create([
            'title' => 'English Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .3
        Exam::create([
            'title' => 'English Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .4
        Exam::create([
            'title' => 'English Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .5
        Exam::create([
            'title' => 'English Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .6
        Exam::create([
            'title' => 'English Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .7
        Exam::create([
            'title' => 'English Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .8
        Exam::create([
            'title' => 'English Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .9
        Exam::create([
            'title' => 'English Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .10
        Exam::create([
            'title' => 'English Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .11
        Exam::create([
            'title' => 'Computer science Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .12
        Exam::create([
            'title' => 'Computer science Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .13
        Exam::create([
            'title' => 'Computer science Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .14
        Exam::create([
            'title' => 'Computer science Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .15
        Exam::create([
            'title' => 'Computer science Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .16
        Exam::create([
            'title' => 'Computer science Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .17
        Exam::create([
            'title' => 'Computer science Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .18
        Exam::create([
            'title' => 'Computer science Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .19
        Exam::create([
            'title' => 'Computer science Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .20
        Exam::create([
            'title' => 'Computer science Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .21
        Exam::create([
            'title' => 'Programming Languages Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .22
        Exam::create([
            'title' => 'Programming Languages Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .23
        Exam::create([
            'title' => 'Programming Languages Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .24
        Exam::create([
            'title' => 'Programming Languages Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .25
        Exam::create([
            'title' => 'Programming Languages Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .26
        Exam::create([
            'title' => 'Programming Languages Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .27
        Exam::create([
            'title' => 'Programming Languages Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .28
        Exam::create([
            'title' => 'Programming Languages Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .29
        Exam::create([
            'title' => 'Programming Languages Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .30
        Exam::create([
            'title' => 'Programming Languages Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .31
        Exam::create([
            'title' => 'Information Technology Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .32
        Exam::create([
            'title' => 'Information Technology Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .33
        Exam::create([
            'title' => 'Information Technology Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .34
        Exam::create([
            'title' => 'Information Technology Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .35
        Exam::create([
            'title' => 'Information Technology Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .36
        Exam::create([
            'title' => 'Information Technology Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .37
        Exam::create([
            'title' => 'Information Technology Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .38
        Exam::create([
            'title' => 'Information Technology Fianl Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .39
        Exam::create([
            'title' => 'Information Technology Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .40
        Exam::create([
            'title' => 'Information Technology Fianl Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .41
        Exam::create([
            'title' => 'Information Systems Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .42
        Exam::create([
            'title' => 'Information Systems Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .43
        Exam::create([
            'title' => 'Information Systems Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .44
        Exam::create([
            'title' => 'Information Systems Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .45
        Exam::create([
            'title' => 'Information Systems Fianl Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .46
        Exam::create([
            'title' => 'Information Systems Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .47
        Exam::create([
            'title' => 'Information Systems Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .48
        Exam::create([
            'title' => 'Information Systems Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .49
        Exam::create([
            'title' => 'Information Systems Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .50
        Exam::create([
            'title' => 'Math 1  Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .51
        Exam::create([
            'title' => 'Math 1  Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .52
        Exam::create([
            'title' => 'Math 1  Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .53
        Exam::create([
            'title' => 'Math 1  Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .54
        Exam::create([
            'title' => 'Math 1  Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .55
        Exam::create([
            'title' => 'Math 1  Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .56
        Exam::create([
            'title' => 'Math 1  Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .57
        Exam::create([
            'title' => 'Math 1  Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .58
        Exam::create([
            'title' => 'Math 1  Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .59
        Exam::create([
            'title' => 'Math 1  Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .60
        Exam::create([
            'title' => 'Math 1  Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .61
        Exam::create([
            'title' => 'Math 2  Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .62
        Exam::create([
            'title' => 'Math 2  Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .63
        Exam::create([
            'title' => 'Math 2  Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .64
        Exam::create([
            'title' => 'Math 2  Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .65
        Exam::create([
            'title' => 'Math 2  Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .66
        Exam::create([
            'title' => 'Math 2  Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .67
        Exam::create([
            'title' => 'Math 2  Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .68
        Exam::create([
            'title' => 'Math 2  Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .69
        Exam::create([
            'title' => 'Math 2  Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .70
        Exam::create([
            'title' => 'Math 2  Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .71
        Exam::create([
            'title' => 'Data Structures Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .72
        Exam::create([
            'title' => 'Data Structures Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .73
        Exam::create([
            'title' => 'Data Structures Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .74
        Exam::create([
            'title' => 'Data Structures Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .75
        Exam::create([
            'title' => 'Data Structures Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .76
        Exam::create([
            'title' => 'Data Structures Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .77
        Exam::create([
            'title' => 'Data Structures Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .78
        Exam::create([
            'title' => 'Data Structures Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .79
        Exam::create([
            'title' => 'Data Structures Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .80
        Exam::create([
            'title' => 'Data Structures Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .81
        Exam::create([
            'title' => 'Algorithms Midterm  Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .82
        Exam::create([
            'title' => 'Algorithms Midterm  Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .83
        Exam::create([
            'title' => 'Algorithms Midterm  Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .84
        Exam::create([
            'title' => 'Algorithms Midterm  Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .85
        Exam::create([
            'title' => 'Algorithms Midterm  Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .86
        Exam::create([
            'title' => 'Algorithms Final  Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .87
        Exam::create([
            'title' => 'Algorithms Final  Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .88
        Exam::create([
            'title' => 'Algorithms Final  Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .89
        Exam::create([
            'title' => 'Algorithms Final  Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .90
        Exam::create([
            'title' => 'Algorithms Final  Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .91
        Exam::create([
            'title' => 'Network Midterm Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .92
        Exam::create([
            'title' => 'Network Midterm Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .93
        Exam::create([
            'title' => 'Network Midterm Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .94
        Exam::create([
            'title' => 'Network Midterm Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .95
        Exam::create([
            'title' => 'Network Midterm Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .96
        Exam::create([
            'title' => 'Network Final Exam 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .97
        Exam::create([
            'title' => 'Network Final Exam 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .98
        Exam::create([
            'title' => 'Network Final Exam 3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //create row .99
        Exam::create([
            'title' => 'Network Final Exam 4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //create row .100
        Exam::create([
            'title' => 'Network Final Exam 5',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);


    }
}
