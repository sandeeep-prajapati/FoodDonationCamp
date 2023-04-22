<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kuch bhi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Student Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
    </div>

    <div class="container register register-background custBack">
        <div class="row ">
            <h1 class="text-warning text-center"><b>Registration Page</b></h1>
            <div class="col-md-1">
            </div>
            <div class="col-md-4 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2 class="text-white">हम सब आपका स्वागत करते हैं...</h2>
                <p class="text-white">यदि आप पहले से पंजीकृत हैं तो कृपया यहां लॉगिन करें...</p>
                <a href="studentRegister.html">
                    <a href="/login"><input type="submit" class="btn btn-xll btn-success" value="लॉग इन"></a>
                </a>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6 mb-5 register-right">
                <form action="{{url('doner')}}" enctype='multipart/form-data' method="POST">
                    @csrf
                    <Label class="p-1 text-white">अपना नाम दर्ज करें</Label>
                    <br>
                    <input class="input-type p-2" type="text" name="name" placeholder="नाम" value="{{old('name')}}">                       
                    <br>
                    <span style="color : yellow">@error('name'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1 text-white">अपना ईमेल दर्ज करें</Label>
                    <br>
                    <input class="input-type p-2" type="email" name="email" placeholder="ईमेल" value="{{old('email')}}">                       
                    <br>
                    <span style="color : yellow">@error('email'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1 text-white">मजबूत पासवर्ड बनाएं</Label>
                    <br>
                    <input class="input-type p-2" type="password" name="password" placeholder="पासवर्ड" value="{{old('password')}}">
                    <span style="color : yellow">@error('password'){{$message}}@enderror</span>
                    <br>
                    <br>
                    <Label class="p-1 text-white">अपनी प्रोफ़ाइल छवि दर्ज करें</Label>
                    <br>
                    <input class="input-type p-2" type="file" name="img" value="{{old('img')}}" placeholder = "प्रोफ़ाइल छवि">                       
                    <br>
                    <span style="color : yellow">@error('img'){{$message}}@enderror</span>
                    <br>
                    <br>
                    <input class="input-button bg-success p-2 text-white btn" type="submit" value="पंजीकरण करें">
                </form>
            </div>
        </div>
    </div>


        <!-- footer -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>