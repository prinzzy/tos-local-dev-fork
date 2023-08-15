


<?php $__env->startSection('content'); ?>

<div class="page-heading">
  <h3><?= $title ?></h3>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>

<div class="page-content">

  <section class="row">
    <form action="/coparn/store" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Shipment Information</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Vessel Name</label>
                    <select name="vessel" id="vessel" class="js-example-basic-multiple form-control" style="height: 150%;">
                      <option value="" disabled selected>Pilih Salah Satu</option>
                      <?php foreach ($vessel as $data) { ?>
                        <option value="<?= $data->ves_name ?>" data-id="<?= $data->ves_id ?>"><?= $data->ves_name ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Voyage</label>
                    <input type="text" id="voyage" name="voyage" class="form-control" placeholder="Voyage..">
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label>Vessel Code</label>
                    <input type="text" id="vesselcode" name="vesselcode" class="form-control" placeholder="Vessel Code..">
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label>Closing Time</label>
                    <input name="closingtime" id="closing" required type="date" class="form-control flatpickr-range mb-3" placeholder="09/05/2023" id="closingtime">
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label>Arival Date</label>
                    <input name="arrival" id="arrival" required type="date" class="form-control flatpickr-range mb-3" placeholder="09/05/2023" id="arrival">
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label>Departure Date</label>
                    <input name="departure" id="departure" required type="date" class="form-control flatpickr-range mb-3" placeholder="09/05/2023" id="departure">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Upload Copart Document Online</h3>
              <p>Please Upload your file by drag n drop or click the area</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <input id="storecoparn" type="file" name="storecoparn" class="dropify" data-height="270" data-max-file-size="3M" data-allowed-file-extensions="xls" />
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-2">
                  <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
  </section>

</div>

<?php $__env->stopSection(); ?>

<script>
  console.log("masuk");
</script>
<?php echo $__env->make('partial.invoice.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fdw File Storage 1\CTOS\dev\frontend\tos-dev-local\resources\views/coparn/create.blade.php ENDPATH**/ ?>