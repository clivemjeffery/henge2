<?php

namespace App\Console\Commands;

use App\Models\User;
use DateTimeImmutable;
use Illuminate\Console\Command;

use League\Csv\Reader;

class LoadPupils extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:load-pupils';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load pupils from CSV';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reader = Reader::createFromPath('/Users/clive/sch/sims.csv', 'r');
        $reader->setHeaderOffset(0);

        $records = $reader->getRecords();
    
        // see each record
        foreach ($records as $offset => $record) {

            // Probably switch to firstOrNew and then update the record
            // Look at delegating to a service when building into the app
            // 
            $user = User::firstOrCreate(
                ['adno' => $record['admission_number']],
                [
                    'adno' => $record['admission_number'],
                    'upn' => empty($record['upn']) || $record['upn'] === ' ' ? null : $record['upn'],
                    'name_last' => $record['surname'],
                    'name_first' => $record['first_name'],
                    'names_middle' => $record['middle_names'],
                    'name_pref' => null,
                    'email' => $offset . "@norton-pri.n-yorks.sch.uk",
                    'year' => $record['year_group'],
                    'dob' => DateTimeImmutable::createFromFormat("d M Y", $record['date_of_birth']),
                    'reg' => $record['reg'],
                    'house' => $record['house']
                ]
            );
        }
    }
}
