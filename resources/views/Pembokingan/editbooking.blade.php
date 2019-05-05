<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Booking</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Kategori -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data booking</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
            @foreach ($booking as $data)
              <form action="{{url('Update/'.$data->id_booking)}}" method="post">
                  <tr>
                  {{ csrf_field() }}
                    <th>ID Booking</th>
                    <th>Tanggal Booking</th>
                    <th>Jam Booking</th>
                    <th>Uang Muka</th>
                    <th>Biaya Booking</th>
                    <th>Status</th>
                    <th>Member</th>
                    <th>Opsi</th>
                  </tr>
                  <tr>
                    <td>
                      <input type="hidden" name="id_booking" value="{{ $data -> id_booking }}">
                    </td>
                    <td>
                      <input type="date" name="tgl_booking" value="{{ $data -> tgl_booking }}">
                    </td>
                    <td>
                      <input type="time" name="waktu_booking" value="{{ $data -> waktu_booking }}">
                    </td>
                    <td>
                      <input type="text" name="uang_muka" value="{{ $data -> uang_muka }}">
                    </td>
                    <td>
                      <input type="text" name="biaya_booking" value="{{ $data -> biaya_booking }}">
                    </td>
                    <td>
                      <input type="text" name="status" value="{{ $data -> status }}">
                    </td>
                    


                    <td>
                      <select name="member_id" class="form-control">
                        @foreach ($merubah as $m)
                            <option value="{{$m->id}}">{{ $m->nama_member}}</option>
                        @endforeach
                      </select>
                    </td>
               <td align=center>
                      <input class="btn btn-success" type="submit" value="Simpan Data">
                    </td>
                  </tr>
                @endforeach
                </tbody>
                </form>
              </table>
                    <a class="btn btn-success" href="{{url('kamera')}}">Kembali</a>
          </div>
        </div>
      </div>