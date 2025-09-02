<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dealer::create([
            'id' => '1',
            'nama' => 'Anugerah Perdana',
            'alamat' => 'Jl. Wolter Monginsidi 93, Palu',
            'telepon' => 'Ph. 0451-422234, Fax: 0451-426651'
        ]);

        Dealer::create([
            'id' => '2',
            'nama' => 'Asia Surya Perkasa',
            'alamat' => 'A. Yani 147, Bangka',
            'telepon' => 'Ph. 0717-438228, Fax: 0717-438238'
        ]);

        Dealer::create([
            'id' => '3',
            'nama' => 'Astra Motor Bali',
            'alamat' => 'Jl. HOS Cokroaminoto 80, Denpasar',
            'telepon' => 'Ph. 0361-424009'
        ]);

        Dealer::create([
            'id' => '4',
            'nama' => 'Astra Motor Bengkulu',
            'alamat' => 'Jl. Ir. Rustandi, Desa Kandang, Kampung Melayu, Kodya Bengkulu',
            'telepon' => 'Ph. 0736 53933'
        ]);

        Dealer::create([
            'id' => '5',
            'nama' => 'Astra Motor Jakarta',
            'alamat' => 'Jl. Dewi Sartika 255, Jakarta',
            'telepon' => 'Ph. 021 8015555'
        ]);

        Dealer::create([
            'id' => '6',
            'nama' => 'Astra Motor Jawa Tengah',
            'alamat' => 'Jalan Gajah Mada No. 88, Bangunharjo, Semarang',
            'telepon' => 'Ph. 024-86569000/1'
        ]);

        Dealer::create([
            'id' => '7',
            'nama' => 'Astra Motor Kalimantan Barat',
            'alamat' => 'Jl. A Yani I Kompleks Town House No. 8-10, Pontianak',
            'telepon' => 'Ph. 0561 762261'
        ]);

        Dealer::create([
            'id' => '8',
            'nama' => 'Astra Motor Kaltim 1',
            'alamat' => 'Jl. MT. Haryono RT 100 No. 101-103, Kel. Gunung Bahagia, Kec. Balikpapan Selatan, Balikpapan',
            'telepon' => 'Ph. 0542-875109'
        ]);

        Dealer::create([
            'id' => '9',
            'nama' => 'Astra Motor Kaltim 2',
            'alamat' => 'Jalan Cipto Mangunkusumo RT 7, Gunung Panjang, Samarinda',
            'telepon' => 'Ph. 0541 4104381'
        ]);

        Dealer::create([
            'id' => '10',
            'nama' => 'Astra Motor Nusa Tenggara Barat',
            'alamat' => 'Jalan TGH Saleh Hambali, Dasan Cermen, Mataram',
            'telepon' => 'Ph. 0370-646388 / 0370-630331 / 0370-639321'
        ]);

        Dealer::create([
            'id' => '11',
            'nama' => 'Astra Motor Papua',
            'alamat' => 'Jl. Ferry Kelapa Dua Raya 11 Jayapura, Papua',
            'telepon' => 'Ph. 0967-534555 / 0967-531777'
        ]);

        Dealer::create([
            'id' => '12',
            'nama' => 'Astra Motor Sulawesi Selatan',
            'alamat' => 'Jalan Sultan Alauddin No. 57, Makassar',
            'telepon' => 'Ph. 0411-881500'
        ]);

        Dealer::create([
            'id' => '13',
            'nama' => 'Astra Motor Sumatera Selatan',
            'alamat' => 'Jl. Ahmad Yani no. 99, Palembang',
            'telepon' => 'Ph: 0711-517676'
        ]);

        Dealer::create([
            'id' => '14',
            'nama' => 'Astra Motor Yogyakarta',
            'alamat' => 'Jl. Magelang KM 7,2, Yogyakarta',
            'telepon' => 'Ph. 0274-868551'
        ]);

        Dealer::create([
            'id' => '15',
            'nama' => 'Capella Dinamik Nusantara Aceh',
            'alamat' => 'Jl Sekip Baru No 3-5, Medan',
            'telepon' => 'Ph. 061-4524418, Fax: 061-4523830'
        ]);

        Dealer::create([
            'id' => '16',
            'nama' => 'Capella Dinamik Nusantara Kepri',
            'alamat' => 'Pertokoan Taman Merapi Subur, BlokA3 No. 1-5, Batam',
            'telepon' => 'Ph. 0778-7375622, Fax. 0778-7375520'
        ]);

        Dealer::create([
            'id' => '17',
            'nama' => 'Capella Dinamik Nusantara Riau',
            'alamat' => 'Jl. Soekarno-Hatta No. 88, Riau',
            'telepon' => 'Ph. 0761-7892061, Fax. 0761-7892066 / 7892067'
        ]);

        Dealer::create([
            'id' => '18',
            'nama' => 'Daya Adicipta Motora',
            'alamat' => 'Jl. Raya Cibeureum 26A, Bandung',
            'telepon' => 'Ph. 022-6051033 / 022-6037488, Fax: 022-6037495'
        ]);

        Dealer::create([
            'id' => '19',
            'nama' => 'Daya Adicipta Wisesa',
            'alamat' => 'Jl. Raya Manado – Bitung Km.10, Watutumou – Kalawat, Minahasa Utara',
            'telepon' => 'Ph. 0431-811999, Fax :0431–818881'
        ]);

        Dealer::create([
            'id' => '20',
            'nama' => 'Hayati Pratama Mandiri',
            'alamat' => 'Jl. Pemuda 35, Padang',
            'telepon' => 'Ph. 0751-26288, Fax: 0751-32495'
        ]);

        Dealer::create([
            'id' => '21',
            'nama' => 'Menara Agung',
            'alamat' => 'Jl. Veteran 30, Padang',
            'telepon' => 'Ph. 0751-22073 / 0751-27937, Fax: 0751-24524'
        ]);

        Dealer::create([
            'id' => '22',
            'nama' => 'Mitra Pinasthika Mulia Malang',
            'alamat' => 'Jl. Jend. Basuki Rachmad 71-73, Malang',
            'telepon' => 'Fax: 0341-320239'
        ]);

        Dealer::create([
            'id' => '23',
            'nama' => 'Mitra Pinasthika Mulia Surabaya',
            'alamat' => 'Jl. Simpang Dukuh 42-44, Surabaya',
            'telepon' => 'Ph. 031-5324000, Fax: 031-5346248'
        ]);

        Dealer::create([
            'id' => '24',
            'nama' => 'Mitra Sendang Kemakmuran',
            'alamat' => 'Jl. Raya Serang Pandeglang km.3, Serang',
            'telepon' => 'Ph. 0254-207949'
        ]);

        Dealer::create([
            'id' => '25',
            'nama' => 'Sinar Sentosa Primatama',
            'alamat' => 'Jl. Kol. Abunjani 9, RT 04, Jambi',
            'telepon' => 'Ph. 0741-61551, Fax: 0741-61573'
        ]);

        Dealer::create([
            'id' => '26',
            'nama' => 'Trio Motor',
            'alamat' => 'Jl. Perintis Kemerdekaan 45 AA, Banjarmasin',
            'telepon' => 'Ph. 0511-3355500 / 0511-3355400, Fax: 0511-3352020'
        ]);

        Dealer::create([
            'id' => '27',
            'nama' => 'Tunas Dwipa Matra',
            'alamat' => 'Jl. Pramuka No 1, Rajabasa Nunyai, Rajabasa, Kodya Bandar Lampung',
            'telepon' => 'Ph. 0721-265666, Fax: 0721-261446'
        ]);

        Dealer::create([
            'id' => '28',
            'nama' => 'Wahana Makmur Sejati',
            'alamat' => 'Jl. Gunung Sahari Raya 32, Jakarta',
            'telepon' => 'Ph. 021-6281700, Fax : 021-6284049'
        ]);

        Dealer::create([
            'id' => '29',
            'nama' => 'Indako Trading Coy',
            'alamat' => 'Jl. Pemuda 18 D-H, MEDAN',
            'telepon' => 'Ph. 061-4516841, Fax: 061-4510735'
        ]);
    }
}
