<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>foodpedia</title>
        <link rel="shortcut icon" href="assets/images/dish.png" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- css yang kubuat sendiri -->
        <link rel="stylesheet" href="websiteStyle.css">
    </head>

  <body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand tulisanLogo" href="#">FOODPEDIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">all menus</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="location.php" >location</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="reviews.php">reviews</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="bannerDepan">
            <center>
            <h1 class="tulisanJudul">FOODPEDIA RESTAURANT</h1>
            <p class="subJudul"><i>"rasakan kenikmatan hidangan terbaik dari kami"</i></p>
            </center>
        </div>
        
        <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-bottom: 16px; padding: 10px">
            <div class="col">
                <div class="card">
                <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/06/11/3650390209.jpg" class="card-img-top" alt="mastelo pizza">
                <div class="card-body">
                    <h5 class="card-title">Manstello Pizza</h5>
                    <p class="card-text">pizza dengan keju muzarella yang gurih di tambah potongan sayur yang lembut dengan citarasa yang mewah</p>
                    <h4>Rp 120.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://berkeluarga.id/media/2021/03/Hunian_Pengganti-Daging_Freepik-1200x675.jpg" class="card-img-top" alt="american burger">
                <div class="card-body">
                    <h5 class="card-title">American burger</h5>
                    <p class="card-text">burger khas amerika dengan daging steak yang nikmat ditambah sayuran yang meyegarkan lidah sealu sedap disantap</p>
                    <h4>Rp 52.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://cbsnews1.cbsistatic.com/hub/i/2015/07/01/0b059f60-344d-4ada-baae-e683aff3650a/istock000044051102large.jpg" class="card-img-top" alt="spagethi omelete">
                <div class="card-body">
                    <h5 class="card-title">Spagethi Omelete</h5>
                    <p class="card-text">omelete dengan saus italia nikmat dengan citarasa yang mengugah selera disajikan diatas spagethi dengan berbagai rempahan nikmat</p>
                    <h4>Rp 98.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2021/03/applebees-chicken-fajita-rollup.jpg" class="card-img-top" alt="applebees chiken fajita roll up">
                <div class="card-body">
                    <h5 class="card-title">Applebees chiken fajita</h5>
                    <p class="card-text">dengan bahan ayam terbaik dengan sayur cincangan nya ditambah bumu lezat didalam nya nikmati rasa gurih dan nikmat dalam balutan lezat</p>
                    <h4>Rp 216.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://www.al.com/resizer/VrdLzLRhYoWDCBnUSxs9iky6dgw=/450x0/smart/arc-anglerfish-arc2-prod-advancelocal.s3.amazonaws.com/public/NDLTPCRRHVAKFOBP2C2D4JGVVQ.jpg" class="card-img-top" alt="makaroni pedas manis">
                <div class="card-body">
                    <h5 class="card-title">Makaroni Pedas Manis</h5>
                    <p class="card-text">dengan kehagatan serta bumbu khusus yang mengugah selera ditambah dengan taburan keju dan daun mint menambah citarasa yang terbaik untuk disantap</p>
                    <h4>Rp 74.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://images.bisnis-cdn.com/posts/2020/05/23/1244102/kroket-unilever.jpg" class="card-img-top" alt="Japanese Kroket">
                <div class="card-body">
                    <h5 class="card-title">Japanse Keroket</h5>
                    <p class="card-text">berisi cacahan daging sapi di campur ayam serta potongan sayuran yang beragam ditambah hiasan daun sawi serta saus mayonise yang enak menambah semangat serta mood yang baik</p>
                    <h4>Rp 62.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://smokehouse220.com/wp-content/uploads/2017/02/bbqSteak.jpg" class="card-img-top" alt="spicy steak">
                <div class="card-body">
                    <h5 class="card-title">Spicy Steak</h5>
                    <p class="card-text">daging steak lezat ditambah saus pedas nikmat yang menambah citarasa dengam sayuran penyegar serta kentang penutup yang mengugah selera</p>
                    <h4>Rp 71.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/15/9e/05/d1/grilled-prawn.jpg" class="card-img-top" alt="grilled prawn">
                <div class="card-body">
                    <h5 class="card-title">Grilled Prawn</h5>
                    <p class="card-text">udang yang di panggang serta dilumuri saus dan ditaburi bumbu kaya akan rasa ditmbah saus nikmat dan sayuran yang menyegarkan menjadikan kenimatan tiada duanya</p>
                    <h4>Rp 93.000</h4>
                </div>
                </div>
            </div>
        </div>

    <div class="footer">
        <p>copyright &copy; rahman islam 2021</p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

  </body>
</html>
