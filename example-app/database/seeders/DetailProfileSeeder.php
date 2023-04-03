<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //masukkan data ke tabel detail profile
        DB::table('detail_profile')->insert([
            'address'=>'Situbondo',
            'nomor_tlp'=>'081234567',
            'ttl'=>'2000-11-26',
            'foto'=>'picture.png']); 
        // DB::table('detail_profile')-> DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])
    }
}
?>
