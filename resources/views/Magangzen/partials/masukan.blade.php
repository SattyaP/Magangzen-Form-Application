    <!-- Masukan -->
    <div class="container bg-masukan">
        <h1 class="text-masukan">Masukan Untuk Kami</h1>
        <p class="des-masukan">Dengan Masukan anda Kami Jadi Lebih Mudah Mengembangkan Platform Ini</p>
        <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success">
        {{ Session::get('success') }}
        </div>
        @endif
    <form method="post" action="masukan">
        {{csrf_field()}}
        <div class="row mt">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Type your massage </label>
                            <textarea class="form-control textarea @error('message') is-invalid @enderror " rows="3" placeholder="Message" name="message"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Mail Address </label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label class="mt-1" >Captcha</label>
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        @if ($errors->has('recaptcha'))
                            <span class="help-block">
                                <p style="color: red; font-weight: 600; font-size: 14px;">{{ $errors->first('recaptcha') }}</p>
                            </span>
                        @endif
                        <button class="btn-form">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>

