<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <title>Instalação de impressoras</title>
    
    <style>
        body{
           /* background-color: #dbdbdb;
            background-image: url('img/Mapa.jpg');
            background-repeat: no-repeat;
            bottom: 0;
            left: 0;
            overflow: auto; 
            padding: 3em;
            position: absolute;
            right: 0;
            top: 0; */
        }
    </style>

</head>
<body>
    <div class="container">
            <br><h2 style="text-align:center;">IMPRESSORAS DE GOIANÉSIA</h2>
    </div>
    <div class="container">
        <div class="row">
            <div id="plantaFundo" class="col-2"></div>
                <div id="plantaFundo" class="col-8">
                <form action="" method="" id="">
                <table class="table table-dark table-hover" style="text-align:center;">
                    <tr class="table-active">
                    <th>SETOR</th>
                    <th>IMPRESSORA</th>
                    </tr>
                    <tr>
                        <td>RECURSOS HUMANOS</td>
                        <td><a class="btn btn-outline-success btn-sm" href="index.php?impgoi001=1">IMPRESSORA_GOIANESIA</a></td>
                    </tr>
                    <tr>
                        <td>MANUTENÇÂO</td>
                        <td><a class="btn btn-outline-success btn-sm" href="index.php?impgoi002=2">IMPGOI002</a></td>
                    </tr>
                    <tr>
                        <td>PCP</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi003=3">IMPGOI003</a></td>
                    </tr>
                    <tr>
                        <td>QUALIDADE</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi004=4">IMPGOI004</a></td>
                    </tr>
                    <tr>
                        <td>ALMOXERIFADO</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi005=5">IMPGOI005</a></td>
                    </tr>
                    <tr>
                        <td>ESTOQUE XX</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi006=6">IMPGOI006</a></td>
                    </tr> 
                    <tr>
                        <td>ENVIO E RECEBIMENTO</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi007=7">IMPGOI007</a></td>
                    </tr>
                    <tr>
                        <td>SUPERVISÂO PCP</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi008=8">IMPGOI008</a></td>  
                    </tr>
                    <tr>
                        <td>AMBULATORIO</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi009=9">IMPGOI009</a></td>
                    </tr>
                    <tr>
                        <td>REMESSA</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi010=10">IMPGOI010</a></td>
                    </tr>
                    <tr>
                        <td>RH - COLORIDA</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi011=11">IMPGOI011</a></td>
                    </tr>
                    <tr>
                        <td>CENTRAL DE FACÇÃO</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi012=12">IMPGOI012</a></td>
                    </tr>
                    <tr>
                        <td>PREPARAÇÃO</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi013=13">IMPGOI013</a></td>
                    </tr>
                    <tr>
                        <td>GERENCIA - COLORIDA</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi015=15">IMPGOI015</a></td>
                    </tr>
                    <tr>
                        <td>ENVIO DE EMBALAGEMIA</td>
                        <td><a class="btn btn-outline-success btn-sm " href="index.php?impgoi016=16">IMPGOI016</a></td>
                    </tr>
                </table>
                </div>
            </form>
        </div>
    </div>

    
    <?php
        require_once 'Impressora.php';
        if(isset($_GET['impgoi001']) == 1){
         instalImpgoi001();
        }elseif(isset($_GET['impgoi002']) == 2) {
            instalImpgoi002();
        }elseif(isset($_GET['impgoi003']) == 3) {
            instalImpgoi003();
        }elseif(isset($_GET['impgoi004']) == 4) {
            instalImpgoi004();
        }elseif(isset($_GET['impgoi005']) == 5) {
            instalImpgoi05();
        }elseif(isset($_GET['impgoi006']) == 6) {
            instalImpgoi006();
        }elseif(isset($_GET['impgoi007']) == 7) {
            instalImpgoi007();
        }elseif(isset($_GET['impgoi008']) == 8) {
            instalImpgoi008();
        }elseif(isset($_GET['impgoi009']) == 9) {
            instalImpgoi009();
        }elseif(isset($_GET['impgoi010']) == 10) {
            instalImpgoi010();
        }elseif(isset($_GET['impgoi011']) == 11) {
            instalImpgoi011();
        }elseif(isset($_GET['impgoi012']) == 12) {
            instalImpgoi012();
        }elseif(isset($_GET['impgoi013']) == 13) {
            instalImpgoi013();
        }elseif(isset($_GET['impgoi015']) == 15) {
            instalImpgoi015();
        }elseif(isset($_GET['impgoi016']) == 16) {
            instalImpgoi016();
        }
    ?>

</body>
</html>
    