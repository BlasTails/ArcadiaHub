@extends('layouts.Startupapp')
@section('content')

<div class="container">
    

    <div class="row">       
        <div class="col-md-12">
            <div class="panel panel-default" style="padding:15px;">
                <h1><p> Search Results</p></h1>
                <p>5 result(s) for '{{request()->input('query')}}'</p>
                
                @foreach($posts as $post)
                    <div class="card" style="padding:15px;"><br>
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <p class="card-text">{{$post->description}}</p>

                            </div>
                        </div>
                        <br>
                    </div>
                    <br> 
                @endforeach


                
                   
                
                
            </div>
        </div>      
    </div>
</div>

@endsection