<!-- PHP INCLUDE -->
<?php
// include 'partials/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>SPOTIFY</title>
  </head>
  <body>
    <!-- APP -->
    <div id="app" class="">
      <!-- HEADER -->
      <header>
        <div class="container flex">
          <img src="./img/logo.png" alt="">
          <h1>MySpotify</h1>
        </div>
      </header>

      <!-- MAIN -->
      <main>
        <div class="container">
          <ul class="flex t-center">

            <!-- VUEJS PRINT -->
            <li v-for = "album in albums"  >
              <div class="poster">
                <img :src="album.poster" :alt="album.title">
              </div>
              <div class="title">
                <h4>{{album.title}}</h4>
              </div>
              <div class="author">
                <h4>{{album.author}}</h4>
              </div>
              <div class="year">
                <h4>{{album.year}}</h4>
              </div>
              <div class="genre">
                <h4>{{album.genre}}</h4>
              </div>
            </li>

            <!-- PHP PRINT -->
            <!-- <?php
            foreach ($database as $value) {?>
              <li class="t-center">
                <div class="poster">
                  <img src="<?php echo $value['poster'] ?>" alt="">
                </div>
                <div class="title">
                  <h4><?php echo $value['title'] ?></h4>
                </div>
                <div class="author">
                  <h4><?php echo $value['author'] ?></h4>
                </div>
                <div class="year">
                  <h4><?php echo $value['year'] ?></h4>
                </div>
                <div class="genre">
                  <h4><?php echo $value['genre'] ?></h4>
                </div>
              </li>
            <?php } ?> -->
            
          </ul>
        </div>
      </main>
    </div>

    <!-- JAVASCRIPT -->
    <script src="./dist/js/main.js" charset="utf-8"></script>
  </body>
</html>
