<?php
$date = date("Y-m-d");
$name= $_POST['name'];
$adress= $_POST['adress'];
$message= $_POST['message'];
if ($message == NULL) $message="-";
$email= $_POST['email'];
$semen= (int)$_POST['semen']*75000;
if ($semen == NULL) $semen=0;
$paku= (int)$_POST['paku']*10000;
if ($paku == NULL) $paku=0;
$keramik= (int)$_POST['keramik']*5000;
if ($keramik == NULL) $keramik=0;
$decolith= (int)$_POST['decolith']*50000;
if ($decolith == NULL) $decolith=0;
$kuas= (int)$_POST['kuas']*15000;
if ($kuas == NULL) $kuas=0;
$palu= (int)$_POST['palu']*10000;
if ($palu == NULL) $palu=0;
$pasir= (int)$_POST['pasir']*500000;
if ($pasir == NULL) $pasir=0;
$gagang= (int)$_POST['gagang']*100000;
if ($gagang == NULL) $gagang=0;
$lukis= (int)$_POST['lukis']*5000;
if ($lukis == NULL) $lukis=0;
$kerikil= (int)$_POST['kerikil']*250000;
if ($kerikil == NULL) $kerikil=0;
$dulux= (int)$_POST['dulux']*70000;
if ($dulux == NULL) $dulux=0;
$tandon= (int)$_POST['tandon']*500000;
if ($tandon == NULL) $tandon=0;
$total = $semen+$paku+$keramik+$decolith+$kuas+$palu+$pasir+$gagang+$lukis+$kerikil+$dulux+$tandon;
$fp = fopen("struk.txt", "a+");
fputs($fp, "$date|$name|$email|$adress|$semen|$paku|$keramik|$decolith|$kuas|$palu|$pasir|$gagang|$lukis|$kerikil|$dulux|$tandon|$total|$message\n");
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Sucess Page</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body>
  <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
    <div class="flex justify-center items-center h-full">
      <div class="text-dark">
        <h2 class="font-semibold text-4xl mb-4">Successfully</h2>
        <h4 class="font-semibold text-xl mb-6">Ordered</h4>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./index.html" role="button">Back To Home</a>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./lihat.php" role="button">Purchase History</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>