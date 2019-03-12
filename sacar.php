<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head></head>

    <body>
        <h1>Saque</h1>
        <?php
        if(empty($_POST)){
            $id = $_GET["id"]
            $cc = $_SESSION["cc"][$id];
        }
        ?>
        <form method="POST" action"sacar.php">
            Correntista:<?php echo $cc->get_home();?>
            (<?php echo $cc->get_nro();?>)
            <br />
            Saldo: <?php echo $cc->get_saldo();?>
            <input type="nunber" name="valor"
                placeholder="valor od saque..." />
            <input type="hidden" name="id" value="<?php echo $id;?>"
                value="<?php echo $id;?>" />
            <button>SACAR</button>
        </form>
        <?php
        }else{
            $id = $_POST["id"];
            $valor = $_POST["valor"];
            $_SESSION["cc"] [$id]->sacar($valor);
            header("location:listar_cc.php")
        }
        ?>
    </body>
</html>