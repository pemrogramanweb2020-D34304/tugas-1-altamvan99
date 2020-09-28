<?php       
$bilangan1=$_GET['bilangan1'];
$bilangan2=$_GET['bilangan2'];
$operasi=$_GET['operasi'];

if($operasi == '+'){
     $hasil = $bilangan1 + $bilangan2;
}else if($operasi =='-'){
     $hasil = $bilangan1 - $bilangan2;
}else if($operasi =='/'){
     $hasil = $bilangan1 / $bilangan2;
}else if($operasi =='*'){
     $hasil = $bilangan1 * $bilangan2;
}
else{
    echo "tidak ditemukan";
}
echo "bilangan 1 adalah $bilangan1 <br>";
echo "bilangan 2 adalah $bilangan2 <br>";
echo "hasil dari $bilangan1 $operasi $bilangan2 adalah $hasil"



?>