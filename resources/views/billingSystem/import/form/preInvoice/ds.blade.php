<div class="col-12">
                <h4 class="card-title">
                  Invoice DS 
                </h4>
              </div>
              @foreach($groupedContainers as $ukuran => $containers)
              <div class="col-12">
                <h4 class="card-title">
                  Pranota Summary 
                </h4>
                <p>Dengan Data Container <b>Container Size {{$ukuran}}</b></p>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <table class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns display ">
                      <thead>
                        <tr>
                          <th>Keterangan</th>
                          <th>Jumlah</th>
                          <th>Hari</th>
                          <th>Tarif Satuan</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($service->id == 1 || $service->id == 5)
                        <tr>
                            <td>Pass Truck Masuk</td>
                            <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                            <td>0</td>
                            <td>{{ number_format($tarif[$ukuran]->pass_truck_masuk, 0, ',', '.') }}</td>
                            <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->pass_truck_masuk, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Lift On/Off Empty</td>
                            <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                            <td>0</td>
                            <td>{{ number_format($tarif[$ukuran]->lolo_empty, 0, ',', '.') }}</td>
                            <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->lolo_empty, 0, ',', '.') }}</td>
                        </tr>
                        @elseif($service->id == 3 || $service->id == 4)
                        <tr>
                            <td>Paket Stripping</td>
                            <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                            <td>0</td>
                            <td>{{ number_format($tarif[$ukuran]->paket_stripping, 0, ',', '.') }}</td>
                            <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->paket_stripping, 0, ',', '.') }}</td>
                        </tr>
                            @if($service->id == 3)
                            <tr>
                                <td>Pemindahan Petikemas</td>
                                <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                                <td>0</td>
                                <td>{{ number_format($tarif[$ukuran]->pemindahan_petikemas, 0, ',', '.') }}</td>
                                <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->pemindahan_petikemas, 0, ',', '.') }}</td>
                            </tr>
                            @endif
                        <tr>
                            <td>Penumpukan Massa 1</td>
                            <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                            <td>{{$massa1}} Hari</td>
                            <td>{{ number_format($tarif[$ukuran]->m1, 0, ',', '.') }}</td>
                            <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->m1 *$massa1, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Penumpukan Massa 2</td>
                            <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                            <td>{{$massa2}} Hari</td>
                            <td>{{ number_format($tarif[$ukuran]->m2, 0, ',', '.') }}</td>
                            <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->m2 *$massa2, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Penumpukan Massa 3</td>
                            <td>{{$jumlahContainerPerUkuran[$ukuran]}}</td>
                            <td>{{$massa3}} Hari</td>
                            <td>{{ number_format($tarif[$ukuran]->m3, 0, ',', '.') }}</td>
                            <td>{{ number_format($jumlahContainerPerUkuran[$ukuran] * $tarif[$ukuran]->m3 *$massa3, 0, ',', '.') }}</td>
                        </tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="col-12">
                <div class="card" style="border-radius:15px !important;background-color:#435ebe !important;">
                  <div class="card-body">
                    <div class="row text-white p-3">
                    <div class="col-6">
                        <h1 class="lead text-white">
                            Total Summary 
                        </h1>
                        <h4 class="text-white">Total Amount :</h4>
                        <h4 class="text-white">Admin :</h4>
                        <h4 class="text-white">Tax 11%      :</h4>
                        <h4 class="text-white">Grand Total  :</h4>
                    </div>

                      <div class="col-6 mt-4" style="text-align:right;">
                        <h4 class="text-white"> Rp. {{number_format($AmountDS, 0, ',', '.')}}</h4>
                        <input type="hidden" name="total" value="{{ $AmountDS + $adminDS }}">
                        <h4 class="text-white"> Rp. {{number_format($adminDS, 0, ',', '.')}}</h4>
                        <input type="hidden" name="pajak" value="{{$ppnDS}}">
                        <h4 class="text-white">Rp. {{number_format($ppnDS, 0, ',', '.')}}</h4>
                        <input type="hidden" name="grand_total" value="{{$grandDS}}">
                        <h4 class="color:#ff5265;"> Rp. {{number_format($grandDS, 0, ',', '.')}}</h4>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>