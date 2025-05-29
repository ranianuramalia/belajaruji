<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
   

  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="{{ asset('storage/logo.png') }} " width="50" height="50">SMKN 4 TASIKMALAYA
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
      <form class="d-flex" >    
          <a class="nav-link" aria-current="page" href="profil.blade.php">PROFIL</a> &nbsp;
          <a class="nav-link" aria-current="page" href="#">VISI & MISI</a>&nbsp;
          <a class="nav-link" aria-current="page" href="#">DATA POKOK</a> &nbsp;
        
        <a class="nav-link active" aria-current="page" href="/admin/login">LOGIN</a>
      </form>
    </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>