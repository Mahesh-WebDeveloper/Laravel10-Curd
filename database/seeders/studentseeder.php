<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\studentmodel;
use Illuminate\Support\Facades\File; // Fix the namespace issue
use Illuminate\Support\Facades\Storage; // If you're using Laravel Storage

class studentseeder extends Seeder
{
    public function run(): void
    {

        $jsonFilePath = ('database/json/fakedata.json');

        if (File::exists($jsonFilePath)) {
            $jsonContent = File::get($jsonFilePath);

            $jsonData = json_decode($jsonContent, true);

            foreach ($jsonData as $data) {
                studentmodel::create([
                    'Name' => $data['Name'],
                    'age'  => $data['age'],
                    'city' => $data['city']
                ]);
            }
            
        } else {
            echo "JSON file not mahesh found.";
        }
    }
}
