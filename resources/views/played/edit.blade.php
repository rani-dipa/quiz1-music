@extends('layouts.app') 
 
@section('content') 

    <div class="container"> 

        <h3>Edit Data Played</h3> 
        <form action="{{ url('/played/' . $row->played_id) }}" method="POST"> 
            <input name="_method" type="hidden" value="PATCH"> 
            @csrf

            <div class="form-group">
                <label for="">Artist</label>
                <input type="text" name="artist_id"  value="{{ $row->artist_id }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Album</label>
                <input type="text" name="album_id"  value="{{ $row->album_id }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Track</label>
                <input type="text" name="track_id"  value="{{ $row->track_id }}" class="form-control">            
            </div>

            <div class="form-group">
                <label for="">Played</label>
                <input type="text" name="played"  value="{{ $row->played }}" class="form-control">            
            </div>

            <div class="form-group">
                <input type="submit" value="UPDATE" class="btn btn-primary">            
             </div> 
        </form> 
    </div> 
@endsection 