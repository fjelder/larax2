<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = getFileJson('contracts');
        $data = array_shift($data);
        foreach ($data as $contract) {
            Contract::create($contract);
        }
    }
}
