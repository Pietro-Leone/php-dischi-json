<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <!-- CUSTOM STYLE SHEET FILE LINK -->
  <link rel="stylesheet" href="./style.css">

  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

  <div id="app">

    <!-- Navbar -->
    <nav class="navbar" style="background-color: #0e161e;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://static.vecteezy.com/system/resources/previews/022/100/989/original/spotify-logo-transparent-free-png.png" alt="Bootstrap" width="50" height="50">
        </a>
      </div>
    </nav>
    <!-- Container -->
    <div class="container h-100" style="background-color: #1d2d3c;">
      <div class="row justify-content-center pt-3">
        <div class="col mb-3 flex-grow-0" v-for="post in posts">
          <div class="card" style="width: 18rem;">
            <div class="p-4">
              <img :src="post.immagine" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ post.nome_album }}</h5>
              <h6 class="card-title">{{ post.nome_artista }}</h6>
              <h6 class="card-title">{{ post.anno_uscita }}</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>