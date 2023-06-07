<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href={{asset("style.css")}} >
    <title>تسجيل دخول</title>
</head>
<body class="body-login">
    <div class="login-page">
        <div class="container">
            <div class="page-box d-flex justify-content-center align-items-center">
                <div class="box-login">
                    <div class="profile-login-img text-center ">
                        <img class="text-center" src={{asset("imgs/profile-login.png")}} alt="">
                    </div>
                    <form action={{route("login.login")}} method="post">
                        @csrf
                        <div class="icon-container w-50 mx-auto">
                            <img class="icon-1" src={{asset("imgs/icon1.png")}} alt="">
                           <input class="form-control text input-email my-5 " type="email" name="email" id="" placeholder="البريد الالكتروني">
                           
                        </div>
                        
            
                       <div class="icon-container w-50 mx-auto">
                        
                        
                        <img class="icon-2" src={{asset("imgs/icon2.png")}} alt="">
                            <input type="password" name="password" class="form-control input-day" id="" placeholder="كلمة السر">
                        
        
                         </div>
                         @error('email')
                             <div class="txt-red text-center mt-3">{{$message}}</div>
                            
                           @enderror
                         <div class="login-button mx-auto mt-5 w-30">
                            <button class="form-control btn btn-login">تسجيل الدخول</button>
            
                        </div>

                    </form>
         
    
             
                
                </div>

            </div>

            
        

            </div>

        </div>

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>