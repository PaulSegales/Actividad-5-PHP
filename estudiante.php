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
            Ingrese un Estudiante
        </h6>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="insertar_estudiante.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <!-- <label for="recipient-name" class="col-form-label">Código:</label> 
                  <input type="text"  name="codigo" placeholder="Nombres"> -->
                    <label for="recipient-name" class="col-form-label">Código:</label>
                    <input type="text" name="codigo" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" name="nom_std" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Carrera:</label>
                    <input type="text" name="carrera" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" id="recipient-name">
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
                    <th><a href="actualizar_estudiante.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete_estudiante.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></tr>
                <?php 
                }
                ?>

<!-- ==================================================================== -->
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

<!-- ==================================================================== -->


<!-- FIN del contenido principal -->
<?php require_once "view/parte_inferior.php"?>