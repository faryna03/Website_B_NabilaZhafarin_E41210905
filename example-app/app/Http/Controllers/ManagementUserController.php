<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ini bagian MVC
class ManagementUserController extends Controller
{
    public function index()
    {
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        // $name = "Nabila Zhafarina";
        // $pelajaran = ["Menggambar", "Melukis", "DesignUI"];
        // return view('home', [
        //     "name" => $name,
        //     'pelajaran' => $pelajaran
        // ]);
    }

    public function create()
    {
        return "Method ini nantinya akan digunakan menampilkan form untuk menambah data user";
    }

    public function store(Request $request)
    {
        return "Digunakan untuk menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "Digunakan untuk mengambil satu data user dengan id=" . $id;
    }

    public function edit($id)
    {
        return "Digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }

    public function update(Request $request, $id)
    {
        return "Digunakan untuk mengubah data user dengan id=" . $id;
    }

    public function destroy($id)
    {
        return "Digunakan untuk menghapus data user  dengan id=" . $id;
    }
}
?>