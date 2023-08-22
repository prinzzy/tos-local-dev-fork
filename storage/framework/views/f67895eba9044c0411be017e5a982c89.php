 <div class="col-12 border">
    <div class="card">
        <div class="card-header">
        <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#lain">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg> Download Dokumen Beacukai
                          </button>      
        </div>
        <div class="card-body">
                        <table class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" id="tableLain">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No SPPB</th>
                            <th>Tgl SPPB</th>
                            <th>Importir</th>
                            <th>NPWP</th>
                            <th>Nama Angkut</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $sppb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pib): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>                            
                            <td><?php echo e($pib->NO_SPPB); ?></td>
                            <td><?php echo e($pib->TGL_SPPB); ?></td>
                            <td><?php echo e($pib->NAMA_IMP); ?></td>
                            <td><?php echo e($pib->NPWP_IMP); ?></td>
                            <td><?php echo e($pib->NM_ANGKUT); ?></td>
                            <td></td>                         
                        </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                            </div>
    </div>                        
</div><?php /**PATH C:\xampp\htdocs\tos\resources\views/invoice/bc/table/dok-lain.blade.php ENDPATH**/ ?>