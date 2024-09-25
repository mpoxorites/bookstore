<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grStates = [
            'GR-A' => 'Anatoliki Makedonia kai Thraki',
            'GR-B' => 'Kentriki Makedonia',
            'GR-C' => 'Dytiki Makedonia',
            'GR-D' => 'Ipeiros',
            'GR-E' => 'Thessalia',
            'GR-F' => 'Ionia Nisia',
            'GR-G' => 'Dytiki Ellada',
            'GR-H' => 'Sterea Ellada',
            'GR-I' => 'Attiki',
            'GR-J' => 'Peloponnisos',
            'GR-K' => 'Voreio Aigaio',
            'GR-L' => 'Notio Aigaio',
            'GR-M' => 'Kriti'
        ];
        $countries = [
            ['code' => 'GR', 'name' => 'Greece', 'states' => json_encode($grStates)],
        ];
        Country::insert($countries);
    }
}
