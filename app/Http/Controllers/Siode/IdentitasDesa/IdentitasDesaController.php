<?php

namespace App\Http\Controllers\Siode\IdentitasDesa;

use App\Http\Controllers\Controller;
use App\Models\Tabel\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Laravolt\Indonesia\Models\Province;

class IdentitasDesaController extends Controller
{
    public function index()
    {
        $desa = Desa::findOrFail(1);
        $provinces = Province::where('code', '36')->pluck('name', 'code');
        return view('siode.infodesa.identitas-desa.index', compact('provinces', 'desa'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function updateLogo(Request $request, Desa $desa)
    {
        if (request()->ajax()) {
            $validator = Validator::make($request->all(), [
                'logo' => ['required', 'image', 'max:2048'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()->all(),
                ]);
            }

            if ($desa->logo != 'logo.png') {
                File::delete(storage_path('app/' . $desa->logo));
            }

            $desa->logo = $request->file('logo')->store('public/logo');
            $desa->save();

            return response()->json([
                'error' => false,
                'data' => ['logo' => $desa->logo],
            ]);
        } else {
            $data = $request->validate([
                'nama_desa' => ['required', 'max:64', 'string'],
                'nama_kecamatan' => ['required', 'max:64', 'string'],
                'nama_kabupaten' => ['required', 'max:64', 'string'],
                'alamat' => ['required', 'string'],
                'nama_kepala_desa' => ['required', 'max:64', 'string'],
                'alamat_kepala_desa' => ['required', 'string'],
            ]);

            if ($request->nama_desa != $desa->nama_desa || $request->nama_kecamatan != $desa->nama_kecamatan || $request->nama_kabupaten != $desa->nama_kabupaten || $request->alamat != $desa->alamat || $request->nama_kepala_desa != $desa->nama_kepala_desa || $request->alamat_kepala_desa != $desa->alamat_kepala_desa) {
                $desa->update($data);
                return redirect()
                    ->back()
                    ->with('success', 'Profil desa berhasil di perbarui');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Tidak ada perubahan yang berhasil disimpan');
            }
        }
    }
    public function updateGambar(Request $request, Desa $desa)
    {
        // dd($request->all());
        if (request()->ajax()) {
            $validator = Validator::make($request->all(), [
                'gambar' => ['required', 'image', 'max:2048'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()->all(),
                ]);
            }

            if ($desa->gambar != 'logo.png') {
                File::delete(storage_path('app/' . $desa->gambar));
            }

            $desa->gambar = $request->file('gambar')->store('public/gambar');
            $desa->save();

            return response()->json([
                'error' => false,
                'data' => ['gambar' => $desa->gambar],
            ]);
        } else {
            $data = $request->validate([
                'nama_desa' => ['required', 'max:64', 'string'],
                'nama_kecamatan' => ['required', 'max:64', 'string'],
                'nama_kabupaten' => ['required', 'max:64', 'string'],
                'alamat' => ['required', 'string'],
                'nama_kepala_desa' => ['required', 'max:64', 'string'],
                'alamat_kepala_desa' => ['required', 'string'],
            ]);

            if ($request->nama_desa != $desa->nama_desa || $request->nama_kecamatan != $desa->nama_kecamatan || $request->nama_kabupaten != $desa->nama_kabupaten || $request->alamat != $desa->alamat || $request->nama_kepala_desa != $desa->nama_kepala_desa || $request->alamat_kepala_desa != $desa->alamat_kepala_desa) {
                $desa->update($data);
                return redirect()
                    ->back()
                    ->with('success', 'Profil desa berhasil di perbarui');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Tidak ada perubahan yang berhasil disimpan');
            }
        }
    }
}
