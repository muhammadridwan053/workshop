@extends('layout.dashboard')
@section('content')
<div class="container" > 
	<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> BERITA</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('berita.create') }}"> Create Berita</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered" id="tabelku" style="font-size: 11px">
        <thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>ID</th>
            <th>JUDUL</th>
            <th>ISI</th>
            <th>VIEWS</th>
            <th>AUTHOR</th>
            <th>SLIDER</th> 
            <th>TANGGAL</th>
            <th>Gambar</th>
            <th width="150" class="text-center">Action</th>
        </tr>
    </thead>
        <tbody>
        <?php $i=0; ?>    
        @foreach ($beritas as $data)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $data->id }}</td>

            <td>{{ $data->judul }}</td>
            <td>{{ $data->isi }}</td>
            <td>{{ $data->views }}</td>
            <td>{{ $data->author }}</td>
            <td>{{ $data->img_slider }}</td>
            <td>{{ $data->tanggal }}</td>
             <td>{{ $data->gambar }}</td>
            <td class="text-center">
                <form action="{{ route('berita.destroy',$data->id) }}" method="POST">

                    <a class="btn btn-info btn-xs" href="{{ route('berita.show',$data->id) }}">Show</a>

                    <a class="btn btn-primary btn-xs" href="{{ route('berita.edit',$data->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>
 <script type="text/javascript">
        $(document).ready(function() {
            $('#tabelku').DataTable();
 });    
    </script>           
</div>

@endsection
