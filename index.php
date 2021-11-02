<?php require_once "view/parte_superior.php"?>

<!-- INICIO del contenido principal -->
<div class="container">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>carrera</th>
            <th>teléfono</th>
            <th><th>

            </tr>
        </thead>

        <tbody>
            <?php
                while($row=mysqli_fetch_assoc($query)){
            ?>
                    <tr>
                    <th><?php  echo $row['codigo']?></th>
                    <th><?php  echo $row['nom_std']?></th>
                    <th><?php  echo $row['carrera']?></th>
                    <th><?php  echo $row['telefono']?></th>              
                    <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a>
                    </tr>
                <?php 
                }
                ?>
        </tbody>

        <tfoot>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>teléfono</th>
                <th><th>
                <!-- <th><th>  -->
            </tr>
        </tfoot>
    </table>
</div>


<!-- FIN del contenido principal -->
<?php require_once "view/parte_inferior.php"?>