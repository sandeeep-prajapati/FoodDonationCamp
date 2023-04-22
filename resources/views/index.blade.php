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
                        <a class="nav-link active" href="#search">खाना ढूंढें</a>
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
        <div class="container">
            <!-- header title -->
            <div class="row p-2">
                <div class="col-md-1">

                </div>
                <div class="col-md-11">
                    <div class="row">
                        <h3>आपका अमूल्य योगदान असंख्य भूखे <br> व्यक्तियों के लिए अमृत के समान पोषण के स्रोत के <br> रूप में कार्य करता है</h3>
                    </div>
                </div>
            </div>
            <!-- header img -->
            <div class="row">
                <img style="border-radius: 30px;" src="new/img4.jpg" alt="" srcset="">
            </div>
            <!-- short introduction -->
            <div class="row p-4">
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                    <h1><b> क्या ? ,<br> कैसे और क्यों ?  </b></h1>
                    <h6 style="padding-top: 20px;">आज के समय में हमारे घरों में अक्सर भोजन की एक महत्वपूर्ण मात्रा बर्बाद हो जाती है, जबकि कई लोग भोजन की कमी के कारण भूखे रह जाते हैं। हमारी टीम बचे हुए भोजन को जरूरतमंद लोगों से जोड़ने के लिए हमारी वेबसाइट और एप्लिकेशन का उपयोग करके इस समस्या को हल करने के लिए समर्पित है। हम भोजन की बर्बादी को रोकने का प्रयास करते हैं और यह सुनिश्चित करते हैं कि कोई भी भूखा न रहे</h6>
                    <p style="padding-top: 30px;">क्या आपके पास हमारे लिए कोई सुझाव है?</p>
                    <form class="d-flex p-2" style="border-radius: 10px; background-color: rgb(180, 182, 185);"
                        role="search">
                        <input style="background-color: rgb(180, 182, 185); border: 0px;" class="form-control me-2"
                            type="search" placeholder="किसी संपर्क विवरण का उल्लेख करें " aria-label="Search">
                        <button style="padding: 0,30px; border-radius: 7px;" class="btn btn-primary" type="submit"><b
                                class="join">भेजें</b> </button>
                    </form>
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <!-- services intro -->
            <div class="row" style="padding-top: 50px;">
                <h2><b>हम कैसे काम करता है, <br> आप बिभीन भागो में देख सकते हैं </b> </h2>
            </div>
            <!-- card -->
            <div class="container" id ="services">
                <div class="row" style="padding-top: 40px;">
                    <div class="col-md-4 outline-success" style="padding-top: 20px; padding-bottom: 20px;">
                        <!-- <img class="m-2" style="height: 50px; width: 50px;" src="assets/icon2/pen-ruler-solid.svg"
                            alt="" srcset=""> -->
                        <br>
                        <p style="padding-top: 30px; padding-bottom: 30px;">
                        आप खुद को वेबसाइट पर पंजीकृत करें और आप अपने पास बचे हुए भोजन के बारे में जानकारी प्रदान कर सकते हैं और अपना संपर्क नंबर और पता भी साझा कर सकते हैं। इससे बचे हुए भोजन को लोगों तक पहुंचाने के हमारे प्रयासों को बढ़ाने में मदद मिलेगी। 
                        </p>
                        
                    </div>
                    <div class="col-md-4" style="padding-top: 20px; padding-bottom: 20px;">
                        <br>
                        <p style="padding-top: 30px; padding-bottom: 30px;">आपकी बहुमूल्य जानकारी हमें ज़रूरतमंद लोगों की पहचान करने और आपके अतिरिक्त भोजन को हमारी वेबसाइट के माध्यम से उनके साथ जोड़ने में सक्षम बनाएगी। डेटा अपलोड करके और हमें प्रासंगिक जानकारी प्रदान करके, हम इसका उपयोग उन लोगों के लाभ के लिए कर सकेंगे जिन्हें सहायता की आवश्यकता है। 
</p>
                        
                    </div>
                    <div class="col-md-4" style="padding-top: 20px; padding-bottom: 20px;">
                        <p style="padding-top: 30px; padding-bottom: 30px;">हमारी वेबसाइट की मदद से, जरूरतमंद व्यक्ति सहेजे गए भोजन तक पहुंचने के लिए आपके द्वारा प्रदान किए गए उपलब्ध विवरण से लाभान्वित हो सकते हैं।</p>
                        
                    </div>
                </div>
            </div>
            <!-- templates -->
            <div class="container">
                <div class="row" id="search">
                <form class="d-flex p-2 myForm" method="POST" action="home" style="border-radius: 10px; background-color: rgb(180, 182, 185);"
                        role="search">
                        @csrf
                        <input style="display: none;" type="text" name="logi"  value = "" require>                                           
                        <input style="display: none;" type="text" name="latti" value = "" require>   
                        <input style="background-color: rgb(180, 182, 185); border: 0px;" class="form-control me-2"
                            type="search" name="ids" placeholder="क्या आप भोजन ढूंढ रहे हैं" aria-label="Search">
                        <button style="padding: 0,30px; border-radius: 7px;" class="btn btn-primary" type="submit"><b
                                class="join">भेजें</b> </button>
                </form>
                </div>
                
                <div class="row" id="plane" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-md-6 custom">
                        <p class="text-danger"><b>अन्न दान महा दान। एक प्रयास। एक थाली खुशी वाली ।</b></p>
                        <h2>हम सब आपका स्वागत करते हैं<br></h2>
                        <p>आपका ये बहुमूल्य योगदान हमारे लिए अतुल्य है, <br> जो हमें और शक्ति देता है। </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="row" style="height: 180px;">

                                </div>
                                <div class="row kuch">
                                    <img style="width: 120%; height: 120%;" src="new/img1.jpg" alt=""
                                        srcset="">
                                </div>


                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row" style="padding-top: 20px">
                                    <img class="p-2"  src="new/img2.jpg" alt="">
                                </div>
                                <div class="row">
                                    <img class="p-2" src="new/img3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row new p-3">
                    <h3>
                    रोटी से विचित्र कुछ भी नहीं, <br> इंसान पाने के लिए भी दौड़ता हैं <br> और पचाने के लिए भी।

                    </h3>
                </div>
            </div>

            
        </div>


    </div>
    <div class="container-fluid bg-dark">
        <div class="row p-4">
            <div class="col-md-4">
                <div class="row text-center">
                    <p class="text-white"><a style="text-decoration : none;" class="text-white" href="/">होम</a></p>
                </div>
                <div class="row text-center">
                    <p class="text-white"><a style="text-decoration : none;" class="text-white" href="#services">सेवाए</a></p>
                </div>
                <div class="row text-center">
                    <p class="text-white"><a style="text-decoration : none;" class="text-white" href="#plane">हमारा नज़रिया</a></p>
                </div>
            </div>

            <div class="col-md-4 p-4 justify-content-center" >
                <h3 class="text-white text-center">Ehelptag</h3>
                <div class="row justify-content-center center">
                            <img style="width: 50px; height: auto;" src="assets/icons/instagram.svg" alt="" srcset="">
                        
                            <img style="width: 50px; height: auto;" src="assets/icons/linkedin.svg" alt="" srcset="">
                        
                            <img style="width: 50px; height: auto;" src="assets/icons/twitter.svg" alt="" srcset="">
                </div>

            </div>
        
            <div class="col-md-4 p-4">
                <div class="col-sm-12" style=" padding-bottom: 100px;">
                <div class="row">
                <form class="d-flex p-2 myForm" method="POST" action="home" style="border-radius: 10px; background-color: rgb(180, 182, 185);"
                        role="search">
                        @csrf
                        <input style="display: none;" type="text" name="logi"  value = "" require>                                           
                        <input style="display: none;" type="text" name="latti" value = "" require>   
                        <input style="background-color: rgb(180, 182, 185); border: 0px;" class="form-control me-2"
                            type="search" name="ids" placeholder="क्या आप भोजन ढूंढ रहे हैं" aria-label="Search">
                        <button style="padding: 0,30px; border-radius: 7px;" class="btn btn-primary" type="submit"><b
                                class="join">भेजें</b> </button>
                </form>
                </div>
            </div>

        </div>
    </div>
    </div>

    </div>

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