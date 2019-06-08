@extends('layouts.Startupapp')
@section('content')
<div class="container">
    <div class="card-body">
        <div class="card card-inner">
            <div class="card-body">
                <div class="mx-auto text-center"><h3>Whats New?</h3><hr/></div>
                <div class="row">
                    <!--<div class="col-md-8"><p><img src="https://i.imgur.com/BzIYwGg.jpg" class="rounded img-fluid"/></p></div>-->
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="a-block w-100" src="https://i.imgur.com/3vqRmvL.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/PQKO01t.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/5DeeZFJ.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    
                            <!--<div class="col-md-2"><p><img src="https://i.imgur.com/cuZumFB.jpg" class="rounded-circle img-fluid" style="width:150px;height:150px"/></p></div>-->
                        
                            <div class="col-md-6"><p><h4>Explore your options</h4></p>
                            Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. <br/>
                                <p><h4>Create your own idea!</h4>Start your own Idea to have investors back you!<a href="{{URL::asset('/posts/create')}}" class="btn btn-primary" role="button" style="padding-left: 50px; padding-right: 50px"><i class="fa fa-plus-square" aria-hidden="true"></i> New Idea</a></p>
                            </div>
                    
                    
                            
                </div>
                
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="mx-auto text-center"><h4>Find the Investor for you</h4></div>
                
        
                
                
                
                <!--
                <div class="row">

                    <div class="col-md-4">
                        <p><img src="https://i.imgur.com/cuZumFB.jpg" class="rounded-circle img-fluid"/></p>
                        <p><a href="Investor_Profile.html"><strong>Bob Businessman</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-4">
                        <p><img src="https://i.imgur.com/NLhguVA.jpg" class="rounded-circle img-fluid"/></p>
                        <p><a href="Investor_Profile.html"><strong>Harry Hegood</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-4">
                        <p><img src="https://i.imgur.com/sWZeKDn.jpg" class="rounded-circle img-fluid"/></p>
                        <p><a href="Investor_Profile.html"><strong>Charlie Chillin</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                

                <br/><br/><br/>

                -->
                <div class="mx-auto text-center"><h6>Like and see if they like you back</h6></div><hr/>

                @if(count($details) > 0)
                @foreach($details as $detail)
                <div class="card card-inner">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p><img src="storage/profile_image/{{$detail->profile_image}}" class="rounded-circle img-fluid"/></p>
                                <!--<p class="text-secondary text-center">15 Minutes Ago</p>-->
                            </div>
                            <div class="col-md-10">
                                <p><a href="Investor_Profile.html"><strong>Rachad Risk</strong></a><br><small>Location: {{$detail->address}}, {{$detail->country}}</small></p>
                                <!--<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
                                <p>{{$detail->user_details}}</p>
                                <p>
                                    <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> View</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--{{$details->links()}}--}}
                @else
                <div class="col-xl-12 ">
                    <h2>No posts found</h2>
                </div>
                @endif

                <!--<div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/4QQ7mrL.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Profile.html"><strong>Ana Analytics</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                        -- Button trigger modal --
                        <button type="button" class="float-right btn text-white btn-danger" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-heart"></i> Like
                        </button>

                        -- Modal --
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Match</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        You Matched with this person!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="Investor_Profile.html"><button type="button" class="btn btn-primary">View Profile</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>                               
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/EcxZVd3.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Rachad Risk</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/PKl7FqJ.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Natatlie Portman</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/txnBld0.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Kimberly Fundme</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/ifYVcl4.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Krystal Leaf</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/WYMxY07.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Ben Armstrong</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/OTyopu6.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Gloria Winter</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/E1zX389.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Julie June</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <p><img src="https://i.imgur.com/MxUNYlc.jpg" class="rounded-circle img-fluid"/></p>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="Investor_Profile.html"><strong>Yvette Park</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

</div>
@endsection