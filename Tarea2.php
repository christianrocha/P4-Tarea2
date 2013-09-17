<html>
    <head></head>
    <body>
        <?php
        $dolares=10;
        $kasacambio=15.5;
        $conversion=0;
        for($dolares=1;$dolares<=10;$dolares++){  
            $conversion=$dolares*$kasacambio;            
                echo $dolares." Dolar = ". $conversion. " Pesos <br/>";
		}
        ?>
    </body>
</html>