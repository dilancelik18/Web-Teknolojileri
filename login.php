<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <title>WEB</title>
  </head>
  <body>
      <header id="header">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="#">BURSA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="anasayfaa.html">Anasayfa</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                 <li class="nav-item">
                    <a class="nav-link" href="miras.html">Mirasımız</a>
                 <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                 <li class="nav-item">
                      <a class="nav-link" href="ilgialan.html">İlgi Alanlarım</a>  
                 <li class="nav-item">
                    <a class="nav-link" href="login.php">Giriş yap</a>
                 <li class="nav-item">
                    <a class="nav-link" href="contact.html">İletişim</a>
                 </li>
                </ul>
                
              </div>
            </div>
          </nav>
      </header>
      <main>
        <div class= "container">
          <form action="ayar.php" method="POST">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" name ="email" class="form-control" placeholder="Email giriniz" required="required">
           </div>
           <div class="form-group " >
              <label for="password" >Şifre</label>
              <input type="text" name ="password" class="form-control" placeholder="Şifre giriniz" required="required">
           </div>

<button class="btn btn btn-warning" type="submit">Gönder</button>
</form>
</main>

      <footer class="py-2 bg-dark text-white text-center">
        web-teknolojileri-projesi Dilan ÇELİK 2021
      </footer>
          <!-- Optional JavaScript; choose one of the two! -->
      
          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
      
          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
          -->
          
        </body>
      </html>
   
