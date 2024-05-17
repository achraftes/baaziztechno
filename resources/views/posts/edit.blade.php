@extends('produits.layout')
@section('content')

<div class="card" style="margin:20px;">
<div class="card-header" style="text-align: center; font-size: 36px;">Edit Post</div>
<div class="card-body">
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
<form action="{{url('post/'.$posts->id)}}" method="post">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id"value="{{$posts->id}}"/>
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{old('nom',$posts->title)}}" class="form-control">
        @error('nom') 
           <span class="text-danger">{{ $message }}</span> 
        @enderror
    </br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{old('description',$posts->description)}}" class="form-control">
        @error('description') 
        <span class="text-danger">{{ $message }}</span> 
        @enderror
    </br>
        <label>Prix</label></br>
        <input type="number" name="prix" id="prix" value="{{old('prix',$posts->detail)}}" class="form-control">
        @error('detail') 
        <span class="text-danger">{{ $message }}</span> 
        @enderror</br>
        <input type="submit"value="Update" class="btn btn-success"></br>
    </form>

</div>
</div>
@endsection