<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laporkan Saja!</title>
   <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
<div class="form-container">
                <form action="{{ route('admin.auth.login') }}" method="post" >
                  @csrf
                    <input type="text" class="box" name="username" id="floatingPassword" placeholder="Username" required autocomplete="no">
                    <input type="password" class="box" name="password" id="floatingPassword" placeholder="Password" required>
                    <center><input class="btn" type="submit" name="login"></input></center>
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Bukan Admin ? || <a href="{{ url('auth') }}" > Sign In User </a></h5>
                </form>
              </div>
      </body>
</html>