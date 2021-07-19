@extends('layouts.app') 

@section('content') 

<div class="container"> 

    <h3>Tambah Data Played</h3> 
    <form action="{{ url('/played') }}" method="POST"> 
        @csrf
        <div class="form-group">
            <label for="">Artist</label>
            <input type="text" name="artist_id" class="form-control">            
        </div>

        <div class="form-group">
            <label for="">Album</label>
            <input type="text" name="album_id" class="form-control">            
        </div>

        <div class="form-group">
            <label for="">Track</label>
            <input type="text" name="track_id" class="form-control">            
        </div>

        <div class="form-group">
            <label for="">Played</label>
            <input type="date" name="played" class="form-control">            
        </div>

        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">            
        </div>
    </form> 

</div> 
 
@endsection