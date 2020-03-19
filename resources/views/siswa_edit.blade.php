<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> 
</head>

<body>

<div class="container">
    
        <center>
        <h3>Halaman Edit Data Siswa</h3>
        </center>
	
    <div class="box-body col-md-4 ">
    <form enctype="multipart/form-data" method="POST" action="/User/data_siswa/update/{{ $siswa->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <br>
        <div class="form-group form-inline" >
            <label> Nama </label>&nbsp;&nbsp;
        <input class="form-control" id="nama" type="text"   name="nama" value="{{$siswa->nama}}">
        </div>

            <div class="form-group form-inline">
              <label >Alamat</label>&nbsp;&nbsp;
              <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="{{$siswa->alamat}}">
            </div>

            <div class="form-group form-inline">
              <label >No Telp</label>&nbsp;&nbsp;
              <input class="form-control"  name="notelp" placeholder="Masukkan No Telpon" value="{{$siswa->telpon}}">
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
<div class ="container">
        <a href="{{ route('data_siswa')}}">
        <h3>Kembali ke halaman data siswa</h3>
        </a>
</div>

</body>
</html>