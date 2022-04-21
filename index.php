<html leng="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Praktikum DKP 2021</title>
          <link rel="stylesheet" href="css/style.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <head>
     
     <body>
          <header>
               <h2 class="text-center">
                    Praktikum DKP: GUI PHP
               </h2>
          </header>

          <div class="wrapper">
               <div class="container bg-white">
                    <h2 class="container-header text-center">Tambah Data</h2>
                    <form class="form" action="hasil.php" method="post" id="form">
                         <div class="form-group form-book">
                              <label for="nama">Nama Mahasiswa</label>
                              <input type="text" id="title" name="nama" required>
                         </div>
                         <div class="form-group form-book">
                              <label for="nim">NIM Mahasiswa</label>
                              <input type="text" id="title" name="nim" required>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label for="jk">Jenis Kelamin</label>
                              <select class="form-select" aria-label="Default select example" name="jk" id="jk">
                                   <option selected>Pilih jenis kelamin</option>
                                   <option value="laki">Laki-laki</option>
                                   <option value="perempuan">Perempuan</option>
                              </select>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label for="pmntn">Peminatan</label>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check1" value="Software" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Software
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check2" value="Embedded" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Embedded System
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check3" value="Network" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Network
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check4" value="Multimedia" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Multimedia
                                   </label>
                              </div>
                         </div>
                         <input type="submit" value="Submit" name="Submit" class="btn-submit">
                    </form>
               </div>
          </div>
     </body>
</html>
