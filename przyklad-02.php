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
        // while
        
        echo "WHILE LOOP <br><br>";
        $tablicaOwoce = array(
            "Jabłko",
            "Gruszka",
            "Wiśnie",
            "Czereśnie"
        );
        
        $tablicaCelebryci = array(
            "Radosław Majdan",
            "Borys Szyc",
            "Dorota Rabczewska",
            "Justin Bieber",
            "Kuba Wojewódzki"
        );
        
        $tablicaSamochody = array(
            array("Syrena","Polonez","Husarya"),
            array("Ford","Dodge","GMC","Corvette"),
            array("Citroen","Renault","Peugeot"),
            array("Fiat","Ferrari","Lamborgini")
        );
        
        $dlugoscTablicyOwoce = count($tablicaOwoce);
        $i = 0;
        
        // while loop
        while($i < $dlugoscTablicyOwoce) {
            echo "Owoc: ", $tablicaOwoce[$i]."<br>";
            $i++;
        }
        
        // samochody
        echo "<hr>Samochody<hr>";
        $dlugoscTablicyTabSamochody = count($tablicaSamochody);
        $i = 0;
        
        while($i < $dlugoscTablicyTabSamochody) {
            $j = 0;
            $dlugoscElementowTabWew = count($tablicaSamochody[$i]);
            while($j < $dlugoscElementowTabWew) {
                echo "Samochód: ",$tablicaSamochody[$i][$j],"<br>";
                $j++;        
            }
            $i++;
        }
        
        echo "<hr>DO ... WHILE<br>";
        
        $t = 0;
        $dlugoscTablicyCelebryci = count($tablicaCelebryci);
        
        do {
            echo "Celebryta: ",$tablicaCelebryci[$t],"<br>";
            $t++;
        } while($t < 0)
        ?>
    </body>
</html>
