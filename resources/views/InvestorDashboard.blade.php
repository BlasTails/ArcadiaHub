@extends('layouts.Investorapp')
@section('content')
<body class="hm-gradient">
<div class="container">
    
    <div class="row">
          <div class="container-banner">
            <div class="col-lg-12 text-center">
                <!--<div class="panel panel-default">-->
                  <h2 class="section-heading" style="font-family: Arial, Helvetica, sans-serif">Welcome {{ Auth::user()->name }}, Start Investing now!</h2>
                  <h3 class="section-subheading text-muted" style="font-family: Verdana,Geneva,sans-serif; font-size: 20px;">Look for the Startup that sparks joy with you!</h3>
                  <br/><hr/><br/>    
                <!--</div>-->
            </div>
          </div>
      </div>
    
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://i.imgur.com/zA6OFWY.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Find the right Startup Founders</h4>
            <h6 class="card-subtitle mb-2 text-muted">Create your dream team</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="{{URL::asset('/AllStartup')}}">Click here to view startup accounts</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://i.imgur.com/7pipsrA.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">View some Startups</h4>
            <h6 class="card-subtitle mb-2 text-muted">See whats out there</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="{{URL::asset('/AllStartup')}}">Click here to view Startups that other Employees are developing</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://i.imgur.com/0yq2NnK.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Find Fellow Investor</h4>
            <h6 class="card-subtitle mb-2 text-muted">Discover the perfect partnership</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="{{URL::asset('/AllInvestor')}}">Click here to view investors</a>
          </div>
        </div>
      </div>
      </div>
    
    </div>
</body>
@endsection