<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <title>
    <?php
        //override page title relate to the page
        $pageurl = basename($_SERVER['PHP_SELF']);
        switch ($pageurl) {
            case 'index.php':
                echo "E404 Home";
                break;
            
            case 'contactus.php':
                echo "Contact Us";
                break;
            
            default:
                echo "Home";
        }
    ?>
    </title>

    <meta property="og:image" content="assets/img/scenery/image1.jpg">
    <meta name="description" content="E404 Unit Unavailable Official web Site.We are a gaming community in SriLanka.">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" sizes="320x127" href="assets/img/scenery/Untitdsdled-1.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark clean-navbar" style="color: var(--bs-indigo);background: var(--bs-indigo);">
        <div class="container"><a class="navbar-brand logo" href="#" style="background: url(&quot;assets/img/scenery/Untitdsdled-1.png&quot;) center / 100% no-repeat;color: rgba(255,255,255,0);width: 118.7656px;">E404</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog_post_list.php">blog</a></li>
                    <li class="nav-item"><a class="nav-link active" href="index.php#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>