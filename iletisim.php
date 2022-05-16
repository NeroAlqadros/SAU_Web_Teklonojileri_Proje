<?php
 echo "Adı: ".$_POST['name'];
 echo "<br><br>Soyadı: ".$_POST['surname'];
 echo "<br><br>Telefon No: ".$_POST['phone'];
 echo "<br><br>Adres: ".$_POST['adress'];
 echo "<br><br>Email: ".$_POST['email'];
 echo "<br><br>Eğitim Düzeyi: ".$_POST['education'];
 echo "<br><br>Cinsiyet: ".$_POST['gender'];
 echo "<br><br>Kullanıcı Mesajı :".$_POST['message'];
 echo "<br><br>Ülke: ".$_POST['country'];
 echo "<br><br>Şehir: ".$_POST['city'];
 echo "<br><br>İlçe: ".$_POST['district'];
 if(isset($_POST['hobby'])) {
    $hobbies = $_POST['hobby'];
 
    echo '<br> <br>Seçtiğiniz hobiler:<br>';
  
    if (is_array($hobbies) || is_object($hobbies)){
      
        foreach ((array) $hobbies as $hobby) {
            echo ' -->   ' . $hobby . ' <br/>';

            }
    }
}
 else {
    echo '<br/> Hiç hobi seçmediniz.';
}
 ?>