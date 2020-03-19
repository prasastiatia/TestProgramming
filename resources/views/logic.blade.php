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
        <h3>Halaman Logic Perulangan</h3>
        </center>

        <div class="box-body col-md-4 ">
            <form method="POST" action="">
                {{ csrf_field() }}
                <br>
                <div class="form-group form-inline" >
                    <label> Masukkan Angka </label>&nbsp;&nbsp;
                    <input class="form-control" id="angka" type="text"   name="angka">
                </div>
                <button class="btn btn-secondary" name="submit">Submit</button>
            </form>
        </div>
        <br>
        @if(isset($_POST['submit']))
        
            @php
            $angka = $_POST['angka'];
            
            $jml_angka = strlen($angka);
            $tambah_karakter = str_pad($angka,$jml_angka+1,"0",STR_PAD_LEFT);
            $jml_angka1 = strlen($tambah_karakter);
            // dd($tambah_karakter);
            // $jml_angka = strlen($angka);
            $split = str_split($tambah_karakter);
            $hitung_array = count($split);
            $split1 = str_split($angka);
            $hitung_array1 = count($split1);
            // dd($split);
            
            @endphp
            {{-- @for($a=1; $a<=$jml_angka; $a++) --}}
                    {{-- @foreach($split as $value) --}}
                    
                        @for($i=1; $i<$hitung_array; $i++)
                            @php
                            echo $split[$i];
                            @endphp
                        {{-- @endfor  --}}
                    {{-- @endforeach --}}
                @for($j=$hitung_array1; $j>$i; $j-=1)
                
                    @php
                     echo "0";   
                    @endphp
                    
                @endfor
                @php
                    echo "<br>" ;   
                    @endphp
                
                @endfor
                <br/>
                    
        @endif  
        <br>
        <a href="{{ route('dashboard_user')}}">
        <h3>Kembali ke halaman menu</h3>
        </a>
    </div>

	
</body>
</html>