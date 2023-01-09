<?php

namespace App\Console\Commands;

use App\Models\Hotline;
use App\Enums\PhoneType;
use App\Enums\HotlineCategory;
use Illuminate\Console\Command;

class ImportHotlines extends Command
{

    public $excel = "https://docs.google.com/spreadsheets/d/1U76JunmVlqx2G7BxX-R9i6Vn42HJOeQddw3njd4CUog/edit?usp=sharing";
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:hotlines';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import hotlines';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Import started at: ' . now());

        $source_file = database_path() . '/imports/hotlines.csv';

        $row = 0;
        if (($handle = fopen($source_file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;

                if($row > 1)
                {   
                    $category = $data[0];
                    $name = $data[1];
                    $cellphone = $data[2];
                    $telephone = $data[3];

                    $hasKey = HotlineCategory::hasKey($category);

                    if($hasKey && !empty($name))
                    {
                        $hotline = Hotline::firstOrCreate([
                            'hotline_category' => HotlineCategory::fromKey($category)->value,
                            'name' => $name
                        ]);

                        if(!empty($cellphone))
                        {
                            $hotline->numbers()->create([
                                'phone_type' => PhoneType::Cellphone,
                                'number' => $cellphone
                            ]);
                        }

                        if(!empty($telephone))
                        {
                            $hotline->numbers()->create([
                                'phone_type' => PhoneType::Telephone,
                                'number' => $telephone
                            ]);
                        }
                    }
                    
                    
                }
                
            }
            fclose($handle);
        }

        $this->info('Import finished at: ' . now());
        return Command::SUCCESS;
    }
    
}
