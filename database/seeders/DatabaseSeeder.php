<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mobil;
use App\Models\JenisPart;
use App\Models\MerkMobil;
use App\Models\Sparepart;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'adikusuma',
            'email' => 'adi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //merk mobil
        MerkMobil::create([
            'id' => '1',
            'merk' => 'Toyota',
        ]);

        MerkMobil::create([
            'id' => '2',
            'merk' => 'Daihatsu',
        ]);

        MerkMobil::create([
            'id' => '3',
            'merk' => 'Honda',
        ]);

        MerkMobil::create([
            'id' => '4',
            'merk' => 'Suzuki',
        ]);

        MerkMobil::create([
            'id' => '5',
            'merk' => 'Mitsubishi',
        ]);

        MerkMobil::create([
            'id' => '6',
            'merk' => 'Nissan',
        ]);

        //mobil
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Velfier',
            'image' => '/image/Toyota/velfier.png'
        ]);
        //2
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Alphard',
            'image' => '/image/Toyota/tytalphard.png'
        ]);
        //3
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Camry',
            'image' => '/image/Toyota/camry.png'
        ]);
        //4
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Fortuner',
            'image' => '/image/Toyota/tytfortuner.png'
        ]);
        //5
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Inova',
            'image' => '/image/Toyota/inova.png'
        ]);

        //6
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Raize',
            'image' => '/image/Toyota/raize.png'
        ]);
        //7
        Mobil::create([
            'merk_mobil_id' => '1',
            'mobil' => 'Avanza',
            'image' => '/image/Toyota/avanza.png'
        ]);
        //8
        Mobil::create([
            'merk_mobil_id' => '2',
            'mobil' => 'Xenia',
            'image' => '/image/Daihatsu/xenia.png'
        ]);
        //9
        Mobil::create([
            'merk_mobil_id' => '2',
            'mobil' => 'Rocky',
            'image' => '/image/Daihatsu/rocky.png'
        ]);
        //10
        Mobil::create([
            'merk_mobil_id' => '2',
            'mobil' => 'Terios',
            'image' => '/image/Daihatsu/terios.png'
        ]);
        //11
        Mobil::create([
            'merk_mobil_id' => '2',
            'mobil' => 'Sirion',
            'image' => '/image/Daihatsu/sirion.png'
        ]);
        //12 Homda
        Mobil::create([
            'merk_mobil_id' => '3',
            'mobil' => 'Civic',
            'image' => '/image/Honda/civicturbo.png'
        ]);
        //13
        Mobil::create([
            'merk_mobil_id' => '3',
            'mobil' => 'Jazz RS',
            'image' => '/image/Honda/jazz_rs.png'
        ]);
        //14
        Mobil::create([
            'merk_mobil_id' => '3',
            'mobil' => 'Freed',
            'image' => '/image/Honda/hondafreed.png'
        ]);
        //15
        Mobil::create([
            'merk_mobil_id' => '4',
            'mobil' => 'Ertiga',
            'image' => '/image/Suzuki/ertiga.png'
        ]);
        //16
        Mobil::create([
            'merk_mobil_id' => '4',
            'mobil' => 'XL-7',
            'image' => '/image/Suzuki/xl7.png'
        ]);
        //17
        Mobil::create([
            'merk_mobil_id' => '4',
            'mobil' => 'Swift',
            'image' => '/image/Suzuki/swift.png'
        ]);
        //18
        Mobil::create([
            'merk_mobil_id' => '5',
            'mobil' => 'Pajero',
            'image' => '/image/Mitsibishil/pajero.png'
        ]);
        //19
        Mobil::create([
            'merk_mobil_id' => '5',
            'mobil' => 'Trition',
            'image' => '/image/Mitsibishil/triton.png'
        ]);
        //20
        Mobil::create([
            'merk_mobil_id' => '5',
            'mobil' => 'X-Pander',
            'image' => '/image/Mitsibishil/xpander.png'
        ]);
        //21
        Mobil::create([
            'merk_mobil_id' => '5',
            'mobil' => 'Mirage',
            'image' => '/image/Mitsibishil/mirage.png'
        ]);
        //22
        Mobil::create([
            'merk_mobil_id' => '6',
            'mobil' => 'Navara',
            'image' => '/image/Nissan/navara.png'
        ]);
        //23
        Mobil::create([
            'merk_mobil_id' => '6',
            'mobil' => 'Serena',
            'image' => '/image/Nissan/serena.png'
        ]);
        //24
        Mobil::create([
            'merk_mobil_id' => '6',
            'mobil' => 'Livina',
            'image' => '/image/Nissan/livina.png'
        ]);

        //Jenis spare part
        JenisPart::create([
            'nama' => 'Evaporator'
        ]);
        //2
        JenisPart::create([
            'nama' => 'Kondensor'
        ]);
        //3
        JenisPart::create([
            'nama' => 'Compresor'
        ]);
        //4
        JenisPart::create([
            'nama' => 'MCP'
        ]);
        //5
        JenisPart::create([
            'nama' => 'Lain-lain'
        ]);
        //Nama sapre part
        //Velfier
        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '1',
            'nama' => 'Evap Velfier ',
            'merek' => 'KR',
            'harga' => '600000',
            'detail' => 'Ukuran 20 x 30 cm, evap ini juga cocok untuk toyota alphard',
            'image' => '/image/Toyota/evp_velfier.png'
        ]);

        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '2',
            'nama' => 'Condensor Velfier ',
            'merek' => 'Denso',
            'harga' => '950000',
            'detail' => 'Ukuran 70 x 40 cm, condensor ini juga cocok untuk toyota alphard',
            'image' => '/image/Toyota/cond_velfier.png'
        ]);

        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '3',
            'nama' => 'Compresor Velfier',
            'merek' => 'Denso',
            'harga' => '4500000',
            'detail' => 'Model Piston, compresor ini juga cocok untuk toyota velfier dan camry 2.4L',
            'image' => '/image/Toyota/mcp_alphard.png'
        ]);

        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '3',
            'nama' => 'Compresor Velfier',
            'merek' => 'Denso',
            'harga' => '5500000',
            'detail' => 'Model Piston, compresor ini juga cocok untuk toyota velfier dan camry 3.0L',
            'image' => '/image/Toyota/comp_alphard3.0.png'
        ]);


        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '4',
            'nama' => 'MCP Velfier',
            'merek' => 'Denso',
            'harga' => '650000',
            'detail' => 'Ukuran 70 x 40 cm, mcp ini juga cocok untuk toyota alphard',
            'image' => '/image/Toyota/mcp_alphard.png'
        ]);

        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '5',
            'nama' => 'Resistor Velfier',
            'merek' => 'Denso',
            'harga' => '800000',
            'detail' => 'Resistor kontrol speed blower ac, resistor ini juga cocok untuk alphard',
            'image' => '/image/Toyota/resistor_alphard.png'
        ]);

        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '5',
            'nama' => 'Kisi AC Velfier Tengah',
            'merek' => 'Denso',
            'harga' => '250000',
            'detail' => 'Kisi lubang ac bagian tengah, kisi ini juga cocok untuk toyota alphard',
            'image' => '/image/Toyota/kisi_ac_alphard.png'
        ]);

        Sparepart::create([
            'mobil_id' => '1',
            'jenispart_id' => '5',
            'nama' => 'Dryer Silica',
            'merek' => 'Denso',
            'harga' => '50000',
            'detail' => 'Dryer silica,dryer ini juga cocok untuk toyota alphard',
            'image' => '/image/Toyota/dryer_silica.png'
        ]);

        //alpard
        Sparepart::create([
            'mobil_id' => '2',
            'jenispart_id' => '4',
            'nama' => 'MCP Alpahard',
            'merek' => 'Denso',
            'harga' => '650000',
            'detail' => 'Ukuran diameter 15cm, mcp  ini juga cocok untuk toyota velfier',
            'image' => '/image/Toyota/mcp_alphard.png'
        ]);

        Sparepart::create([
            'mobil_id' => '2',
            'jenispart_id' => '1',
            'nama' => 'Evap Alphard',
            'merek' => 'KR',
            'harga' => '600000',
            'detail' => 'Ukuran 20 x 30 cm, evap ini juga cocok untuk toyota velfier',
            'image' => '/image/Toyota/evpalphardnew.png'
        ]);

        Sparepart::create([
            'mobil_id' => '2',
            'jenispart_id' => '2',
            'nama' => 'Kondensor Alphard',
            'merek' => 'Denso',
            'harga' => '950000',
            'detail' => 'Ukuran 70 x 40 cm, condensor ini juga cocok untuk toyota velfier',
            'image' => '/image/Toyota/cond_alphard.png'
        ]);

        Sparepart::create([
            'mobil_id' => '2',
            'jenispart_id' => '3',
            'nama' => 'Compresor Alphard',
            'merek' => 'Denso',
            'harga' => '4500000',
            'detail' => 'Model Piston, compresor ini juga cocok untuk toyota alphard dan camry 2.4L',
            'image' => '/image/Toyota/comp_alphard2.4.png'
        ]);

        Sparepart::create([
            'mobil_id' => '2',
            'jenispart_id' => '3',
            'nama' => 'Compresor Alphard',
            'merek' => 'Denso',
            'harga' => '5500000',
            'detail' => 'Model Piston, compresor ini juga cocok untuk toyota velfier dan camry 3.0L',
            'image' => '/image/Toyota/comp_alphard3.0.png'
        ]);
        //Civic
        Sparepart::create([
            'mobil_id' => '12',
            'jenispart_id' => '1',
            'nama' => 'Evap Civic Turbo',
            'merek' => 'KR',
            'harga' => '450000',
            'detail' => 'Ukuran diameyer 20 x 30 cm, evap ini cocok untuk mobil civic ',
            'image' => '/image/Honda/evap_civic.png'
        ]);

        Sparepart::create([
            'mobil_id' => '12',
            'jenispart_id' => '2',
            'nama' => 'Condensor Civic Turbo',
            'merek' => 'Denso',
            'harga' => '750000',
            'detail' => 'Ukuran 20 x 30 cm, condensor ini juga cocok untuk mobil civic',
            'image' => '/image/Honda/cond_civic.png'
        ]);

        Sparepart::create([
            'mobil_id' => '12',
            'jenispart_id' => '3',
            'nama' => 'Compresor Civic Turbo',
            'merek' => 'Sanden',
            'harga' => '2500000',
            'detail' => 'Model rotary, compresor ini menggunakan model rotary jadi harus menggunakan oli khusus',
            'image' => '/image/Honda/comp_civicturbo.png'
        ]);

        Sparepart::create([
            'mobil_id' => '12',
            'jenispart_id' => '4',
            'nama' => ' Mcp Civic Turbo',
            'merek' => 'KR',
            'harga' => '450000',
            'detail' => 'Ukuran diameter 15 cm, mcp ini juga cocok untuk mobil civic',
            'image' => '/image/Honda/mcp_civic.png'
        ]);

        //jazzrs
        Sparepart::create([
            'mobil_id' => '13',
            'jenispart_id' => '1',
            'nama' => 'Evap Jazz Rs',
            'merek' => 'KR',
            'harga' => '450000',
            'detail' => 'Ukuran diameyer 15 x 20 cm, evap ini cocok untuk mobil freed',
            'image' => '/image/Honda/evap_jazzrs.png'
        ]);

        Sparepart::create([
            'mobil_id' => '13',
            'jenispart_id' => '2',
            'nama' => 'Condensor Jazz RS',
            'merek' => 'Denso',
            'harga' => '770000',
            'detail' => 'Ukuran 95 x 20 cm, condensor ini juga cocok untuk mobil freed',
            'image' => '/image/Honda/cond_jazzrs.png'
        ]);

        Sparepart::create([
            'mobil_id' => '13',
            'jenispart_id' => '3',
            'nama' => 'Compresor Jazz RS',
            'merek' => 'Sanden',
            'harga' => '2200000',
            'detail' => 'Model rotary, compresor ini menggunakan model rotary jadi harus menggunakan oli khusus',
            'image' => '/image/Honda/comp_jazzrs.png'
        ]);

        Sparepart::create([
            'mobil_id' => '13',
            'jenispart_id' => '4',
            'nama' => ' Mcp Jazz RS',
            'merek' => 'Denso',
            'harga' => '400000',
            'detail' => 'Ukuran diameter 14 cm, mcp ini juga cocok untuk mobil freed',
            'image' => '/image/Honda/mcp_jazzrs.png'
        ]);
        //xenia
        Sparepart::create([
            'mobil_id' => '8',
            'jenispart_id' => '1',
            'nama' => 'Evaporator Xenia',
            'merek' => 'Denso',
            'harga' => '600000',
            'detail' => 'Ukuran 20x 30 cm, evap ini juga cocok untuk mobil avanza',
            'image' => '/image/Daihatsu/evap_xenia.png'
        ]);
        Sparepart::create([
            'mobil_id' => '8',
            'jenispart_id' => '2',
            'nama' => 'Condensor Xenia',
            'merek' => 'Denso',
            'harga' => '750000',
            'detail' => 'Ukuran 30x 40 cm, kondensor ini juga cocok untuk mobil avanza',
            'image' => '/image/Daihatsu/cond_xenia.png'
        ]);
        Sparepart::create([
            'mobil_id' => '8',
            'jenispart_id' => '3',
            'nama' => 'Compresor Xenia 1.0L',
            'merek' => 'Denso',
            'harga' => '1500000',
            'detail' => 'Model piston, compresor ini juga cocok untuk mobil avanza 1.0L',
            'image' => '/image/Daihatsu/comp_xenia1.0.png'
        ]);
        Sparepart::create([
            'mobil_id' => '8',
            'jenispart_id' => '3',
            'nama' => 'Compresor Xenia 1.3L',
            'merek' => 'Denso',
            'harga' => '1500000',
            'detail' => 'Model piston, compresor ini juga cocok untuk mobil avanza 1.3L',
            'image' => '/image/Daihatsu/comp_xenia1.3.png'
        ]);

        Sparepart::create([
            'mobil_id' => '8',
            'jenispart_id' => '4',
            'nama' => 'MCP Xenia',
            'merek' => 'Denso',
            'harga' => '650000',
            'detail' => 'Ukuran diameter 16 cm, compresor ini juga cocok untuk mobil avanza',
            'image' => '/image/Daihatsu/mcp_xenia.png'
        ]);
        //rocky
        Sparepart::create([
            'mobil_id' => '9',
            'jenispart_id' => '1',
            'nama' => 'Evaporator Rocky',
            'merek' => 'Denso',
            'harga' => '620000',
            'detail' => 'Ukuran 18x 23 cm, evap ini juga cocok untuk mobil raize',
            'image' => '/image/Daihatsu/evap_rocky.png'
        ]);
        Sparepart::create([
            'mobil_id' => '9',
            'jenispart_id' => '2',
            'nama' => 'Condensor Rocky',
            'merek' => 'Denso',
            'harga' => '720000',
            'detail' => 'Ukuran 25x 40 cm, kondensor ini juga cocok untuk mobil raize',
            'image' => '/image/Daihatsu/cond_rocky.png'
        ]);
        Sparepart::create([
            'mobil_id' => '9',
            'jenispart_id' => '3',
            'nama' => 'Compresor Rocky',
            'merek' => 'ACM',
            'harga' => '1250000',
            'detail' => 'Model piston, compresor ini juga cocok untuk mobil raize',
            'image' => '/image/Daihatsu/comp_rocky.png'
        ]);

        Sparepart::create([
            'mobil_id' => '9',
            'jenispart_id' => '4',
            'nama' => 'MCP Rocky',
            'merek' => 'Denso',
            'harga' => '660000',
            'detail' => 'Ukuran diameter 15 cm, compresor ini juga cocok untuk mobil raize',
            'image' => '/image/Daihatsu/mcp_rocky.png'
        ]);
    }
}
