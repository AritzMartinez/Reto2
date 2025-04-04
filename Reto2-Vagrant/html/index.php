

<script src="../javascript/jquery-3.4.1.min.js"></script>
<script src="../javascript/index.js"></script>
<script src="../javascript/login.js"></script>
<link rel="stylesheet" href="../CSS/index.css">
<link rel="stylesheet" href="../CSS/global.css">
<?php


require "header.php";
require_once "../Php-actions/BD/conexionBD.php";
require "../Php-actions/BD/anuncio.php";
$dbh = connect();

session_start();
$_SESSION['registro'];


  ?>
<!-- Div gris que aparece al darle click en un anuncio -->
<div class="cortinaGris"></div>

    <div class="contenedor">

        <!-- Cargamos todos los anuncios que hay en la base de datos -->
        <?php
            $anuncios = selectAnuncioInicial1($dbh);
            foreach ($anuncios as $row) {
                echo "<div class='Anuncio'>
                        <div class='contenedorinformacion'>
                            <h2 class='tituloAnuncio'>" . $row["titulo"] . "</h2>
                            <div class='oculto'>
                              <div class='descripcion'>"  . "<p> Descripcion: </p>" . $row["descripcion"] . "</div>
                              <div class='nomCategoria'>" . "<p> Categoria: </p>" . $row["nomCategoria"] . "</div>
                              <div class='nomEmpresa'>" . "<p> Empresa: </p>" . $row["nomEmpresa"] . "</div>
                              <div class='nomSubcategoria'>" . "<p> Subcategoria </p>" . $row["nomSubcategoria"] . "</div>
                            </div>
        
                        </div>
                        <div class='imgAnuncio'><img src='../../imagenes/" . $row["imagen"] . "'></div>
                    </div>";
            }
        ?>
    </div>

<?php
require_once "footer.php";
?>




