<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pts;
use App\Exports\PtsExport;
use App\Imports\PtsImport;
use Maatwebsite\Excel\Facades\Excel;

class PtsController extends Controller
{
    public function index()
    {
        $data = Pts::get();
        return view('home', compact('data'));
    }

    public function addData()
    {
        return view('addData');
    }

    public function saveData(Request $request)
    {
        $data = new Pts;
        $data->namaKaryawan = $request->namaKaryawan;
        $data->hadirMasuk = $request->hadirMasuk;
        $data->izinMasuk = $request->izinMasuk;
        $data->bolosMasuk = $request->bolosMasuk;
        $data->telatMasuk = $request->telatMasuk;
        $data->save();
        return redirect('/home')->with('success', 'Task Saved Successfully!');
    }

    public function editData($id)
    {
        $data = Pts::where('id', $id)->first(); 
        return view('editData', compact('data'));
    }

    public function updateData(Request $request)
    {
        $data = Pts::where('id', $request->id)->first();
        $data->namaKaryawan = $request->namaKaryawan;
        $data->hadirMasuk = $request->hadirMasuk;
        $data->izinMasuk = $request->izinMasuk;
        $data->bolosMasuk = $request->bolosMasuk;
        $data->telatMasuk = $request->telatMasuk;
        $data->save();
        return redirect('/home')->with('success', 'Task Updated Successfully!');
    }

    public function deleteData($id)
    {
       $data = Pts::where('id',$id)->first();
       $data->delete();
       return redirect('/home')->with('success', 'Task Deleted Successfully!');
    }

    public function exportXL()
    {
        return Excel::download(new PtsExport,'pts.xlsx');
    }

    public function exportPDF()
    {
        return Excel::download(new PtsExport,'pts.pdf');
    }

    public function upload()
    {
        return view('uploadData');
    }

    public function uploadData(Request $request)
    {
        Excel::import(new PtsImport, $request->file('file')->store('temp'));

        return redirect('home');
    }
}
