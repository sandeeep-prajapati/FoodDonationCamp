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

<body onload="getLocation();">
    <!-- nav bar -->
    <nav style="background-color: transparent;" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" style="padding-left: 20px;" href="/"><b>Error404</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    @if(Session()->has('userId'))
                    
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/">मुख्य डैशबोर्ड</a>
                    </li>
                    
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/productUpload">मेनू अपलोड करें</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/logOut">लॉग आउट</a>
                    </li>
                    
                    @else
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/login">हस्ताक्षर</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/registration">पंजीकरण</a>
                    </li>
                    
                    @endif
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="#">संपर्क करें</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

   
    <div class="container-fluid">
    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                        
     
    </div>
    <!-- <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

@foreach($data as $all)
<div class="row justify-content-center p-3">
    <div class="col-md-4">
        <div class="card" style="width:100%">
            <div class="row">
                <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{$all->home1}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{$all->home2}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{$all->home3}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
                
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$all->dishName}}</h5>
                <p class="card-text">अपलोड किया गया समय : {{$all->time}}</p>
                <p class="card-text">खाने की किस्म : {{$all->type}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
        <iframe src="https://google.com/maps?q={{$all->latti}},{{$all->logi}}&h1=es;z=14&output=embed" style="width: 100%; height: 300px;"></iframe>

        </div>
    </div>
  @endforeach


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
                                alert("please allow to findout where is our student is ?");
                                location.reload();
                                break;
                        }
                    }
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>