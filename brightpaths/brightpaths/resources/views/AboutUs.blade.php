<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="StyleAboutUs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>AboutUS</title>
</head>

<body>
    <Header>
        {{-- header --}}
        <div class="container-fluid" style="margin-right:0%;margin-left:0%; background-color:#1d1d1d; " >
            <nav class="navbar navbar-expand-lg navbar-light " >
            <a class="navbar-brand" href="#"><img src="{{ asset('Asset/logo.jpeg') }}" alt="" class="foto" style="width: 20%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="color:white">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="https://docs.google.com/document/d/12Gm37zjjLY_ztxgjz1LDyrXLAVxongs9/edit?usp=share_link&ouid=116704987552569170973&rtpof=true&sd=true"style="color:white">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"style="color:white">About Us</a>
                </li>
                </ul>
            </div>
            <div class="justify-content-end">
                <a href="/LamanPemesanan" class="btn btn-light">Book in 60 second</a>
            </div>
            </nav>
        </div>
    </Header>

    {{-- main --}}

    <main>
    
        <div class="about-1">
            <h1>About US</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio explicabo ipsum incidunt numquam illum,
            neque eos quisquam iure beatae, exercitationem veniam aliquam fuga ad, inventore quas voluptate? Animi, eaque?</p>
        </div>

        <div class="about-2">
            <div class="content-box-lg">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-item text-center">
                            <i class="fa fa-book"></i>
                            <h3>MISSION</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequatur repudiandae ut nemo. Possimus dolorem 
                            eius similique! Optio dolore consequuntur magni blanditiis esse temporibus, quam sequi et quasi, eos saepe.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center">
                            <i class="fa fa-globe"></i>
                            <h3>VISSION</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequatur repudiandae ut nemo. Possimus dolorem 
                            eius similique! Optio dolore consequuntur magni blanditiis esse temporibus, quam sequi et quasi, eos saepe.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center">
                            <i class="fa fa-pencil"></i>
                            <h3>ACHIEVEMENTS</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequatur repudiandae ut nemo. Possimus dolorem 
                            eius similique! Optio dolore consequuntur magni blanditiis esse temporibus, quam sequi et quasi, eos saepe.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center">
            <p>Copyright &copy; 2022 All rights reserved by D’Hormes</p>
        </footer>

</body>
</html>