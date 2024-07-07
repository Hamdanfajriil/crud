<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::get();

        return view('crud.dashboard', compact('transactions'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'project_name' =>'required',
            'site_name' =>'required',
            'no_po' =>'required|numeric|min:7',
            'tanggal_survey' =>'required',
            'lattitude' =>'required|min:2',
            'longtitude' =>'required|min:4',
            'jenis_tower' =>'required',
            'tinggi_tower' =>'required|numeric|min:1'
        ]);

        $transaction = new Transaction;
        $transaction->project_name = $request['project_name'];
        $transaction->site_name = $request['site_name'];
        $transaction->no_po = $request['no_po'];
        $transaction->tanggal_survey = $request['tanggal_survey'];
        $transaction->lattitude = $request['lattitude'];
        $transaction->longtitude = $request['longtitude'];
        $transaction->jenis_tower = $request['jenis_tower'];
        $transaction->tinggi_tower = $request['tinggi_tower'];
        $transaction->save();

        return redirect('crud');
    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);
        return view('crud.edit', compact(
            'transaction'
        ));
    }

    public function create()
    {
        $transaction = new Transaction();
        return view('crud.create', compact(
            'transaction'
        ));
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->card_name = $request['card_name'];
        $transaction->card_no = $request['card_no'];
        $transaction->exp_month = $request['exp_month'];
        $transaction->exp_year = $request['exp_year'];
        $transaction->cvv = $request['cvv'];
        $transaction->save();

        return redirect('crud')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
        {
            $transaction = Transaction::find($id);
            $transaction->delete();

            return redirect('crud')->with('success','Data sudah terhapus!!');
        }
}
