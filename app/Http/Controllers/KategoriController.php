<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function index() {

        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')-> where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update daata berhasil. Jumlah data yang diupdate: ' .$row. ' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row. ' baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }

    // public function index(KategoriDataTable $dataTable)
    // {
    //     // dd($dataTable);
    //     return $dataTable->render('kategori.index');
    // }

    // public function create()
    // {
    //     return view('kategori.create');
    // }

    // public function store(StorePostRequest $request): RedirectResponse
    // {
    //     // Validasi data yang diterima dari form
    //     $validated = $request->validated();

    //     $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
    //     $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

    //     // The post is valid...

    //     // Buat data kategori baru berdasarkan input dari form
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);

    //     // Redirect ke halaman kategori setelah berhasil menyimpan data
    //     return redirect('/kategori');
    // }

    // public function edit($id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     return view('kategori.edit', ['data' => $kategori]);
    // }

    // public function update($id, Request $request)
    // {
    //     $kategori = KategoriModel::find($id);

    //     $kategori->kategori_kode = $request->kodeKategori;
    //     $kategori->kategori_nama = $request->namaKategori;

    //     $kategori->save();

    //     return redirect('/kategori');
    // }

    // public function delete($id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     $kategori->delete();

    //     return redirect('/kategori');
    // }
}
