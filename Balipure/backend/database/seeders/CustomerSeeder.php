<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        // Optional: clear existing data for that customer
        DB::table('customers')->where('name', 'ABC Grocery Store')->delete();

        // Insert sample customer
        DB::table('customers')->insert([
            'name' => 'ABC Grocery Store',
            'billing_address' => 'P1 Block 25 Lot 25, Katapatan Subdivision, Barangay Banay-banay, Cabuyao City, Laguna',
            'shipping_address' => 'P1 Block 25 Lot 25, Katapatan Subdivision, Barangay Banay-banay, Cabuyao City, Laguna',
            'bank_details' => 'Gcash',
            'tin' => '1234-5678-0000',
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
