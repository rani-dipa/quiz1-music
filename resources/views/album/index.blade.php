@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Album
        <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3> 

    <table class="table table-bordered"> 
        <tr>
            <th>ARTIST</th>
            <th>NAMA ALBUM</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr> 
        @foreach($rows as $row) 
        <tr> 
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_name }}</td>
            <td><a href="{{ url('album/' . $row->album_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>  
            <td>
                <form action="{{ url('/album/' . $row->album_id) }}" method="POST"><input name="_method" type="hidden" value="DELETE"> 
                @csrf 
                <button class="btn btn-danger btn-sm">Hapus</button> 
                </form>
            </td>
        </tr>
        @endforeach 
    </table> 
</div>

@endsection