<?php

namespace Database\Seeders;

use App\Models\Karir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karir::create([
            'id' => '1',
            'slug' => 'Driver',
            'jabatan' => 'Driver',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal SMA/SMK Sederajat',
            'pengalaman' => 'Memiliki SIM A / SIM B1 Aktif dan dapat mengemudikan mobil',
            'keahlian' => 'Memiliki kemampuan membaca google maps/Waze dan dapat mengendarai mobil dengan lancar',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '2',
            'slug' => 'Gudang',
            'jabatan' => 'Gudang',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal SMA/SMK Sederajat',
            'pengalaman' => 'Tidak memerlukan pengalaman kerja',
            'keahlian' => 'Dapat bekerja secara cekatan, disiplin, dan bertanggung jawab',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '3',
            'slug' => 'Auditor',
            'jabatan' => 'Auditor',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Ekonomi',
            'pengalaman' => 'Dapat melakukan investigasi secara menyeluruh terhadap kemungkinan terjadinya kecurangan',
            'keahlian' => 'Dapat menggunakan aplikasi Word, Excel, dan Power Point',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '4',
            'slug' => 'Security',
            'jabatan' => 'Security',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal SMA/SMK sederajat',
            'pengalaman' => 'Memiliki Serfikat Security yang masih aktif',
            'keahlian' => 'Dapat mengamankan lingkungan kerja dan bersedia bekerja secara shift',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '5',
            'slug' => 'Sales',
            'jabatan' => 'Sales',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal SMA/SMK sederajat',
            'pengalaman' => 'Tidak memerlukan pengalaman kerja',
            'keahlian' => 'Dapat berbicara dengan lancar untuk mempromosikan produk yang dijual ke customer',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '6',
            'slug' => 'Administrasi',
            'jabatan' => 'Administrasi',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal SMA/S1 Semua Jurusan',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Mampu melakukan kegiatan administrasi secara teratur, cepat dan rapi serta dapat mengguanakan aplikasi MS.Office (Word, Excel dan Power Point)',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '7',
            'slug' => 'Accounting',
            'jabatan' => 'Accounting',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Akuntansi, Ekonomi',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang relevan',
            'keahlian' => 'Mampu menyusun laporan bulanan terkait dibidang akuntansi serta dapat menggunakan aplikasi Ms.Office(Word, Excel, dan Power Point)',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '8',
            'slug' => 'Head Office',
            'jabatan' => 'Head Office',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Semua Jurusan',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Mampu mengkoordinasi anggota tim untuk menyusun strategi dalam meningkatkan penjualan barang',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '9',
            'slug' => 'IT Support',
            'jabatan' => 'IT Support',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Sistem Informasi',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Mengerti tentang sistem jaringan LAN, WAN serta dapat melakukan troubleshooting pada software-software perusahaan',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '10',
            'slug' => 'Staff HRD',
            'jabatan' => 'Staff HRD',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Psikologi',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Memahami tentang Undang-undang Ketenagakerjaan',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '11',
            'slug' => 'Web developer',
            'jabatan' => 'Web developer',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Teknik Informatika',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Menguasai beberapa bahasa pemrograman seperti Html, Css, Javascript, Php, Mysql Database, Bootstrap dan Framework Laravel, mengerti konsep MVC, OOP, berpengalaman bekerja dengan Web Hosting dan memahami secara baik tentang CRUD',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '12',
            'slug' => 'Manager',
            'jabatan' => 'Manager',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun - 45 tahun',
            'pendidikan' => 'Pendidikan minimal S1 semua jurusan',
            'pengalaman' => 'Memiliki pengalaman minimal 7 tahun pada posisi yang relevan',
            'keahlian' => 'Memiliki jiwa pemimpin dan mengetahui sektor industri',
            'kerjasama' => 'Mampu bekerjasama dalam tim dan dapat berkoordinasi dengan beberapa client',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);
    }
}
