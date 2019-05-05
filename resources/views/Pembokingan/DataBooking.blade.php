
        <!-- Tabel Kategori -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            data booking</div>
            <a class="btn btn-success" href="{{url('TambahBooking')}}">
                              Add Data Booking
                      </a>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID BOoking</th>
                    <th>Tgl BOoking</th>
                    <th>Waktu BOoking</th>
                    <th>uang muka</th>
                    <th>Biaya BOoking</th>
                    <th>Status</th>
                    <th>Member</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($bkg as $data)
                  <tr>
                    <td>{{ $data -> id_booking }}</td>
                    
                    <td>{{ $data -> tgl_booking }}</td>
                    <td>{{ $data -> waktu_booking }}</td>
                    <td>{{ $data -> uang_muka }}</td>
                    <td>{{ $data -> biaya_booking }}</td>
                    <td>{{ $data -> status }}</td>
                    <td>{{ $data -> get_member->nama_member }}</td>

                    <td align=center>
                      
                      <a class="btn btn-success" href="/Edit/{{ $data -> id_booking }}" >EDIT </a>

                      <a class="btn btn-success" href="/Hapus/{{ $data -> id_booking }}" >HAPUS </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
                      
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
