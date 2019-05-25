@extends('layouts.Startupapp')
@section('content')

</div>
<div class="content-panel">
    <div class="content-header-wrapper">
        <h2>Profile Settings</h2>
    </div>
    <div>
        <hr>
        <form class="form" action="##" method="post" id="registrationForm">
            <div class="row">
                <div class="col-4" style="padding-top: 15px">
                    <label for="phone"><h4>Profile Picture</h4></label>
                </div>
                <div class="col-sm-6" style="margin-left: 11px; margin-top: 10px">
                    <input type="file" class="custom-file-input" id="ProfPic">
                    <label class="custom-file-label" for="ProfPic" style="margin-right: 25px">Change Picture</label>
                </div>
            </div>
            <div class="row" >
                <div class="col-4" style="padding-top: 15px">
                    <label for="phone"><h4>Personal Details</h4></label>
                </div>
                <div class="col-sm-6" style="margin-top: 15px">
                    <textarea style="height: 150px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-4" style="padding-top: 15px">
                    <label for="phone"><h4>Phone</h4></label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                </div>
            </div>
            <div class="row">
                <div class="col-4" style="padding-top: 15px">
                    <label for="mobile"><h4>Mobile</h4></label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                </div>
            </div>
            <div class="row">
                <div class="col-4" style="padding-top: 15px">
                    <label for="email"><h4>Email</h4></label>
                </div>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                </div>
            </div>
            <div class="row">
                <div class="col-4" style="padding-top: 15px">
                    <label for="password"><h4>Password</h4></label>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                </div>
            </div>
            <div class="row">
                <div class="col-4" style="padding-top: 15px">
                    <label for="password2"><h4>Verify</h4></label>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password.">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-check-circle" aria-hidden="true"></i> Save</button>
                    <button  class="btn btn-lg btn-dark" type="reset"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                </div>
            </div>
        </form>
        <hr>
    </div>
</div>
</div>
</section>
</div>
</div>
@endsection