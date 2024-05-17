@extends('templete')
@section('main_content') 
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

 <br> <br> <br> 
  <body style="padding-top: 56px;">
  <h2 style="text-align: center;">Les Services</h2>
                       
                       <div class="d-flex justify-content-between mb-3"> 
                       </div>
                        <div class="row">
                            @foreach($posts as $item)
                            <div class="col-md-3 col-6 mb-4">
                                <div class="card h-100"> <!-- Ajout de la classe h-100 -->
                                    <img src="{{asset('images')}}/{{$item->image}}" class="card-img-top" style="height: 250px; width: 100%; object-fit: cover;">
                                    <div class="card-body">
                                    <h4 class="card-title">{{$item->title}}</h4>
                                    <a href="{{url('/post/'.$item->id)}}" title="Voir detail"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>Voir Detail</button></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                    
    
</body>             
@endsection

