<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>WEBSITE IM</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=70aeba7f&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>INDONESIAN MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>HMM</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="film8.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Habibie Ainun</h5>
        <p class="card-text">Film Habibie Ainun diproduksi oleh MD Pictures, salah satu PH terbesar di Indonesia dan terdiri dari tiga sekuel, 
          yaitu Habibie & Ainun, Rudy Habibie, Ainun & Habibie 3. Tema film Habibie dan Ainun adalah drama biopik. Cerita singkat 
          Habibie dan Ainun yaitu tentang hidup B. J. Habibie, Presiden RI ke-3 dan istrinya, Hasri Ainun Bersari.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film6.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Keluarga Cemara</h5>
        <p class="card-text">Keluarga Cemara mengisahkan kehidupan sehari-hari Cemara/Ara bersama Abah, Ema, dan kakaknya, Euis, dan adiknya, Agil. 
          Tadinya mereka mapan di Jakarta, tapi Abah harus menjual rumah dan harta 
          bendanya karena orang yang ia percaya melakukan tindakan ilegal, sehingga Abah harus bertanggung jawab.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film5.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Dear Nathan</h5>
        <p class="card-text">Menceritakan tentang nathan dan salma yang saling bertemu, 
          kedekatan mereka mulai mendapatkan ujian pada saat kehadiran orang yang kembali ada di kehidupan mereka</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film4.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Raja, Ratu dan Rahasia</h5>
        <p class="card-text">Dirilis pada 2018 lalu, film yang digarap oleh Starvision ini mengisahkan tentang pertemanan antara Raja dan Ratu yang diam-diam keduanya menyimpan rahasia yang nantinya terbongkar satu sama lain. Selain diperankan oleh aktor-aktor baru,
           film ini juga menyajikan cerita yang ringan sehingga penonton mudah untuk mengikuti alur ceritanya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film3.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Laskar Pelangi</h5>
        <p class="card-text">Laskar Pelangi menceritakan kisah anak-anak dari Desa Belitung yang dikategorikan sebagai anak-anak miskin di Belitung. 
          Anak-anak tersebut tidak berhenti berusaha untuk memperbaiki masa depan mereka.
            Mereka merupakan siswa SD Muhammadiyah, SD tertua di desa Belitung.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film2.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Miracle in Cell No 7</h5>
        <p class="card-text">Miracle in Cell No 7 memperlihatkan bagaimana kasih sayang seorang ayah kepada putrinya yang tidak terbatas. 
          Meskipun memiliki keterbatasan mental, seorang ayah tetap ingin memberikan yang terbaik untuk putrinya.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
