
    <?php
    $LogaritmaUst = $_POST["USTLOG"];
    $Logaritmataban = $_POST["ALTLOG"];
    if ($LogaritmaUst and $Logaritmataban > 1) {
        $CalculateLog = log($LogaritmaUst, $Logaritmataban);
        echo "Logaritma " . $Logaritmataban." tabaninda " . $LogaritmaUst . " isleminin sonucu = ". $CalculateLog . "<br /><br /> <a href='index.php' style='text-decoration:none; color:black;'>Geri Donmek Icin Buraya Tikla </a>";
    }
    
    ?>