<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // For loop
        echo "FOR LOOP";
        $tablicaOwoce = array(
            "Jabłko",
            "Gruszka",
            "Wiśnie",
            "Czereśnie"
        );
        
        $tablicaSamochody = array(
            array("Syrena","Polonez","Husarya"),
            array("Ford","Dodge","GMC","Corvette"),
            array("Citroen","Renault","Peugeot"),
            array("Fiat","Ferrari","Lamborgini")
        );
        
        var_dump($tablicaSamochody);
        
        $dlugoscTablicyOwoce = count($tablicaOwoce);
        echo "Liczba elementów w tablicy: ",$dlugoscTablicyOwoce, "<br>";
        echo "Elementy tablicy owoce: <br>";
        
        for($i = 0; $i < $dlugoscTablicyOwoce; $i++) {
            echo $tablicaOwoce[$i],"<br>"; // wyswietl zmienną i
        }
        
        echo "<hr>";
        
        $dlugosTablicaSamcohody = count($tablicaSamochody);
        
        for($i = 0; $i < $dlugosTablicaSamcohody; $i++) {
            $dlugoscElementowTablica = count($tablicaSamochody[$i]);
            
            for($j = 0; $j < $dlugoscElementowTablica; $j++) {
                echo "Samochód: ", $tablicaSamochody[$i][$j], "<br>";
            }
        }
        
        // Foreach Loop
        echo "<hr>FOREACH LOOP";
        
        foreach ($tablicaOwoce as $elementOwoc) {
            echo "Owoc: ", $elementOwoc, "<br>";
        }
        
        echo "<hr>";
        
        foreach ($tablicaSamochody as $kraje) {
            foreach ($kraje as $samochod) {
                echo "Samochód: ", $samochod, "<br>";
            }
        }
        
        echo "<hr>";
        
        $tablicaDaneOsobowe = array(
            "imie"                  => "Przemyslaw",
            "nazwisko"              => "Włodkowski",
            "wiek"                  => 34,
            "kraj_zamieszkania"     => "Polska",
            "miasto_zamieszkania"   => "Warszawa",
            "plec"                  => "m"
        );
        
        $tabiceWieleOsob = array(
            $tablicaDaneOsobowe,
            $tablicaDaneOsobowe,
            $tablicaDaneOsobowe
        );
        
        foreach($tablicaDaneOsobowe as $keyDaneOsoba => $daneOsoba) {
            echo "Dane osobowe: ", $keyDaneOsoba," ", $daneOsoba,"<br>";
        }
        
        /*
         array( // autonumerowana
            array() // asocjacyjna
            array() // asocjacyjna
            array() // asocjacyjna
        )
        */
        
        var_dump($tabiceWieleOsob);
        
        echo "<hr>";
        
        foreach($tabiceWieleOsob as $klucz => $Osoba) {
            
            if(($klucz + 1)%2 == 0) {
                echo "<br>Osoba: ", $klucz + 1, "<br>";
            
                foreach ($Osoba as $dane=>$wartosc) {
                    echo $dane,": ", $wartosc, "<br>";
                }
                continue;
            }
            echo "<br>Test", $klucz + 1, "<br>";
        }
        ?>
    </body>
</html>