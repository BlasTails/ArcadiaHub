@extends('layouts.app')
@section('content')

        <div class="container" style="padding-top: 85px">
            <div class="row">
                <h1>Contacts</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="bs-example">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row w-100">
                                    <div class="col-12 col-sm-6 col-md-3 px-0">
                                        <img src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="Mike Anamendolla" class="rounded-circle mx-auto d-block img-fluid">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                                        <label class="name lead">Mike Anamendolla</label>
                                        <span class="text-muted small text-truncate"><i class="fa fa-envelope"></i> mike.ana@example.com</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item active">
                                <div class="row w-100">
                                    <div class="col-12 col-sm-6 col-md-3 px-0">
                                        <img src="http://demos.themes.guide/bodeo/assets/images/users/m105.jpg" alt="Seth Frazier" class="img-fluid rounded-circle d-block mx-auto">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                                        <span class="name lead">Seth Frazier</span>
                                        <span class="text small text-truncate"><p style="fontsize:12px"><i class="fa fa-envelope"></i> seth.frazier@example.com</p></span>
                                        

                
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row w-100">
                                    <div class="col-12 col-sm-6 col-md-3 px-0">
                                        <img src="http://demos.themes.guide/bodeo/assets/images/users/w102.jpg" alt="Rosemary Porter" class="img-fluid rounded-circle d-block mx-auto">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                                        <span class="name lead">Rosemary Porter</span>
                                        <span class="text-muted small text-truncate"><i class="fa fa-envelope"></i> rose.porter@example.com</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row w-100">
                                    <div class="col-12 col-sm-6 col-md-3 px-0">
                                        <img src="http://demos.themes.guide/bodeo/assets/images/users/w104.jpg" alt="Debbie Schmidt" class="img-fluid rounded-circle d-block mx-auto">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                                        <label class="name lead">Debbie Schmidt</label>
                                        <span class="text-muted small text-truncate"><i class="fa fa-envelope"></i> deb.schmidt@example.com</span>
                                    </div>
                                </div>
                            </a>   
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
			  				<h1>Message</h1>
			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message" style="height: 250px"></textarea>
			  			</div>
			  			<div>
			  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
                </div>
            </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>