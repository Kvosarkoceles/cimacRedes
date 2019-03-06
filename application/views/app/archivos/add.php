<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/archivos/subirImagen/<?php echo $periodista->id?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_periodista" value="<?php echo $periodista->id?>" id ="id_periodista">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Agrega Imagen</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-4  my-1 ">
            <div class="form-group">
              <label for="titulo">Titulo:</label>
              <input type="text" name=titulo_imagen id=titulo_imagen class="form-control">
            </div>
            <div class="form-group">
              <label for="imagen">Imagen:</label>
              <input type="file" name=archivo_imagen id=archivo_imagen class="form-control">
            </div>

            <div class="col-sm-12  my-1 ">
              <div class="form-group">
                <label for="titulo">Descripcion:</label>
                <input type="text" name=descripcion_imagen id=descripcion_imagen class="form-control">
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>
