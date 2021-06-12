<html>
<header>
<title> Tugas Kegiatan 4 </title>

<a href="{{url('/menu0112')}}">Menu</a>
<a href="{{url('/daftarbuku0112')}}">Daftar Buku</a>
<a href="{{url('/letakbuku0112')}}">Letak Buku</a>
<a href="{{url('/jenisbuku0112')}}">Jenis Buku</a></header>

<body>
<br></br>
<br></br>
<a href="/letakbuku/export" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
<br></br>
<table border="3">
		<tr>
			<th>Judul Buku</th>
			<th>Tahun</th>
			<th>Letak Buku</th>
		</tr>
		@foreach ($buku as $bk )
		<tr>
			
			<td>{{$bk->judul}}</td>
			<td>{{$bk->tahun_terbit}}</td>
			<td>{{$bk->letak_buku}}</td>
		</tr>
		@endforeach
 
</body>
</html>
                 
              
        