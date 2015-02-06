@extends('layout')

@section('content')

  <div id="header">
    <img src="img/header_title.PNG"/>
  </div>
  <div id="welcome">
    <div class="column_left">

      <div class="welcome_box">
        &nbsp; &nbsp;<span class="dark">Logga in eller</span> <br/>
        <span class="trigger_registration">registrera dig</span>

      </div>





      <div class="registration_box">
        <form>
          &nbsp; &nbsp;För/efternamn:
          <input type="text" name="username"><br>
          &nbsp;Email:
          <input type="text" name="username"><br>
          Lösenord:
          <input type="text" name="password"><br>
          &nbsp; &nbsp;Bekräfta lösenord:
          <input type="text" name="password"><br>
          <div class="back_to_welcome"></div>
          <div class="register_button">Registrera dig</div>

        </form>
      </div>


    </div>
    <div class="column_right">
      Bläddra <span class="dark">bland</span> &nbsp; &nbsp;<br/>
      &nbsp; &nbsp; +1000 projekt
    </div>
  </div>

  <div id="footer">
    <div class="footer_box">
      <h2>
        Kontakt
      </h2>
      Lorem ipsum dolor sit amet<br/>
      consectetur adipiscing elit<br/>
      sed do eiusmod tempor.df..<br/>
      083653473
    </div>
    <div class="footer_box">
      <h2>
        Om oss
      </h2>
      Lorem ipsum dolor sit amet<br/>
      consectetur adipiscing elit<br/>
      sed do eiusmod tempor.df..<br/>
    </div>
    <div class="blue_box">


      <div class="login_box">
        <form>

          Email: &nbsp;<input type="text" name="username">
          <br>
          Lösenord: &nbsp;
          <input type="text" name="password">
          <br>
                          <span id="signinButton">
        <span class="g-signin"
        data-callback="signinCallback"
        data-clientid="179291477685-vmnc97hujne8rf4rv7ihtpta15fvbbf1.apps.googleusercontent.com"
        data-cookiepolicy="single_host_origin"
        data-requestvisibleactions="http://schema.org/AddAction"
        data-scope="https://www.googleapis.com/auth/plus.login">
        </span>
        </span> 

          <a href="user.html"><div class="login_button">Logga in</div></a>
        </form>
      </div>



    </div>
  </div>

@stop
