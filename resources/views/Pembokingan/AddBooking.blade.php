<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Booking</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Kategori -->
        <table class="table table-striped table-hover table-bordered">
						<form action="/TambahdataBooking" method="post">
                    <tr>
                        @csrf
                            <th>Tanggal Booking</th>
                            <th>Jam Booking</th>
                            <th>Uang Muka</th>
                            <th>Biaya Booking</th>
                            <th>Status</th>
                            <th>Member Id</th>
                    </tr>
                    
                    <tr>
                    
                            <th><input class="form-control" type="date" name="tgl_booking" required="required"> <br/></th>
                            <th><input class="form-control" type="time" name="waktu_booking" required="required"> <br/></th>
                            <th><input class="form-control" type="text" name="uang_muka" required="required"> <br/></th>
                            <th><label>Rp</label><input class="form-control" type="text" name="biaya_booking" required="required"> <br/></th>
                            <th><label></label><input class="form-control" type="text" name="status" required="required"> <br/></th>
                            
                            
                            <th>
                            <select name="member_id" class="form-control">
                        @foreach ($data as $data)
                            <option value="{{$data->id}}">{{ $data->nama_member}}</option>
                        @endforeach
                            </select>
                            </th>
                            <td align=center>
                                <input class="btn btn-success" type="submit" value="Simpan Data">
                            </td>
                    </tr>
						</form>
            </table>
                      