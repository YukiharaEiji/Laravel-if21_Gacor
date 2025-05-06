<h1>Program Studi</h1>

@foreach ($prodi as $item)
    {{ $item->nama }} {{ $item->Kaprodi }} <br>{{$item->fakultas->nama}} {{$item->fakultas->nama_dekan}}
@endforeach