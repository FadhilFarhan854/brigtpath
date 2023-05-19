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

    <main style="background-color: #ECF5FE">
    
        <div class="about-1">
            <h1>About US</h1>
            <br> <br> <br>
            <center>
                <img src="{{ asset('Asset/iso.png') }}" alt="" srcset="" style="width: 30%" >
            </center>
            <br><br><br>
            <h6>BRIGHTPATS</h6>
            <p> BrightPath adalah aplikasi layanan kebersihan yang dirancang untuk memudahkan pengguna dalam mencari dan 
                memesan jasa pembersihan profesional secara online. Aplikasi ini dibuat dengan tujuan untuk memberikan 
                solusi yang efisien dan mudah bagi orang-orang yang sibuk dan tidak memiliki waktu atau tenaga untuk 
                membersihkan rumah atau kantor mereka sendiri.
                BrightPath menyediakan layanan pembersihan yang beragam, mulai dari pembersihan rumah, kantor, apartemen,
                hingga pembersihan setelah renovasi. Tim pembersih yang bekerja dengan BrightPath terdiri dari profesional 
                yang terlatih dan berpengalaman dalam bidangnya, sehingga Anda dapat merasa tenang dan yakin bahwa rumah
                atau kantor Anda akan ditinggalkan bersih dan rapi.

            </p>
        </div>

        <div class="about-2">
            <div class="content-box-lg">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-item text-center">
                            <i class="fa fa-book"></i>
                            <h3>MISSION</h3>
                            <hr>
                            <p>
                                1. Kepuasan Pelanggan <br>
                                2. Menyediakan Layanan Terbaik. <br>
                                3. Kebersihan yang komperhensif. <br>
                                4. Inovasi dan perkembangan. <br>
                                5. Lingkungan yang berkelanjutan.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-item text-center">
                            <i class="fa fa-globe"></i>
                            <h3>VISSION</h3>
                            <hr>
                            <p>
                                1. Memberikan Layanan yang Berkualitas. <br>
                                2. Solusi Inovatif. <br>
                                3. Lingkungan Bersih dan Sehat. <br>
                                4. Meningkatkan kualitas Hidup. <br>
                                5. Kemitraan yang kuat.
                            </p>
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