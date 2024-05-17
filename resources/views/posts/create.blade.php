@extends('templete')
@section('main_content')
<div class="card" style="margin:20px;">
   <div class="card-header" style="text-align: center; font-size: 36px;">Create New Post</div>
   <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
    <form action="{{ url('post') }}" method="post">
        @csrf
        <label>Title</label><br>
        <input type="text" name="nom" id="nom" class="form-control" value="{{ old('title') }}">
        @error('title') 
           <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>

        <label>Description</label><br>
        <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
        @error('description') 
        <span class="text-danger">{{ $message }}</span> 
        @enderror
        <br>

        <label>Detail</label><br>
        <input type="text" name="detail" id="detail" class="form-control" value="{{ old('detail') }}">
        @error('detail') 
        <span class="text-danger">{{ $message }}</span> 
        @enderror
        <br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
   </div>
</div>
@endsection

