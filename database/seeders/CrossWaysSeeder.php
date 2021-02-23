<?php

namespace Database\Seeders;

use App\Models\CrossWay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CrossWaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_exists(__DIR__.DIRECTORY_SEPARATOR.'cross_ways.json') ? File::get(__DIR__.DIRECTORY_SEPARATOR.'cross_ways.json') : null;
        if ($data = json_decode($data, true)) {
            $data = $data[2] ?? null;
            $data = $data['data'] ?? null;
            dump(collect($data)->map(function ($item) {
                return CrossWay::create([
                    'xyg_code' => $item['xyg'] ?? null,
                    'fps_code' => $item['fps'] ?? null,
                    'prag_id' => $item['prag'] ?? null,
                ]);
            })->filter(function ($crossWay) {
                return $crossWay->id;
            })->count());
        }

    }
}
