<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>WEBSITE</title>

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"
></script>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <img src="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/9fbd8bab-53ad-4ba8-a632-2fc75f6f28cf" height="50" alt="MDB Logo" loading="lazy" />
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
      <a class="navbar-brand" href="<?= base_url('data/insertData/') ?>">Add Student</a>
      <a class="navbar-brand" href="<?= base_url('login') ?>">Log Out</a>
      <a class="navbar-brand" href="<?= base_url('report') ?>">Report</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <!-- add your list items here -->
        </ul>
      </div>
    </div>
  </div>
</nav>

<header>
<div class="p-1 text-center bg-image" style="background-image: url('https://www.dompetkebaikan.id/wp-content/uploads/2021/07/maju-mundur-kebijakan-potong-gaji-untuk-zakat-5IZVKbPOZX-e1626599997471.jpg'); height: 500px; background-attachment: fixed;">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="fs-1 text-center bg-image" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="text-white">
          <h1 class="fs-1">ZAKAT</h1>
          <h1 class="fs-4">MARI BAYAR ZAKAT MU</h1>
          <h1 class="fs-5">Zakat adalah bagian tertentu dari harta yang wajib dikeluarkan oleh setiap muslim apabila telah mencapai syarat yang ditetapkan. Sebagai salah satu rukun Islam, zakat ditunaikan untuk diberikan kepada golongan yang berhak menerimanya (asnaf).</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Main Layout-->
<main class="text-center my-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p align="justify">.</p>

      </div>
    </div>
  </div>
</main>

<div style="display: flex;">
  <img src="https://www.gurupendidikan.co.id/wp-content/uploads/2019/06/Zakat.jpg" class="img-thumbnail" alt="" width="500" style="margin-right: 20px;">
  <p style="font-size: 16px; line-height: 2;">
    Apa itu zakat?
    Zakat adalah penunaian kewajiban pada harta yang khusus, dengan cara yang khusus, dan disyaratkan ketika dikeluarkan telah memenuhi haul (masa satu tahun) dan nisab (ukuran minimal dikenai kewajiban zakat). Zakat pun kadang dimaksudkan untuk harta yang dikeluarkan. Sedangkan muzakki adalah istilah untuk orang yang memiliki harta dan mengeluarkan zakatnya.
    Zakat disebut sebanyak 32 kali dalam Alquran
    Zakat disyariatkan pada tahun kedua Hijriyah dekat dengan waktu disyariatkannya puasa Ramadhan. Zakat ini merupakan suatu kewajiban dan bagian dari rukun Islam. Hal ini tidak bisa diragukan lagi karena telah terdapat berbagai dalil dari Alquran, As Sunnah, dan ijma (kata sepakat ulama).
  </p>
</div>

</header>
<!--Main Layout-->
<main class="text-center my-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p align="justify">.</p>

      </div>
    </div>
  </div>
</main>
<!--Main Layout-->

</head>
<body>
<div class="d-flex justify-content-center">
  <button type="button" class="btn btn-primary btn-lg"><a class="navbar-brand" href="<?= base_url('data/insertData/') ?>">LAKUKAN PEMBAYARAN</a></button> 
</div>
</div>
 <!--Main Layout-->
<main class="text-center my-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p align="justify">.</p>

      </div>
    </div>
  </div>
</main>
<!--Main Layout-->   

<style>


    table {
        border-collapse: collapse;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    table td, table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table th {
        background-color: #4CAF50;
        color: white;
    }

    table tr:nth-child(even) td {
        background-color: #f2f2f2;
    }

    table tr:hover td {
        background-color: #ddd;
    }
</style>
<table id="example" class="table table-striped">
        <thead>
        <tr>
            <td>nik</td>
            <td>nama</td>
            <td>no_telpon</td>
            <td>jenis_zakat</td>
            <td>jumlah_jiwa</td>
            <td>nominal</td>
        </tr>
        </thead>

        <tbody>
        <?php 
            foreach ($hasil as $row) {

            
        
        ?>
        <tr>
            <td><?php echo $row->nik; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->no_telpon; ?></td>
            <td><?php echo $row->jenis_zakat; ?></td>
            <td><?php echo $row->jumlah_jiwa; ?></td>
            <td><?php echo $row->nominal; ?></td>
            <td><button type="button" class="btn btn-primary"> 
              <a href="data/editData/<?php echo $row->nik; ?>">
              <div class="text-white">Edit 
              </div>
              </button>
              </a>
              <button type="button" class="btn btn-primary">   
              <a href="data/hapusData/<?php echo $row->nik; ?>">
              <div class="text-white">
              Hapus
              </div>
              </button> 
              </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    <script>
    $(document).ready(function () 
    {
        $('#example').DataTable();
    });
    </script>

    

</body>

<footer class="bg-light text-center text-dark">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4 mb-3">
        <h5 class="mb-3">Tentang Kami</h5>
        <p class="mb-0">Ini adalah website Hafiz Nurul Iman yang dibuat dengan Bootstrap dan PHP.</p>
      </div>
      <div class="col-lg-4 mb-3">
        <h5 class="mb-3">Kontak Kami</h5>
        <p class="mb-0">Alamat: Jl. serdang asri, panongan, Banten, Tanggerang</p>
        <p class="mb-0">Telepon: +62 0000000000000</p>
        <p class="mb-0">Email: info@hafiznurulimani20.com</p>
      </div>
      <div class="col-lg-4 mb-3">
        <h5 class="mb-3">Ikuti Kami</h5>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    &copy; 2023 Hafiz Nurul Iman. All rights reserved.
  </div>
</footer>
</html>