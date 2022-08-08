<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Data;
use App\Models\PPI;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PPIController extends Controller
{
    public function viewKirim()
    {
        $vendor=Vendor::all();
        return view('PPI.kirimppiview',['vendor'=>$vendor]);
    }
    public function cari(Request $request)
    {

        $this->validate($request,[
            'spa'=>'required'
        ]);
        $data = Data::where('p_aktivasi_node_id', '=', $request->spa)->get();
        $vendor=Vendor::all();
        if (!$data->isEmpty()) {
            return view('PPI.kirimppihasil', ['data' => $data,'vendor'=>$vendor])->with('sukses', 'sukses');
        }else{
            return redirect('/kirimppi')->with('gagal', 'Data Yang Anda Cari Tidak Ada');
        }
    }
    public function mail(Request $req)
    {
        $this->validate($req,[
            'penang' => 'required',
            'plt'=>'required',
            'mail1' => 'required',
            'mail2' => ' required',
            'target_tescom' => 'required',
            'target_dok' => 'required',
            'nama_mitra' => 'required'
        ]);

        $emails = explode(',', $req->mail1);

        $detail = [
            'title' => 'Hallo',
            'body' => 'Selamat Pagi'
        ];
        $tgl=date('Y-m-d');

        $result=PPI::where('spa','=',$req->spa)->update([
            'ppi'=>$tgl,
            'nama_mitra'=>$req->nama_mitra
            ]);
        $ver=PPI::where('spa','=',$req->spa)->get();
        if ($ver[0]->ppi==null){
        }

            if($result){

                Mail::to($emails)
                    ->cc($req->mail2)
                    ->send(new InvoiceMail($detail,$req->spa,$req->wo,$req->join,$req->laporan,$req->ijin,$req->test,$req->baps,$req->plt,$req->penang,$req->target_tescom,$req->target_dok));


               return redirect('/kirimppi')->with('sukses','Email Telah Dikirim');
            }

        else{
            Mail::to($req->mail2)->send(new InvoiceMail($detail,$req->spa,$req->wo,$req->join,$req->laporan,$req->ijin,$req->test,$req->baps,$req->plt,$req->penang,$req->target_tescom,$req->target_dok));
            return redirect('/kirimppi')->with('sukses','Email Telah Dikirim');
        }
       
        return view('PPI.kirimppihasil');
    }

}