<?php 


?>

<!DOCTYPE html>

<html>
  <head>
    <title>Detail produk</title>
    <style>
      * {
        
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }

      body {
        width: 100%;
        height: 100vh;

      }
      
      h1 {
        text-align: center;
        margin: 70px 70px;
      }

      h3 {
        margin-left: 13px;
        text-decoration: underline;
      }

      .produk {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 30px;
      }

      .left {
        text-align: left;
        margin-left: 30px;
      }

      .card {
        width: 500px;
        height: 500px;
        border: 1px solid #ddd;
        text-align: center;
        margin: 10px;
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        box-shadow: 0px 10px 10px -10px rgba(0, 0, 0, 0.75);
      }

      img {
        margin-top: 20px;
      }

      .img1{
        transition: 1s;
      }

      .img1:hover {
        scale: 127%;
      }

      .harga:hover {
        font-weight: bold;
        font-size: 19px;
      }
    </style>
  </head>

  <body>
    <h1>Monitor LG ULTRAWIDE 21:9</h1>

    <h3><a href=""></a>Detail produk</h3>
    
    <div class="produk">
      <div class="card">
        <img src="asset/gambar/monitor-satu/monitorLG1.jpg" width="150" heigth="150" class="img1"/>
        <h4>29" 21:9 UltraWide™ Full HD IPS Monitor dengan AMD FreeSync™</h4>
        <p>29WP500-B</p>

        <ul class="left">
          <li>29-inch UltraWide™ Full HD</li>
          <li>IPS dengan sRGB 99% (Typ.)</li>
          <li>HDR10,</li>
          <li>OnScreen Control</li>
          <li>AMD FreeSync™</li>
          
        </ul>

        <h4 class="harga">Harga Rp.2.800.000</h4>
      
      </div>

      <div class="card">
        <img src="asset/gambar/monitor-dua/1.jpg" width="120" heigth="120" class="img1"/>
        <h4>Monitor QHD (3440 x 1440) UltraWide™ Lengkung IPS 34''</h4>
        <p>34WL75C-B</p>

        <ul class="left">
        <li>UltraWide™ Lengkung 34-inci</li>
        <li>Resolusi 3440 x 1440</li>
        <li>Layar IPS</li>
        <li>HDMI 2 Port</li>
        <li>Refresh Rate 75Hz</li>
        <li>Color Gamut sRGB over 99%<</li>
       </ul>

       <h4 class="harga">Harga Rp.10,999,999</h4>
      </div>

      <div class="card">
        <img src="asset/gambar/monitor-tiga/1.jpg" width="130" heigth="130" class="img1"/>
        <h4>Monitor 21:9 34 inchi LED IPS Nano 5K2K UltraWide® dengan HDR 600 (diagonal 34”)</h4>
        <p>34WK95U-W</p>

        <ul class="left">
          <li>Layar 34 inchi IPS Nano UltraWide®</li>
          <li>Resolusi WUHD 5K2K (5120 x 2160)</li>
          <li>Thunderbolt™ 3</li>
          <li>HDR Support</li>
          <li>4-Side Virtually Borderless Design</li>
        </ul>

        <h4 class="harga">Harga Rp.39.999.999</h4>
      </div>
    </div>
  </body>
</html>
