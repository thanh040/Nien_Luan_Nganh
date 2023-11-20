<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  </head>
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
        }
        body{
        background: #1abc9c;
        overflow: hidden;
        }
        ::selection{
        background: rgba(26,188,156,0.3);
        }
        .container{
        max-width: 440px;
        padding: 0 20px;
        margin: 170px auto;
        }
        .wrapper{
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
        }
        .wrapper .title{
        height: 90px;
        background: #16a085;
        border-radius: 5px 5px 0 0;
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .wrapper form{
        padding: 30px 25px 25px 25px;
        }
        .wrapper form .row{
        height: 45px;
        margin-bottom: 15px;
        position: relative;
        }
        .wrapper form .row input{
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 16px;
        transition: all 0.3s ease;
        }
        form .row input:focus{
        border-color: #16a085;
        box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
        }
        form .row input::placeholder{
        color: #999;
        }
        .wrapper form .row i{
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: #16a085;
        border: 1px solid #16a085;
        border-radius: 5px 0 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .wrapper form .pass{
        margin: -8px 0 20px 0;
        }
        .wrapper form .pass a{
        color: #16a085;
        font-size: 17px;
        text-decoration: none;
        }
        .wrapper form .pass a:hover{
        text-decoration: underline;
        }
        .wrapper form .button input{
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #16a085;
        border: 1px solid #16a085;
        cursor: pointer;
        }
        form .button input:hover{
        background: #12876f;
        }
        .wrapper form .login-link{
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
        }
        .wrapper form .login-link a{
        color: #16a085;
        text-decoration: none;
        }
        form .login-link a:hover{
        text-decoration: underline;
        }
  </style>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Đăng Nhập</span></div>
        <form  method="POST" action="{{url('post-login')}}">
            @csrf
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mật Khẩu" name="password" required>
          </div>
          <div class="pass"><a href="#">Quên Mật Khẩu</a></div>
          <div class="row button">
            <input type="submit" value="Đăng Nhập">
          </div>
          <div class="register-link">Đăng Ký Thành Viên? <a href="{{ url('/register') }}">Đăng Ký</a></div>
        </form>
      </div>
    </div>
  </body>
  @if(session()->has('fail'))
    <script>
      Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Sai email hoặc mật khẩu!',
          showConfirmButton: false,
          timer: 2000
      })
    </script>
  @endif
  
  @if(session()->has('sweetAlert'))
    <script>
      Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Đăng ký thành công!',
          showConfirmButton: false,
          timer: 2000
      })
  </script>
  @endif
  
  @if(session()->has('changeSuccess'))
    <script>
      Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Đổi mật khẩu thành công!',
          showConfirmButton: false,
          timer: 2000
      })
  </script>
  @endif
</html>