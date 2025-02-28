<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    public function download()
    {
        $files = File::latest()->paginate(10);
        return view('download', compact('files'));
    }

    public function upload()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx,pdf|max:2048'
        ]);

        $kode = $request->kode;
        $file = $request->file('file');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);

        File::create([
            'kode' => $kode,
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName
        ]);

        return redirect()
            ->route('download.upload')
            ->with('success', 'File berhasil diupload');
    }

    public function unduh(File $file)
    {
        $filePath = storage_path("app/uploads/{$file->generated_name}");

        if (file_exists($filePath)) {
            return response()->download($filePath, $file->original_name);
        } else {
            abort(404, 'File not found');
        }
    }

    public function downloadfile(Request $request)
    {
        $nama_file = $request->nama_file;

        $query = File::query();
        $query->select('files.*');
        if (!empty($request->nama_file)) {
            $query->where('kode', 'like', '%' . $request->nama_file . '%');
        }
        $files = $query->paginate(5);
        $files->appends($request->all());
        // dd($files);
        return view('datatable', compact('files'));
    }
}
