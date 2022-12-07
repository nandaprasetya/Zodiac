<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="aos.js"></script>
    <link rel="stylesheet" href="aos.css">
</head>
<body>
    <div class="cover">
    <form action="" method="post">
        <h1 data-aos="fade-down" data-aos-duration="800" data-aos-delay="100">Masukkan Data Diri Anda</h1>
        <div class="form-control" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <input type="text" name="nama" required="">
            <label>
            <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">m</span><span style="transition-delay:150ms">a</span>
            </label>
        </div>
        <div class="form-control" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <input type="text" name="tanggal" required="">
            <label>
            <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">n</span><span style="transition-delay:150ms">g</span><span style="transition-delay:200ms">g</span><span style="transition-delay:250ms">a</span><span style="transition-delay:300ms">l</span>
            </label>
        </div>
        <label for="nama" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">Bulan :</label>
        <select name="bulan" id="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="maret">Maret</option>
            <option value="april">April</option>
            <option value="mei">Mei</option>
            <option value="juni">Juni</option>
            <option value="juli">Juli</option>
            <option value="agustus">Agustus</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="desember">Desember</option>
        </select>
        <div class="form-control" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
            <input type="text" name="tahun" required="">
            <label>
            <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">h</span><span style="transition-delay:150ms">u</span><span style="transition-delay:200ms">n</span>
            </label>
        </div>
        <input type="submit" class="kirim" name="kirim" value="CEK ZODIAC">
    </form>
    <video src="background.mp4" autoplay muted loop></video>
    </div>

    <?php
        if(isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $tanggal = $_POST['tanggal'];
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];

            if($tanggal >=32){
                header("location:404.html");
            }elseif($tanggal >=29 && $bulan == "februari"){
                header("location:404.html");
            }elseif($tanggal >=31 && $bulan == "april"){
                header("location:404.html");
            }elseif($tanggal >=31 && $bulan == "juni"){
                header("location:404.html");
            }elseif($tanggal >=31 && $bulan == "september"){
                header("location:404.html");
            }elseif($tanggal >=31 && $bulan == "november"){
                header("location:404.html");
            }elseif((($tanggal >=21&&$tanggal <=31) && $bulan == "maret")||($tahun <=19 && $bulan == "april")){
                header("location:aries.html");
            }elseif((($tanggal >=20  && $tanggal <=30) && $bulan == "april")||($tahun <=20 && $bulan == "mei")){
                header("location:taurus.html");
            }elseif((($tanggal >=21 && $tanggal <=31) && $bulan == "mei")||($tahun <=20 && $bulan == "juni")){
                header("location:gemini.html");
            }elseif((($tanggal >=21 && $tanggal <=30) && $bulan == "juni")||($tahun <=22 && $bulan == "juli")){
                header("location:cancer.html");
            }elseif((($tanggal >=23 && $tanggal <=31) && $bulan == "juli")||($tahun <=22 && $bulan == "agustus")){
                header("location:leo.html");
            }elseif((($tanggal >=23 && $tanggal <=31) && $bulan == "agustus")||($tahun <=22 && $bulan == "september")){
                header("location:virgo.html");
            }elseif(($tanggal >=23 && $bulan == "september")||($tahun <=22 && $bulan == "oktober")){
                header("location:libra.html");
            }elseif(($tanggal >=23 && $bulan == "oktober")||($tahun <=21 && $bulan == "november")){
                header("location:scorpio.html");
            }elseif(($tanggal >=22 && $bulan == "november")||($tahun <=21 && $bulan == "desember")){
                header("location:sagatarius.html");
            }elseif(($tanggal >=22 && $bulan == "desember")||($tahun <=19 && $bulan == "januari")){
                header("location:capricorn.html");
            }elseif(($tanggal >=20 && $bulan == "januari")||($tahun <=18 && $bulan == "februari")){
                header("location:aquarius.html");
            }elseif(($tanggal >=19 && $bulan == "februari")||($tahun <=20 && $bulan == "maret")){
                header("location:pisces.html");
            }else{
                header("location:404.html");
            }
        }        
    ?>
    <script>
        AOS.init();
    </script>
</body>
</html>