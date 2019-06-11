@extends('layouts.Investorapp')
@section('content')
<body class="hm-gradient">
<div class="container">
    <div class="card-body">
        <div class="card card-inner">
            <div class="card-body">

                

                

                <hr/>
                <div class="mx-auto text-center"><h4>Find the right Startup Founders</h4></div>
                <div class="mx-auto text-center"><h6>Create your dream team</h6></div><hr/>
                <div class="card card-inner">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p></p>
                                <!--<p><img src="storage/cover_images/pexels-photo-450271.jpeg" class="rounded-circle img-fluid"/></p>-->
                                <!--<p><img src="storage/cover_images/pexels-photo-450271.jpeg" class="rounded" width=200% height=300%/></p>-->
                                <p><img src="https://images.pexels.com/photos/450271/pexels-photo-450271.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="rounded" width=200% height=300%/></p>
                                <!--<p class="text-secondary text-center">15 Minutes Ago</p>-->
                            </div>
                            <div class="col-md-10">
                                <!--<p><a href="Investor_Profile.html"><strong>Rachad Risk</strong></a><br><small>Location: {{--{{$detail->address}}--}}, {{--{{$detail->country}}--}}</small></p>-->
                                <p style="padding:2% 0% 0% 15%">Click here to view other startup accounts</p>
                                <!--<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
                                <p>{{--{{$detail->user_details}}--}}</p>
                                <p>
                                    <a href="{{URL::asset('/AllStartup')}}"  class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Display Employees</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>
                <div class="mx-auto text-center"><h4>View some Startups</h4></div>
                <div class="mx-auto text-center"><h6>See whats out there</h6></div><hr/>
                <div class="card card-inner">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p></p>
                                <!--<p><img src="storage/cover_images/flow-chart-presentation.jpg" class="rounded-circle img-fluid"/></p>-->
                                <!--<p><img src="storage/cover_images/flow-chart-presentation.jpg" class="rounded" width=200% height=300%/></p>-->
                                <p><img src="https://images.pexels.com/photos/1661004/pexels-photo-1661004.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" class="rounded" width=200% height=300%/></p>
                                <!--<p class="text-secondary text-center">15 Minutes Ago</p>-->
                            </div>
                            <div class="col-md-10">
                                <!--<p style="padding-left:15%"><a href="Investor_Profile.html"><strong>Rachad Risk</strong></a><br><small>Location: {{--{{$detail->address}}--}}, {{--{{$detail->country}}--}}</small></p>-->
                                <p style="padding:2% 0% 0% 15%">Click here to view Startups that other Employees are developing</p>
                                <!--<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
                                <p>{{--{{$detail->user_details}}--}}</p>
                                <p>
                                    <a href="{{URL::asset('/projects')}}"   class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Display Projects</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="mx-auto text-center"><h4>Find Fellow Investor</h4></div>
                <!--<div class="mx-auto text-center"><h6>Like and see if they like you back</h6></div><hr/>-->
                <div class="mx-auto text-center"><h6>Discover the perfect partnership</h6></div><hr/>
                <div class="card card-inner">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p></p>
                                <!--<p><img src="storage/cover_images/pexels-photo-937481.jpeg" class="rounded-circle img-fluid"/></p>-->
                                <!--<p><img src="storage/cover_images/pexels-photo-937481.jpeg" class="rounded" width=200% height=300%/></p>-->
                                <p><img src="https://images.pexels.com/photos/937481/pexels-photo-937481.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" class="rounded" width=200% height=300%/></p>
                                <!--<p class="text-secondary text-center">15 Minutes Ago</p>-->
                            </div>
                            <div class="col-md-10">
                                <!--<p><a href="Investor_Profile.html"><strong>Rachad Risk</strong></a><br><small>Location: {{--{{$detail->address}}--}}, {{--{{$detail->country}}--}}</small></p>-->
                                <p style="padding:2% 0% 0% 15%">Click here to view investors</p>
                                <!--<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
                                <p>{{--{{$detail->user_details}}--}}</p>
                                <p>
                                    <a href="{{URL::asset('/AllInvestor')}}"  class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Display Investors</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection