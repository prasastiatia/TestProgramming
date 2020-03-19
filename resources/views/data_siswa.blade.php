<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> 
</head>

<body>

<div class="container">
		
	
    <div class="box-body col-md-4 ">
    <form enctype="multipart/form-data" method="POST" action="{{ route('tambah_data_siswa')}}">
        {{ csrf_field() }}
        <br>
        <div class="form-group form-inline" >
            <label> Nama </label>&nbsp;&nbsp;
            <input class="form-control" id="nama" type="text"   name="nama">
        </div>

            <div class="form-group form-inline">
              <label >Alamat</label>&nbsp;&nbsp;
              <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
            </div>

            <div class="form-group form-inline">
              <label >No Telp</label>&nbsp;&nbsp;
              <input class="form-control"  name="notelp" placeholder="Masukkan No Telpon">
            </div>
            <div class="form-group form-inline">
                    <label >Asal Sekolah</label>&nbsp;&nbsp;
                    <select name="asal_sekolah" class="form-control">
                        @foreach ($sekolah as $data)
                          <option value="{{ $data->nama_sekolah}}">{{ $data->nama_sekolah }}</option>
                        @endforeach
                      </select>
                  </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
</div>
</div>
<br>
<div class="container">
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered" >
        <tr  align="justify">
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telpon</td>
            <td>Asal Sekolah</td>
            <td>Aksi</td>
        </tr>

        @php
        $i = 1;
        @endphp 
        @foreach ($data_sekolah as $x)
        <tr  class ="table-info" align="justify">
            <td>{{ $i}}</td>
            <td>{{ $x-> nama }}</td>
            <td>{{ $x-> alamat }}</td>
            <td>{{ $x-> telpon}}</td>
            <td>{{ $x-> asal_sekolah}}</td>
            <td>
              <a href="data_siswa/edit/{{ $x->id }}" class="btn btn-warning">Edit</a>
              <a href="data_siswa/hapus/{{ $x->id }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
        
    </table>
</div>

<br>
        <a href="{{ route('dashboard_user')}}">
        <h3>Kembali ke halaman menu</h3>
        </a>
</div>

</body>
</html>