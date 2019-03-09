<!-- data table start -->

                   <div class="col-12 mt-5">
                       <div class="card">
                           <div class="card-body">
                               <div class="data-tables">
                                   <table id="dataTable" class="text-center">
                                       <thead class="bg-light text-capitalize">
                                          <tr>
                                               <th>#</th>
                                               <th>Nombres</th>
                                              <th>Estado</th>
                                              <th>Tipo de medio</th>
                                              <th>Tipo de cargo</th>
                                              <th>opciones</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <?php if(!empty($periodistas)):?>
                                                <?php foreach($periodistas as $periodista):?>
                                                   <tr>
                                                       <td><?php echo $periodista->id;?></td>
                                                       <td><?php echo $periodista->nombres." ".$periodista->apellidoPaterno." ".$periodista->apellidoMaterno;?></td>
                                                       <td><?php echo $periodista->estado;?></td>
                                                       <td><?php echo $periodista->tipodemedio;?></td>
                                                       <td><?php echo $periodista->cargoenelmedio;?></td>
                                                       <td>
                                                         <ul class="d-flex justify-content-center">

                                                             <li class="mr-3"><a href="<?php echo base_url()?>periodista.html/<?php echo $periodista->id;?>" class="text-primary"><i class="fa fa-eye"></i></a></li>
                                                             <li class="mr-3"><a href="<?php echo base_url()?>edita_periodista.html/<?php echo $periodista->id;?>" class="text-success"><i class="fa fa-edit"></i></a></li>
                                                             <li class="mr-3"><a href="<?php echo base_url();?>delete_periodista.html/<?php echo $periodista->id;?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                                             <li class="mr-3"><a href="<?php echo base_url();?>agrega_registro.html/<?php echo $periodista->id;?>" class="text-primary"><i class="fa fa-plus"></i></a></li>
                                                         </ul>

                                                       </td>
                                                   </tr>
                                               <?php endforeach;?>
                                           <?php endif;?>



                                       </tbody>
                                   </table>
                               </div>
                           </div>
                           <div class="card">
                             <div class="card-body">
                               <div class="container">
                                 <div class="row justify-content-end">
                                    <div class="col-md-3">
                                      <a href="<?php echo base_url();?>agrega_periodista.html" class="btn btn-outline-secondary mb-3"><span class="fa fa-plus"></span> Agregar Periodista</a>
                                    </div>
                                 </div>
                               </div>
                             </div>

                           </div>

                       </div>

                   </div>
                   <!-- data table end -->
