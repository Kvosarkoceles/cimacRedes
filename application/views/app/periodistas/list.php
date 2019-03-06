
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
                   <td><?php echo $periodista->cargoenelmedio;?></td>
                   <td>
                     <ul class="d-flex justify-content-center">
                       <li class="mr-3"><a href="<?php echo base_url()?>app/periodistas/info/<?php echo $periodista->id;?>" class="text-primary"><i class="fa fa-eye"></i></a></li>
                       <li class="mr-3"><a href="<?php echo base_url()?>app/periodistas/edit/<?php echo $periodista->id;?>" class="text-success"><i class="fa fa-edit"></i></a></li>
                       <li class="mr-3"><a href="<?php echo base_url();?>app/periodistas/delete/<?php echo $periodista->id;?>" class="text-danger"><i class="ti-trash"></i></a></li>
                       <li class="mr-3"><a href="<?php echo base_url();?>app/registros/add/<?php echo $periodista->id;?>" class="text-primary"><i class="fa fa-plus"></i></a></li>
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
   <div class="card">
     <div class="card-body">
       <div class="container">
         <div class="row justify-content-end">
            <div class="col-2">
            <a href="<?php echo base_url();?>app/periodistas/add" class="btn btn-outline-secondary mb-6"><span class="fa fa-plus"></span> Agregar</a>
            </div>
         </div>
       </div>
     </div>

   </div>
 </div>
