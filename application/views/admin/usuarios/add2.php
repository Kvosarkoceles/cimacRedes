
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarias
        <small>Nuevas</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12 col-md-offset-4">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

                             </div>
                        <?php endif;?>
                            <form action="<?php echo base_url();?>administrador/usuarios/store" method="POST">
                            <div class="form-group <?php echo !empty(form_error('nombres'))? 'has-error':'';?>">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres">
                                <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error('username'))? 'has-error':'';?>">
                                <label for="username">Usuario:</label>
                                <input type="text" class="form-control" id="username" name="username">
                                <?php echo form_error("username","<span class='text-danger'>","</span>"); ?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error('password'))? 'has-error':'';?>">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <?php echo form_error("password","<span class='text-danger'>","</span>"); ?>
                            </div>

                            <div class="form-group">
                                <label for="rol">Roles:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
