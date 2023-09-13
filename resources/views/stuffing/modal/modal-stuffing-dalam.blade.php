<div class="modal fade text-left" id="stuffingDalamModal" role="dialog" aria-labelledby="myModalLabel110" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="myModalLabel110">Stuffing</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="form-body" id="place_cont">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="first-name-vertical">Choose R.O Number</label>
                <input type="text" id="nomor_ro" class="form-control" name="ro_no" readonly>
                <input type="text" id="id_truck" class="form-control" name="ro_id_gate" readonly>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="first-name-vertical">Truck No</label>
                <input type="text" id="truck" class="form-control" name="truck_no" readonly>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="first-name-vertical">Choose Vessel</label>
                <select class="choices form-select" id="Vessel" name="ves_id" required>
                    <option value="">Select Container</option>
                   @foreach($vessel as $ves)
                   <option value="{{$ves->ves_id}}">{{$ves->ves_name}}</option>
                   @endforeach
                </select>
              </div>
            </div>
            <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="first-name-vertical">Vessel Name</label>
                <input type="text" id="nama-kapal" class="form-control" readonly>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="first-name-vertical">Vessel Code</label>
                <input type="text" id="kode-kapal" class="form-control" readonly>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="first-name-vertical">Voy No</label>
                <input type="text" id="nomor-voyage" class="form-control" name="ctr_type" readonly>
              </div>
            </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="first-name-vertical">Choose Container Number</label>
                <select class="choices form-select" id="key" name="container_key" required>
                    <option value="" disabled selected>Select Container</option>
                   @foreach($items as $item)
                   <option value="{{$item->container_key}}">{{$item->container_no}}</option>
                   @endforeach
                </select>
                <input type="hidden" id="container_no" class="form-control" name="container_no">
              </div>
              {{ csrf_field()}}
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="first-name-vertical">Type</label>
                <input type="text" id="tipe" class="form-control" name="ctr_type" disabled>
                <input type="text" id="id" class="form-control" name="id" disabled>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="first-name-vertical">Invoice</label>
                <input type="text" id="invoice" class="form-control" name="invoice_no" disabled>
              </div>
            </div>

            <h4>Current Yard</h4>
            <div class="col-12" style="border:1px solid blue;">
              <div class="row">

                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Blok</label>
                    <input type="text" id="oldblock" class="form-control" name="yard_block" disabled>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Slot</label>
                    <input type="text" id="oldslot" class="form-control" name="yard_slot" disabled>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Row</label>
                    <input type="text" id="oldrow" class="form-control" name="yard_row" disabled>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Tier</label>
                    <input type="text" id="oldtier" class="form-control" name="yard_tier" disabled>
                  </div>
                </div>

              </div>
            </div>
            <h4>Stuffing Yard</h4>
            <div class="col-12" style="border:1px solid blue;">
              <div class="row">

                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Blok</label>
                    <select class="choices form-select" id="block" name="yard_block" required>
                      <option value="">-</option>
                      @foreach($yard_block as $block)
                      <option value="{{$block}}">{{$block}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Slot</label>
                    <select class="choices form-select" id="slot" name="yard_slot" required>
                      <option value="">-</option>
                      @foreach($yard_slot as $slot)
                      <option value="{{$slot}}">{{$slot}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Row</label>
                    <select class="choices form-select" id="row" name="yard_row" required>
                      <option value="">-</option>
                      @foreach($yard_row as $row)
                      <option value="{{$row}}">{{$row}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="first-name-vertical">Tier</label>
                    <select class="choices form-select" id="tier" name="yard_tier" required>
                      <option value="">-</option>
                      @foreach($yard_tier as $tier)
                      <option value="{{$tier}}">{{$tier}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="first-name-vertical">Planner Place</label>
                    <input type="text" id="user" class="form-control" value="{{ Auth::user()->name }}" name="user_id" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span></button>
            <button type="submit" class="btn btn-success ml-1 update_status"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Confirm</span></button>
          </div>
        </div>
      </div>
    </div>