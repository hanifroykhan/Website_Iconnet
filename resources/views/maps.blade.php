@extends('template')
@section('content')

<head>
  <!-- <script src="resources\js\maps.js"></script> -->

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="leaflet-search.css"/> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- <script src="leaflet-search.js"></script> -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet-src.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
  <script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>

  <script src="http://labs.easyblog.it/maps/leaflet-search/examples/data/restaurant.geojson.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
  <style>
    .btnmap1 {
      background-color: DodgerBlue;
      top: 10%;
      right: 30%;
      border-color: #2196F3;
      color: white;
      padding: 10px 10px;
      font-size: 1000px;
      cursor: pointer;
    }


    .btnmap2 {
      background-color: DodgerBlue;
      border-color: #2196F3;
      color: white;
      padding: 25px 25px;
      font-size: 40px;
      cursor: pointer;


    }

    .legend {
      line-height: 25px;
      font: 14px Arial, Helvetica, sans-serif;
      padding: 12px 12px;
      background: rgba(255, 255, 255, 0.8);
      color: #555;
      opacity: 1;
    }



    .legend h4 {
      text-align: center;
      font-size: 16px;
      margin: 2px 12px 8px;
      color: #777;
    }


    .leaflet-popup-content-wrapper {
      text-align: justify;
    }

    .leaflet-popup-content {
      margin: 19px 8px;
      line-height: 1.4;
    }

    .leaflet-container a.leaflet-popup-close-button:hover {
      color: #ffc100;
    }

  </style>
</head>
<!-- Header -->
<div class="container-fluid">

  <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">

    </div>

  </div>
</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Coverage Area</h3>
          </div>
          @error('maps')
          <div class="alert alert-danger m-3">
            {{$message}}
          </div>
          @enderror
          @if (session('sukses'))
          <div class="alert alert-success m-3">
            {{session('sukses')}}
          </div>
          @endif
   

          &nbsp;
          <div class="container">
            &nbsp;
            <div class="items">
              <div class="icon-wrapper">
                <button type="button" style="height:70px;width:150px;right:20%" id="btnmap1" data-toggle="modal" data-target="#cariLokasi" class="btn btn-outline-primary"><i class="fas fa-location-arrow">Cari User</i></button>
                &nbsp;
                <button type="button" style="height:70px;width:150px;right:20%" id="btnmap2" data-toggle="modal" data-target="#Navigasi" class="btn btn-outline-success"><i class="fas fa-route">Navigasi</i> </button>

             
                <div class="card" style="float:right;left: 220px;width:300px;bottom:10px">





                  <div class="card-body">
                    <h4 class="card-title" style="font: 23px Arial, Helvetica, sans-serif">Hasil Pencarian </h4>
                    <br>
                    <h6 class="card-text">Area : <p id="hasil"></p>
                    </h6>
                    <h6 class="card-text">ID FAT : <p id="nama_odp"></p>
                    </h6>
                    <h6 class="card-text">Port Terpakai : <p id="port"></p>
                    </h6>
                    <h6 class="card-text">Port Idle : <p id="idle"></p>
                    </h6>
                    <h6 class="card-text">Titik Koordinat : <p id="titik_koordinat"></p>
                    </h6>
                    <h6 class="card-text">Nama OLT : <p id="nama_olt"></p>
                    </h6>
                  </div>
                </div>





              </div>
            </div>
          </div>




          <div class="modal fade" id="cariLokasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cari alamat user</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <table width="450px">
                    <tr>
                      <td>
                        <div class="form-group">
                          <label class="bmd-label-floating">User Longtitude</label>
                          <input type="text" name="Long" id="Long" class="form-control" placeholder="Masukkan User Longtitude">
                        </div>
                      </td>


                      <td>
                        <div class="form-group">
                          <label class="bmd-label-floating">User Latitude</label>
                          <input type="text" name="Lat" id="Lat" class="form-control" placeholder="Masukkan User Latitude">
                        </div>
                      </td>
                    </tr>
                    <td>
                      <div class="form-group">
                        <button type="button" id="searchMap" class="btn btn-primary btn-md mr-3">Cari Lokasi</button>
                      </div>
                    </td>
                  </table>
                </div>





              </div>


            </div>
          </div>

          <div class="modal fade" id="Navigasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Navigasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <table width="450px">
                    <tr>
                      <td>
                        <div class="form-group">
                          <label class="bmd-label-floating">User Longtitude</label>
                          <input type="text" name="ULong" id="ULong" class="form-control" placeholder="Masukkan User Longtitude">
                        </div>
                      </td>


                      <td>
                        <div class="form-group">
                          <label class="bmd-label-floating">User Latitude</label>
                          <input type="text" name="ULat" id="ULat" class="form-control" placeholder="Masukkan User Latitude">
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="form-group">
                          <label class="bmd-label-floating">ODP Longtitude</label>
                          <input type="text" name="OLong" id="OLong" class="form-control" placeholder="Masukkan ODP Longtitude">
                        </div>
                      </td>
                      <br>

                      <td>
                        <div class="form-group">
                          <label class="bmd-label-floating">ODP Latitude</label>
                          <input type="text" name="OLat" id="OLat" class="form-control" placeholder="Masukkan ODP Latitude">
                        </div>
                      </td>
                    </tr>
                    <td>
                      <div class="form-group">
                        <button type="button" id="sendRoute" class="btn btn-primary btn-md mr-3">Cari Rute</button>
                      </div>
                    </td>
                  </table>
                </div>





              </div>


            </div>
          </div>





          <div class="d-flex justify-content-center">
            <div class="m-4 " id="map" style="width:1600px; height: 720px;"></div>


          </div>





          <!-- <div class="info-wrapper" style="margin: 10px!important;display: flex !important;">
                  <i style="background:#FF0000">
                   </i> Proses Pembangunan</div>
                  </div> -->


        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>
<script src="http://labs.easyblog.it/maps/leaflet-search/examples/data/restaurant.geojson.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

<script>
  $(document).ready(function() {
    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYW5qYXJhbmFzMjEyIiwiYSI6ImNrb29hMzJrbjA3emwyb3VpMnowamVqZGIifQ._hJ8hlsIsEfa58seZ0s8Lg', {

      id: 'mapbox/streets-v11'
    });

    var curLocation = [-6.8969684492477, 107.5995523527562]

    var map = L.map('map', {
      center: curLocation,
      zoom: 15,
      layers: [peta1]
    });

    $('#sendRoute').click(function() {
      var ULong = $('#ULong').val();
      var ULat = $('#ULat').val();
      var OLong = $('#OLong').val();
      var OLat = $('#OLat').val();

      L.Routing.control({
          waypoints: [
            L.latLng(ULong, ULat),
            L.latLng(OLong, OLat)
          ]
        })
        .addTo(map);




    });


    var data = [
      <?php foreach ($data as $key => $value) { ?> {
          "Tikor": [<?= $value->Tikor_ODP ?>],
          "Nama": "<?= $value->NAMA_ODP ?>"
        },

      <?php } ?>
    ];

    var markersLayer = new L.LayerGroup();
    map.addLayer(markersLayer);
    var controlSearch = new L.Control.Search({
      position: 'topright',
      layer: markersLayer,
      initial: false,
      zoom: 20,
    });

    var markerIcon = L.icon({
      iconUrl: '../assets/img/odp3.webp',
      iconSize: [15, 15],
    });
    map.addControl(controlSearch);
    for (i in data) {
      var nama = data[i].Nama;
      var tikor_odp = data[i].Tikor;
      var marker = new L.Marker(new L.latLng(tikor_odp), {
        title: nama,
        icon: markerIcon
      })



      marker.bindPopup('<table><tr><td>Nama ODP</td><td>:</td></tr></table>' + nama + '<br>' + '<br>' + '<table><tr><td>Titik Koordinat</td><td>:</td></tr></table>' + tikor_odp)
      markersLayer.addLayer(marker);

    }


    $("#searchtext9").on("change", function() {
      var val = $(this).val();


      $.ajax({
        url: '/getNamaOdp',
        type: 'GET',
        dataType: 'json', // added data type
        data: {
          odp: val
        },
        success: function(res) {
          console.log('val', res)

          $('#nama_odp').text(res.NAMA_ODP)
          $('#titik_koordinat').text(res.Tikor_ODP)
          $('#status').text(res.Status_Fat)
          $('#nama_olt').text(res.Nama_OLT)
          $('#port').text(res.Port)
          $('#idle').text(res.Idle)

        }
      })

    });




    $('#searchMap').click(function() {
      var Long = $('#Long').val();
      var Lat = $('#Lat').val();
      var zoom = 17;
      var myIcon = L.icon({
        iconUrl: '../assets/img/user.png',
        iconSize: [30, 30],
      });

      L.Circle.include({
        contains: function(latLng) {
          return this.getLatLng().distanceTo(latLng) < this.getRadius();
        }
      });

      var circle = L.circle([Long, Lat], 300).addTo(map);
      L.marker([Long, Lat], {
          icon: myIcon
        })
        .addTo(map)
        .bindPopup("<table><tr><td>Lokasi user </td></td></table>")

      map.setView([Long, Lat], zoom);
      var result = (circle.contains(marker.getLatLng())) ? 'Tercover' : 'tidak Tercover';
      let greeting;
      greeting = ('Area yang anda cari ' + result);
      document.getElementById("hasil").innerHTML = greeting;







    });








    function style(feature) {
      return {
        weight: 20,
        opacity: 10,
        fillOpacity: 10,
        radius: 10,
        fillColor: getColor(feature.properties.TypeOfIssue),
        color: "white"

      };
    }

    var legend = L.control({
      position: 'bottomleft'
    });

    legend.onAdd = function(map) {
      var div = L.DomUtil.create('div', 'info legend');
      labels = ['../assets/img/user.png', '../assets/img/wp2.png', '../assets/img/odp3.webp'],
        grades = ["Lokasi User", "Waypoints", "ODP"],


        div.innerHTML += "<h4><strong>Legend Maps</strong></h4>";
      for (var i = 0; i < grades.length; i++) {

        div.innerHTML +=

          ("<img src=" + labels[i] + " height='30' width='30'>") + grades[i] + '<br>';
  
      }

      return div;
    };
    legend.addTo(map);

  





  })
</script>

</body>

</html>
@endsection