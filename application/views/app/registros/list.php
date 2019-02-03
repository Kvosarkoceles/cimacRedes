 <!-- data table start -->

                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">


                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                          <tr>
                                            <th>#</th>
                                            <th>Fecha</th>
                                            <th>Nombre(s)</th>
                                            <th>Estado</th>
                                            <th>Tipo de violencia</th>
                                            <th>opciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($registros)):?>
                                                 <?php foreach($registros as $registro):?>
                                                    <tr>
                                                        <td><?php echo $registro->registroID;?></td>
                                                        <td><?php echo $registro->fechaIncidente;?></td>
                                                        <td><?php echo $registro->nombres." ".$registro->apellidoPaterno." ".$registro->apellidoMaterno;?></td>
                                                        <td><?php echo $registro->estado;?></td>
                                                        <td>
                                                          <ul class="list-inline">
                                                            <li><?php	if ($registro->tipoDeViolenciaPsicologica > 0){echo "Psicologica";}?></li>
                                                            <li><?php	if ($registro->tipodeViolenciaFisica > 0){echo "Fisica";}?></li>
                                                            <li><?php	if ($registro->tipoDeViolenciaPatrimonial > 0){echo "Patrimonial";}?></li>
                                                            <li><?php	if ($registro->tipodeViolenciaEconomica > 0){echo "Economica";}?></li>
                                                            <li><?php	if ($registro->tipoDeViolenciaSexual > 0){echo "Sexual";}?></li>
                                                            <li><?php	if ($registro->tipoDeViolenciaCibernetica > 0){echo "Cibernetica";}?></li>
                                                          </ul>
                                                        </td>
                                                        <td>
                                                          <ul class="d-flex justify-content-center">

                                                              <li class="mr-3"><a href="<?php echo base_url()?>app/registros/info/<?php echo $registro->registroID;?>" class="text-primary"><i class="fa fa-eye"></i></a></li>
                                                              <li class="mr-3"><a href="<?php echo base_url()?>app/registros/edit/<?php echo $registro->registroID;?>" class="text-success"><i class="fa fa-edit"></i></a></li>
                                                              <li><a href="<?php echo base_url()?>app/registros/delete/<?php echo $registro->registroID;?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                                          </ul>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;?>
                                            <?php endif;?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- data table end -->
