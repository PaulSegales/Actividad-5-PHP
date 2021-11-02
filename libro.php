<?php require_once "view/parte_superior.php"?>

<!-- INICIO del contenido principal -->


<div>
    <button type="button" class="btn btn-success col-1 offset-md-2" data-bs-toggle="modal" data-bs-target="#insertarModal" >Insertar</button>
    <br><br>

</div>

<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Ingrese un nuevo Libro
        </h6>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="insertar_libro.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Stock:</label>
                    <input type="text" name="stock" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Autor:</label>
                    <input type="text" name="autor" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Editorial:</label>
                    <input type="text" name="editorial" class="form-control" id="recipient-name">
                </div>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
       </form>

    </div>
  </div>
</div>

<!-- ===================================================== -->

<div class="container">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Stock</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th><th>

            </tr>
        </thead>

        <tbody>
            <?php
                while($row1=mysqli_fetch_assoc($query1)){
            ?>
                    <tr>
                    <th><?php  echo $row1['cod_libro']?></th>
                    <th><?php  echo $row1['titulo']?></th>
                    <th><?php  echo $row1['stock']?></th>
                    <th><?php  echo $row1['autor']?></th>
                    <th><?php  echo $row1['editorial']?></th>           
                    <th><a href="actualizar_libro.php?id=<?php echo $row1['cod_libro'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete_libro.php?id=<?php echo $row1['cod_libro'] ?>" class="btn btn-danger">Eliminar</a></tr>
                <?php 
                }
                ?>

        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Stock</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th><th>
                <!-- <th><th>  -->
            </tr>
        </tfoot>
    </table>
</div>



<!-- FIN del contenido principal -->
<?php require_once "view/parte_inferior.php"?>