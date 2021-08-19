<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller{

    public function __construct()
    {
  
    }

    public function get()
    {
        $data= Siswa::get();
        return response()->json($data);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $nama_siswa = $request->nama_siswa;
        $kelas = $request->kelas;
        $jurusan = $request->jurusan;
        $alamat = $request->alamat;
        $no_telp = $request->no_telp;

        $add = Siswa::create([

            'nama_siswa' => $nama_siswa,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
        ]);

        if($add) //Jika data berhasil disimpan
        {
            return response()->json([
                'status' => "Berhasil menambahkan data siswa",
                'data' => $add
            ]);
        }else{
            return response()->json([
                'status' => "Gagal menambahkan data siswa",
                'data' => null
            ]);
        }
    }
  

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);


        $nama_siswa = $request->nama_siswa;
        $kelas = $request->kelas;
        $jurusan = $request->jurusan;
        $alamat = $request->alamat;
        $no_telp = $request->no_telp;


        $siswa = Siswa::find($id);

        $update = $siswa->update([

            'nama_siswa' => $nama_siswa,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
        ]);

        if($update) //Jika data berhasil disimpan
        {
            return response()->json([
                'status' => "Berhasil mengubah data siswa",
                'data' => $siswa
            ]);
        }else{
            return response()->json([
                'status' => "Gagal mengubah data siswa",
                'data' => null
            ]);
        }

    }


    public function delete($id)

    {
        $siswa = Siswa::find($id);
        $delete = $siswa->delete();

        if($delete) //Jika data berhasil disimpan
        {
            return response()->json([
                'status' => "Berhasil menghapus data siswa",
                'data' => $siswa
            ]);
        }else{
            return response()->json([
                'status' => "Gagal menghapus data siswa",
                'data' => null
            ]);
        }


    }

}