<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">
    <title> <?= $data["page"] ?> | MyGalery</title>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5000ca" fill-opacity="1" d="M0,320L48,309.3C96,299,192,277,288,245.3C384,213,480,171,576,176C672,181,768,235,864,
            229.3C960,224,1056,160,1152,160C1248,160,1344,224,1392,256L1440,288L1440,0L1392,0C1344,0,
            1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <div class="container fixed-top">
        <nav class="navbar navbar-expand-sm navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL ?>/home">
                    <h1><b>MyGalery</b></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASEURL ?>/Galery">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASEURL ?>/about">About</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>