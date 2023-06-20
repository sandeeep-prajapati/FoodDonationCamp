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
<body  onload="getLocation();">
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
            <h1 class="text-warning text-center"><b>एक नया मेनू जोड़ें</b></h1>
            <div class="col-md-1">
            </div>
            <div class="col-md-4 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2 class="text-white">खाना देना सबसे अच्छी नीति है...</h2>
                <p class="text-white">जो लेना है खा लो,आप जो खाते हैं उसे लें...</p>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6 mb-5 register-right">
                <form class="myForm" action="{{url('dishupload')}}" enctype='multipart/form-data' method="POST">
                    @csrf
                    <Label class="p-1 text-white">अपना डिश नाम दर्ज करें</Label>
                    <br>
                    <input class="input-type p-2" type="text" name="dishName" placeholder="डिश" value="{{old('dishName')}}">                       
                    <br>
                    <span style="color : yellow">@error('dishName'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1 text-white">भोजन का प्रकार चुनें</Label>
                    <br>
                    <select class="input-type p-2" name="type" id="">
                        <option value="शाकाहारी">शाकाहारी</option>
                        <option value="मांसाहारी">मांसाहारी</option>
                    </select>
                    <br>
                    <br>
                    <Label class="p-1 text-white">भोजन की छवि चुनें</Label>
                    <br>
                    <input class="input-type p-2" type="file" name="img" value="{{old('img')}}" placeholder = "भोजन की छवि">                       
                    <br>
                    <span style="color : yellow">@error('img'){{$message}}@enderror</span>
                    <br>
                    <input style="display: none;" type="text" name="logi"  value = "" require>                                           
                    
                    <input style="display: none;" type="text" name="latti" value = "" require>                       
                    <Label class="p-1 text-white">Upload Image of your Home</Label>
                    <br>
                    <input class="input-type p-2" type="file" name="home1" value="{{old('home1')}}" placeholder = "choose image">                       
                    <br>
                    <span style="color : yellow">@error('home1'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1 text-white">Upload New Image of your Home</Label>
                    <br>
                    <input class="input-type p-2" type="file" name="home2" value="{{old('home2')}}" placeholder = "choose image">                       
                    <br>
                    <span style="color : yellow">@error('home2'){{$message}}@enderror</span>
                    
                    <br><Label class="p-1 text-white">Upload New Image of your Home</Label>
                    <br>
                    <input class="input-type p-2" type="file" name="home3" value="{{old('home2')}}" placeholder = "choose image">                       
                    <br>
                    <span style="color : yellow">@error('home3'){{$message}}@enderror</span>
                    <br>
                    <input class="input-button bg-success p-2 text-white btn" type="submit" value="व्यंजन जोड़ें">
                </form>
            </div>
        </div>
    </div>


        <!-- footer -->
    

        <script type="text/javascript">
                    function getLocation(){
                        if(navigator.geolocation){
                            navigator.geolocation.getCurrentPosition(showPosition);
                        }
                    }
                    function showPosition(position){
                        document.querySelector('.myForm input[name = "latti"]').value = position.coords.latitude;
                        document.querySelector('.myForm input[name = "logi"]').value = position.coords.longitude;
                    }
                    
                    function showError(error){
                        switch(error.code){
                            case error.PERMISSION_DENIED:
                                alert("please allow the location....");
                                location.reload();
                                break;
                        }
                    }
        </script>
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