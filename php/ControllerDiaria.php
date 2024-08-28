<?php
    namespace Projeto\estacionamento\PHP;
    include_once 'functionCalcular.php';

    Use Projeto\estacionamento\PHP\controllerDiaria;
    Use Projeto\estacionamento\PHP\functionCalcular;

?>

<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>

            <?php
                 $total = "";//instanciando
            ?>

            <h1>ENTRADA / SAÍDA (DIARIA!)<h1>
            <form method="POST">

                <label>Informe a Data de ENTRADA:</label>
                <input type="date" id="dtPagamento" name="dtPagamento"/><br><br>

                <label>Informe a Data de SAÍDA:</label>
                <input type="date" id="dtSaida" name="dtSaida"/><br><br>

                
                <label>Horas:</label>
                <input type="number" id="horas" name="horas"/><br><br>

                <button>Calcular Total
                    <?php
                        $horas = $_POST['horas'];
                    ?>
                </button><br><br>
                
             
                    <?php
                        if($horas == ""){
                            echo "Preencha os Campos!!";
                        }else{
                            echo "TOTAL: ".calcularH($horas, $total);    
                        }
                    ?>
                

            </form>
        </body>
</HTML>
 