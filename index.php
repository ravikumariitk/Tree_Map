<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tree Map | IITK</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <link rel="shortcut icon" href=".\img\logo.ico" type="image/x-icon" /> 

    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@600&family=Montserrat&display=swap" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <div id="main">
    <header>
      <div id="top-header">
      <img class="logo" src="img\logo.png" alt="Logo" />
      <!-- Navigation Menu -->
        <div class="float-end">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item" style="font-family: 'Figtree', sans-serif; margin-right: 20px;font-size: large;">
                  <a class="nav-link active" style="color: white;" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item"style="font-family: 'Figtree', sans-serif; margin-right: 20px;font-size: large;">
                  <a class="nav-link active" style="color: white;" aria-current="page" href="#categories">OUR TREES</a>
                </li>
                <li class="nav-item"style="font-family: 'Figtree', sans-serif; margin-right: 20px;font-size: large;">
                  <a class="nav-link active" style="color: white;" aria-current="page" href="#">ABOUT </a>
                </li>
              </ul>
            </div>
          </div>
        </nav></div>  
<!-- Navigation Menu End -->
      </div>
      <!-- <div id="tree" style=" font-family: Georgia, 'Times New Roman', Times, serif;">TREE MAP</div> -->
      <div id="tree" style=" font-family: 'Figtree', sans-serif;">Tree Map</div>
      <div id="auto" style="font-family: 'Figtree', sans-serif;" >Search for <em><span id="auto" class="auto-input"></span></em></div>
    </header><br>
    <div id="search">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><span class="material-symbols-outlined">
            search
          </span></span>
         <form name="form1" method="get" action="search.php" >
           <input type="search" name="query" class="form-control" placeholder="Search for trees here..." aria-label="Search" required
          aria-describedby="basic-addon1">
        </form>
      </div>
    </div>
  </div>
  <br><br>
  <div id="categories">
    <h2 style="font-family: 'Figtree', sans-serif;">Categories</h2>
    <hr>
    <div class="card mb-3" style="max-width: 80vw;">
      <div class="row g-0">
        <div class="col-md-4"> <!-- 333.2 x 267.11 -->
         <img class="imgCate"  src="img/medical.png" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Medical Trees</h5>
            <p class="card-text">Medical trees are graphical representations of medical information, often used to visualize and understand complex medical conditions and their treatment options. They can include details such as diagnosis, symptoms, prognosis, and potential interventions.</p>
            <p class="card-text"><small class="text-muted"><button type="button"
             class="btn btn-outline-success"> <a href="Medical.html" style="text-decoration: none; color: black;" >View</a></button></small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 80vw;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="imgCate" src="img/fruits.png" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Fruit Trees</h5>
            <p class="card-text">Fruit trees are plants that bear edible fruit, typically consisting of a sweet, juicy flesh surrounding a seed or seeds. They can include both deciduous and evergreen trees, and can be grown for their fruit, for ornamental purposes, or for both.</p>
            <p class="card-text"><small class="text-muted"><button type="button"
              class="btn btn-outline-success"> <a href="fruits.html" style="text-decoration: none; color: black;" >View</a></button></small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 80vw;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="imgCate" src="img/flower.png" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Flower Plants</h5>
            <p class="card-text">Flower trees are trees that are cultivated for their attractive and often fragrant flowers. They can be used for ornamental purposes in gardens, parks, and other landscaped areas, and can also be grown for their beauty, fragrance, or other characteristics.</p>
            <p class="card-text"><small class="text-muted"><button type="button"
              class="btn btn-outline-success"> <a href="flower.html" style="text-decoration: none; color: black;" >View</a></button></small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 80vw;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="imgCate" src="img/veggie.png" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Vegitable Trees</h5>
            <p class="card-text">Vegetable trees are trees that produce edible vegetables or vegetables that are used as ingredients in cooking. Some examples of vegetables that can be grown on trees include avocados, olives, and figs.</p>
            <p class="card-text"><small class="text-muted"><button type="button"
              class="btn btn-outline-success"> <a href="Veggis.html" style="text-decoration: none; color: black;" >View</a></button></small></p>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <footer id="footer">
    <div class="container">
      <h3>Tree Map</h4>
        <p><em>Thanks for visiting.</em></p>
        <div class="copyright">
          &copy; Copyright <strong><span>2022</span></strong>. No Rights Reserved
        </div><br>

    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  let typed = new Typed(".auto-input", {
    strings: ["Medical Trees", "Fruits Trees", "Flowers Plants", "Veggies"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
  })
</script>
</html>