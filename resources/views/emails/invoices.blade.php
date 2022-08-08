@component('mail::message')
# PT Indonesia Comnest Plus

Divisi Aktivasi<br>
Permintaan Pelaksanaan Instalasi FOC FOT<br>
Kepada HP<br>
Atas Perintah : {{$plt}}<br>

@component('mail::table')
| Nomor| Item | Keterangan |
| - |:-------------:| --------:|
| <pre>  1</pre>  |  No Project Activation | <pre> {{$data[0]->p_aktivasi_node_id}}</pre> |
| <pre>  2</pre> |  Pelanggan | <pre> {{$data[0]->c_name}}</pre> |
| <pre>  3</pre> |  Alamat | {{$data[0]->address}}  |
| <pre>  5</pre> |  Layanan| <pre> Iconnet {{$data[0]->bandwidth}}</pre> |
| <pre>  6</pre> |  PLT | <pre> {{$plt}}</pre> |
| <pre>  7</pre>  |  Penanggung Jawab | <pre> {{$penang}}</pre>|
| <pre>  8</pre> |  Target Tescomm | <pre> {{date('d F Y', strtotime($target_tescom)) }}</pre> |
| <pre>  9</pre> | Target Submit Dokumen| <pre> {{date('d F Y', strtotime($target_dok)) }}</pre> |
| <pre>  10</pre> |  Tanggal Order | <pre> <?php $date = date('d F Y', strtotime($ppi[0]->ppi));
                        echo $date ?></pre>  |
@endcomponent

Terimakasih dan mohon konfirmasi kesanggupan 1 hari serta melampirkan hasil survey maksimal 3 (tiga) hari setelah email kami kirimkan.<br>
# Nb: Lokasi Pekerjaan ada pada alamat Link

@component('mail::table')
| Bersedia Untuk Dilaksanakan | Bersedia Untuk Dilaksanakan |
| :-------------:| --------:|
|<pre>              PT...................</pre> <br><pre>                          TTD</pre> <br><br><pre>                   (.....................)</pre>|<pre>                PT...................</pre> <br><pre>                          TTD</pre> <br><br><pre>                   (.....................)</pre>|





@endcomponent
@component('mail::table')
|<pre>Alasan Tidak Bersedia:                                                                                   <br><br><br>  </pre> |
| :-------------:|
@endcomponent
<!-- Status Monitoring  Penanggung Jawab Pekerjaan * Beritanda √ pada kolom yang tersedia sesuai status <br>

@component('mail::table')
| Survey ||Instalasi ||QC || Lain-lain|
| :-------------:|-| --------:|-| :-------------|-|:-------------|
|Pengisian WO |<pre>  {{$wo}}  </pre>|Joint|<pre>  {{$join}}  </pre>|LaporanDok.|<pre>  {{$lap}}  </pre>
|Ijin |<pre>  {{$ijin}}  </pre>|Test Comm|<pre>  {{$test}}  </pre>|BAPS|<pre>  {{$baps}}  </pre>|<pre> </pre>|

@endcomponent -->
Terima Kasih,<br>
@endcomponent
