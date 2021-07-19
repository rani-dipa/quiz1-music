@extends('layouts.app') 
 
@section('content') 

    <div class="container"> 

        <h3>Edit Data Track</h3> 
        <form action="{{ url('/track/' . $row->track_id) }}" method="POST"> 
            <input name="_method" type="hidden" value="PATCH"> 
            @csrf 
            <div class="form-group">
                <label for="">Nama Track</label>
                <input type="text" name="track_name"  value="{{ $row->track_name }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Artist</label>
                <input type="text" name="artist_id"  value="{{ $row->artist_id }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Album</label>
                <input type="text" name="album_id"  value="{{ $row->album_id }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Durasi</label>
                <input type="text" name="waktu"  value="{{ $row->waktu }}" class="form-control">            
            </div>

            <div class="form-group">
                <input type="submit" value="UPDATE" class="btn btn-primary">            
             </div> 
        </form> 
    </div> 
@endsection 