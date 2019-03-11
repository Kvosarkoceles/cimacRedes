<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/archivos/subirArchivoRegistro/<?php echo $id_registro?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="id_registro" value="<?php echo $id_registro?>" id ="id_registro">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Agrega Archivos</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-4  my-1 ">
            <div class="form-group">
              <label for="titulo">Titulo:</label>
              <input type="text" name=titulo_documento id=titulo_documento class="form-control">
            </div>
            <div class="form-group">
              <label for="imagen">Archivo:</label>
              <input type="file" name=archivo_documento id=archivo_documento class="form-control" accept=".pdf, .xlsx, .docx, .doc" >
            </div>

            <div class="col-sm-12  my-1 ">
              <div class="form-group">
                <label for="titulo">Descripcion:</label>
                <input type="text" name=descripcion_documento id=descripcion_documento class="form-control">
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>
