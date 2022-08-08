<?php

namespace App\Mail;

use App\Models\Data;
use App\Models\PPI;
use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $detail;
    public $request;
    public $join;
    public $wo;
    public $lap;
    public $ijin;
    public $test;
    public $baps;
    public $plt;
    public $penang;
    public $target_tescom;
    public $target_dok;
    public function __construct($detail,$request,$wo,$join,$lap,$ijin,$test,$baps,$plt,$penang,$target_tescom,$target_dok)
    {
        $this->detail=$detail;
        $this->request=$request;
        $this->wo=$wo;
        $this->join=$join;
        $this->lap=$lap;
        $this->ijin=$ijin;
        $this->test=$test;
        $this->baps=$baps;
        $this->plt=$plt;
        $this->penang=$penang;
        $this->target_tescom=$target_tescom;
        $this->target_dok=$target_dok;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data=Data::where('p_aktivasi_node_id','=',$this->request)->get();
        $ppi_table=PPI::where('spa','=',$this->request)->get();
        return $this->from('no-reply@gmail.com','Konfirmasi')
        ->subject('Email Invoices')
        ->markdown('emails.invoices',[
            'data'=>$data,
            'ppi'=>$ppi_table,
            'wo'=>$this->wo,
            'join'=>$this->join,
            'lap'=>$this->lap,
            'ijin'=>$this->ijin,
            'test'=>$this->test,
            'baps'=>$this->baps,
            'plt'=>$this->plt,
            'penang'=>$this->penang,
            'target_tescom'=>$this->target_tescom,
            'target_dok'=>$this->target_dok,
        ]);
    }
}
