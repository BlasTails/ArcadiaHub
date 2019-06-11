@extends('layouts.Investorapp')
@section('content')
<body class="hm-gradient">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
                <div class="investorprofile social">
                    <h2 class=mx-auto my-0 text->{{ Auth::user()->name }} </h2>
                    @foreach ($users as $user)
                    <div class="userpic"> 
                        <img src="storage/profile_image/{{$user->profile_image}}" alt="Cinque Terre" class="rounded-circle" width="200" height="200"> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 pull-right">
        <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Personal Details</h1>
                    @foreach ($users as $user)
                    <p class="page-subtitle small">Country: {{$user->country}}</p>
                    <p class="page-subtitle small">Location: {{$user->address}} </p>
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Profile Description </h1>
                    @foreach ($users as $user)
                    <p class="page-subtitle small">{!!$user->user_details!!} </p>
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h1 class="page-header small">Contact</h1>
                    @foreach ($users as $user)
                    <p class="page-subtitle small">Email: {{$user->email}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 pull-left posttimeline">
            <div class="panel panel-default">
                <!--<div class="col-md-12 commentsblock border-top">
<h1>Your Investments</h1>
<div class="card h-100">-->
                <!--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
                <!--<a href="#"><img class="card-img-top" src="https://www.sokolovelawfirm.com/wp-content/uploads/SS_NATAUTO2016_009.jpg" alt=""></a>
<div class="card-body">
<h4 class="card-title">-->
                <!--<a href="Project.html">Project One</a>-->
                <!--<a href="">TESLA</a>
</h4>-->
                <!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>-->
                <!--<p class="card-text">Tesla’s mission is to accelerate the world’s transition to sustainable energy. We believe the faster the world stops relying on fossil fuels and moves towards a zero-emission future, the better.</p>
</div>
</div><br>
</div>
<div class="col-md-12 commentsblock border-top">
<div class="card h-100">-->
                <!--<a href="Profile.html"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
                <!--<a href="Profile.html"><img class="card-img-top" src="https://www.thenews.com.pk//assets/uploads/updates/2018-12-06/402197_6050596_specex12_updates.jpg" alt=""></a>-->
                <!--<a href="Profile.html"><img class="card-img-top" src="https://yucatanexpatlife.com/wp-content/uploads/2018/03/ubereats700x400.jpg" alt=""></a>
<div class="card-body">
<h4 class="card-title">-->
                <!--<a href="Project.html">Project two</a>-->
                <!--<a href="">Uber Eats</a>
</h4>-->
                <!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>-->
                <!--<p class="card-text">SpaceX designs, manufactures and launches advanced rockets and spacecraft. The company was founded in 2002 to revolutionize space technology, with the ultimate goal of enabling people to live on other planets.</p>-->
                <!--<p class="card-text">Uber Eats is the easy way to get the food you love delivered.</p>
</div>
</div><br>
</div>-->
                <div class="c,arol-md-12 commentsblock border-top">
                    <div class="mx-auto text-center"><br/><h1><p>Your Investments</p></h1></div>
                    {{--@if(count($investor_posts) > 0)
                    <!--@foreach($investor_posts as $investor_post)
<div class="card h-100">
<img class="card-img-top" src="storage/cover_images/{{$investor_post->cover_image}}" alt="">
<div class="card-body">
<h4 class="card-title">
<a href="/test/public/posts/{{$investor_post->id}}">{{$investor_post->title}}</a>
</h4>
<p class="card-text">{{$investor_post->description}}</p>
<small>Written on {{$investor_post->created_at}}</small>
</div>

</div>
<br>-->

                    @endforeach
                    {{$investor_posts->links()}}  
                    @else
                    <hr>
                    <h5 style="text-align: center; margin-bottom: 25px;">You have no Investments</h5>
                    <hr>
                    @endif--}}


                   

                    <!--vvv Will be removed vvv-->
                    <hr>
                    <h5 style="text-align: center; margin-bottom: 25px;">You have no Investments</h5>
                    <hr>
                    <!--^^^ Will be removed ^^^-->      

                </div>
            </div>      
        </div>
    </div>
</div>
</body>
@endsection