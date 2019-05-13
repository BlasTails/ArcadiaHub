@extends('layouts.app')
@section('content')
        <!-- Header -->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <!--<form action="action_page.php">-->
                    <form action="{{URL::asset('/StartupDash')}}">
                        <div class="containerform">
                            <h1>Sign In</h1>
                            <p>Please sign in with your email/username and password</p>
                            <hr>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required> <br/>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <p>Or <a href="Admin_Sign_Up.html">Sign In As Administator</a>.</p>

                            <hr>
                            <button type="submit" class="registerbtn">Sign In</button>
                        </div>

                    </form>
                </div>
            </div>
        </header>
        <!-- Footer  -->
        <footer class="bg-black small text-center text-white-50">
            <div class="container">
                Copyright &copy; Your Website 2019
            </div>
        </footer>
@endsection