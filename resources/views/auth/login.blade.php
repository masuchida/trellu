@extends('layouts.app')

@section('content')
<div class="signinPage">
  <div class="container">
    <h2 class="title">Trelluにログイン</h2>
    <div class="text-center m-3">or</div>
    <div class="text-center">
      <p class="acountPage_link"><a href="{{ route('register') }}">アカウントを作成</a></p>
    </div>
    <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
    {{ csrf_field() }}
      <div class="form-group">
        <label for="user_name">ユーザーID</label><br>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
        <label for="user_password">パスワード</label><br>
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group text-center">
        <input type="submit" name="commit" value="ログインする" class="loginBtn" data-disable-with="ログインする">
      </div>
    </form>
  </div>
</div>
@endsection