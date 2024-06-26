@extends('layouts.auth')

@section('content')
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="container-fluid h-100" style="padding: 200px;">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content"
                    style="width: 60%; margin: auto;height: 600px;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Admin Sign In</h4>

                                @if(session('error'))
                                <div class="alert alert-danger" id="error-alert">
                                    {{ session('error') }}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label><strong>Email</strong></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="hello@example.com" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><br>
                                <div class="form-group">
                                    <label><strong>Password</strong></label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                    <br>
                                </div>
                                <div class="new-account mt-3">
                                    <p class="small mb-0">Don't have an account? <a href="{{ route('register') }}"
                                            class="text-primary">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</form>
@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var errorAlert = document.getElementById('error-alert');
    if (errorAlert) {
        setTimeout(function() {
            errorAlert.style.display = 'none';
        }, 5000); // 5 seconds
    }
});
</script>

@endsection

@endsection