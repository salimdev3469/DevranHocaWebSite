<!DOCTYPE html>
<html>
<head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Anton+SC&display=swap');
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

h1{
  text-align:center;
  font-size:2.5em;
}
</style>
</head>
<body>

<h1>Cafe Marie Admin Yönetim Paneli <br> Kullanıcı Verileri</h1>
<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>




<!--PHP KODU BAŞLANGIÇ*********************************************************-->
<?php  //bilgileri panele eklemek istedigimiz için PHP bölümünü tablo section'inin içine konumlandirdik

session_start();//Kullanici girisi ve veri güvenligi için eş zamanlı oturum başlatıldı

if($_SESSION["user"]=="")//panelgiris.php dosyasinda tanimlanan degisken eger bos ise demek ki session'da bir kullanici bulunmuyor, bunu saglayan if kosulunu yazdik
{
  echo "<script>window.location.href='cikis.php'</script>";        //header("location:cikis.php");kullanici yoksa çıkış ekranına yönlendir
}
else{//Kullanici varsa normal işleyiş komutlarini sürdür
  
  echo "Yönetici İsmi: ".$_SESSION['user']."<br> İŞLEMDEN SONRA ÇIKIŞ YAPMAYI UNUTMAYINIZ!";
  echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";
  
  
  include("baglanti.php");
  $sec="Select * From iletisim"; //veritabanindaki tüm sütunları verileri seç
  $sonuc=$baglan->query($sec); //seçme işlemine ait sorguyu sonuç değişkenine atıyoruz
  
  if($sonuc->num_rows>0) //veritabanında bilgiler doluysa yani varsa çek, yoksa else
  {
    while($cek=$sonuc->fetch_assoc()){//fetchassoc fonksiyonu ile tablodaki tüm verileri alip cek dizisi içine atiyoruz
       echo "
       <tr>
      <td>".$cek['adsoyad']."</td>
      <td>".$cek['telefon']."</td>
      <td>".$cek['email']."</td>
      <td>".$cek['konu']."</td>
      <td>".$cek['mesaj']."</td>
      </tr>
       ";
    }
  }
  else{
    echo "Veritabanında hiçbir veri bulunmamaktadır.";
  }
}

?>
<!--PHP KODU BİTİŞ**********************************************************-->




  
</table>
</body>
</html>



