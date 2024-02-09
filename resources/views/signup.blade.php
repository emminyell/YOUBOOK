<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">


<div class="wrapper">
    <div class="sign-panels">
        <div class="login">
            <div class="title">
                <span>Sign up</span>
                <p>Welcome back, please Register to your account. You can login with facebook, twitter or by your regular
                    user login.</p>
            </div>

            <div>
                <a href="#" class="btn-face"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="#" class="btn-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            </div>

            <div class="or"><span>OR</span></div>
            @if ($errors->any())
            <div>
            <div>ERRORR</div>
        <ul>
        @foreach ($errors->all() as $error)
            <li style="list-style-type: none; color:red;">{{ $error }} </li>
        @endforeach
        </ul>
        </div>
        @endif

            <form method="post" action="{{route('register')}}" >
            @csrf
                <input type="text" placeholder="Username" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="checkbox" id="remember">
                <label for="remember">Keep me sign in</label>
                <button type="submit" name="signup" class="btn btn-primary btn-signin">Sign In</button>
                <a href="" class="btn-reset btn-fade">Recover your password <i class="fa fa-long-arrow-right"
                                                                                aria-hidden="true"></i></a>
                <a href="{{route('signin')}}" class="btn-member btn-fade">Are you already a member? <i class="fa fa-long-arrow-right"
                                                                             aria-hidden="true"></i></a>
            </form>
        </div>


        <!-- <div class="recover-password">
            <div class="title">
                <span>Recover Password</span>
                <p>Enter in the username or email associated with your account</p>
            </div>

            <form action="">
                <input type="email" placeholder="Username/Email Address" id="resetPassword" required>
                <span class="error"></span>
                <a href="javascript:void(0)" class="btn-signin btn-password">Submit Reset</a>
                <a href="javascript:void(0)" class="btn-login btn-fade"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Cancel
                    and go back to Login page </a>
            </form>

            <div class="notification">
                <p>Good job. An email containing information on how to reset your passworld was sent to
                    <span class="reset-mail"></span>. Please follow the instruction in that email to
                    reset your password. Thanks!</p>
            </div>

        </div>
    </div>
</div> -->
