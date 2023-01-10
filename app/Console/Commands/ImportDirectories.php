<?php

namespace App\Console\Commands;

use App\Models\Directory;
use Illuminate\Console\Command;

class ImportDirectories extends Command
{
    public $excel = "https://docs.google.com/spreadsheets/d/11ZLbAHqbSJ4uI0AL4yD6QyJZBPs1jT112ieiXmXd4zc/edit?usp=sharing";
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:directories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Directories';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Import started at: ' . now());

        $source_file = database_path() . '/imports/directories.csv';

        $row = 0;
        if (($handle = fopen($source_file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;

                if($row > 1)
                {   
                    $name = $data[0];
                    $address = $data[1];
                    $barangay = $data[2];
                    $telephone = $data[3];
                    $cellphone = $data[4];
                    $email = $data[5];
                    $facebook_url = $data[6];
                    $facebook_username = $data[7];


                    if(!empty($name))
                    {
                        Directory::create([
                            'name' => $name,
                            'address' => $address,
                            'barangay' => $barangay,
                            'telephone' => $telephone,
                            'cellphone' => $cellphone,
                            'email' => $email,
                            'facebook_url' => $facebook_url,
                            'facebook_username' => $facebook_username
                        ]);
                    }
                    
                    
                }
                
            }
            fclose($handle);
        }

        $this->info('Import finished at: ' . now());
        return Command::SUCCESS;
    }
}
