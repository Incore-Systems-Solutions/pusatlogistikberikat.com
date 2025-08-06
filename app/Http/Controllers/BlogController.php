<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function pusatLogistikBerikat()
    {
        return view('blog.pusat-logistik-berikat', [
            'metaTitle' => 'Pusat Logistik Berikat: Pusat Distribusi Nasional | PusatLogistikBerikat.com',
            'metaDescription' => 'Pusat logistik berikat membantu efisiensi distribusi barang impor dan ekspor secara nasional, mendukung kegiatan industri dan perdagangan Indonesia.',
        ]);
    }

    public function solusiLogistik()
    {
        return view('blog.solusi-logistik', [
            'metaTitle' => 'Solusi Logistik Modern untuk Bisnis Anda | PusatLogistikBerikat.com',
            'metaDescription' => 'Temukan solusi logistik yang tepat untuk meningkatkan efisiensi operasional dan daya saing bisnis Anda melalui teknologi dan integrasi sistem.',
        ]);
    }

    public function sistemGudang()
    {
        return view('blog.sistem-gudang', [
            'metaTitle' => 'Sistem Gudang Terintegrasi untuk Manajemen Barang | PusatLogistikBerikat.com',
            'metaDescription' => 'Optimalkan pengelolaan inventaris dan alur barang dengan sistem gudang berbasis teknologi terkini.',
        ]);
    }

    public function erpLogistik()
    {
        return view('blog.erp-logistik', [
            'metaTitle' => 'ERP Logistik: Sistem Terpadu untuk Operasi Logistik | PusatLogistikBerikat.com',
            'metaDescription' => 'Pelajari bagaimana ERP logistik menyatukan proses logistik, pengadaan, dan distribusi dalam satu platform manajemen yang efisien.',
        ]);
    }

    public function integrasiBeaCukai()
    {
        return view('blog.integrasi-beacukai', [
            'metaTitle' => 'Integrasi Sistem dengan Bea Cukai Indonesia | PusatLogistikBerikat.com',
            'metaDescription' => 'Wujudkan proses ekspor-impor yang cepat dan transparan dengan sistem logistik yang terintegrasi langsung dengan layanan Bea Cukai.',
        ]);
    }

    public function warehouseManagementSystem()
    {
        return view('blog.warehouse-management-system', [
            'metaTitle' => 'Warehouse Management System (WMS) | PusatLogistikBerikat.com',
            'metaDescription' => 'Kelola stok dan aktivitas gudang secara real-time dengan Warehouse Management System yang canggih dan terintegrasi.',
        ]);
    }

    public function pelacakanLogistik()
    {
        return view('blog.pelacakan-logistik', [
            'metaTitle' => 'Pelacakan Logistik Real-Time | PusatLogistikBerikat.com',
            'metaDescription' => 'Pantau pengiriman dan alur logistik secara real-time untuk meningkatkan kontrol dan akurasi distribusi barang.',
        ]);
    }

    public function logistikIndonesia()
    {
        return view('blog.logistik-indonesia', [
            'metaTitle' => 'Logistik Indonesia: Transformasi dan Inovasi | PusatLogistikBerikat.com',
            'metaDescription' => 'Ikuti perkembangan industri logistik Indonesia, solusi digital, dan regulasi terbaru yang mendukung pertumbuhan bisnis.',
        ]);
    }

    public function solusiDigitalLogistik()
    {
        return view('blog.solusi-digital-logistik', [
            'metaTitle' => 'Solusi Digital untuk Transformasi Logistik | PusatLogistikBerikat.com',
            'metaDescription' => 'Digitalisasi logistik dengan platform dan sistem modern untuk meningkatkan efisiensi, akurasi, dan kepuasan pelanggan.',
        ]);
    }

}
