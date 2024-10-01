<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelatihan; // Import model Pelatihan

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pelatihan yang akan di-insert
        Pelatihan::create([
            'name' => 'Pelatihan Web Development',
            'position' => 'Developer',
            'LSP' => 'LSP Teknologi Informasi',
            'Kuota' => 20,
            'start_date' => '2024-10-15',
            'Harga' => 500000.00
        ]);

        Pelatihan::create([
            'name' => 'Pelatihan Data Science',
            'position' => 'Data Analyst',
            'LSP' => 'LSP Data Analytics',
            'Kuota' => 15,
            'start_date' => '2024-11-01',
            'Harga' => 750000.00
        ]);

        Pelatihan::create([
            'name' => 'Pelatihan Cyber Security',
            'position' => 'Security Specialist',
            'LSP' => 'LSP Cyber Security',
            'Kuota' => 10,
            'start_date' => '2024-12-01',
            'Harga' => 1000000.00
        ]);
    }
}
