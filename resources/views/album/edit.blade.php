@extends('layouts.app') 
 
@section('content') 

    <div class="container"> 

        <h3>Edit Data Album</h3> 
        <form action="{{ url('/album/' . $row->album_id) }}" method="POST"> 
            <input name="_method" type="hidden" value="PATCH"> 
            @csrf 
            <div class="form-group">
                <label for="">Artist</label>
                <input type="text" name="artist_id"  value="{{ $row->artist_id }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Nama Album</label>
                <input type="text" name="album_name"  value="{{ $row->album_name }}" class="form-control">            
            </div>

            <div class="form-group">
                <input type="submit" value="UPDATE" class="btn btn-primary">            
             </div> 
        </form> 
    </div> 
@endsection 