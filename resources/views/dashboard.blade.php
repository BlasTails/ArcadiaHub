@extends('layouts.Startupapp')
@section('content')
<body class="hm-gradient">
        
<div>
    
    <!-- Header 
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="col-lg-12 text-center">Welcome To Our Studio!</div>
        <div class="col-lg-12 text-center">It's Nice To Meet You</div>
      </div>
    </div>
  </header>
    -->


    
  <!-- Services -->
  <section class="page-section" id="banner">
  
    <div class="container">
        
      <div class="row">
          <div class="container-banner">
            <div class="col-lg-12 text-center">
                <!--<div class="panel panel-default">-->
                  <h2 class="section-heading" style="font-family: Arial, Helvetica, sans-serif">Welcome {{ Auth::user()->name }}, Create your own idea!</h2>
                  <h3 class="section-subheading text-muted" style="font-family: Verdana,Geneva,sans-serif; font-size: 20px;">Start your own Idea to have investors back you!</h3>
                  <p>Click here to publish your own project</p>
                  <a href="{{URL::asset('/posts/create')}}" class="btn btn-primary" role="button" style="padding-left: 65px; padding-right: 65px; margin: 5px;"><i class="fa fa-plus-square" aria-hidden="true"></i> New Startup</a> 
                  <br/><br/>    
                <!--</div>-->
            </div>
          </div>
      </div>
      
        <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://i.imgur.com/zA6OFWY.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Find the Investor for you</h4>
            <h6 class="card-subtitle mb-2 text-muted">Discover the perfect partnership</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="{{URL::asset('/AllInvestor')}}">Click here to view Investor</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://i.imgur.com/7pipsrA.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Find the right Startup employee</h4>
            <h6 class="card-subtitle mb-2 text-muted">Create your dream team</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="{{URL::asset('/AllStartup')}}">Click here to view other Startup accounts</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://i.imgur.com/0yq2NnK.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">View some Startup projects</h4>
            <h6 class="card-subtitle mb-2 text-muted">See whats out there</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="{{URL::asset('/projects')}}">Click here to view other Startups</a>
          </div>
        </div>
      </div>
      </div>
        
    </div>
  </section>

  <!-- Portfolio Grid
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Threads</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Explore</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Finish</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Lines</h4>
            <p class="text-muted">Branding</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Southwest</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    -->
</div>

@endsection