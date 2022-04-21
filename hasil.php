<html>
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
                  <h2 class="container-header text-center">Hasil Data</h2>
                  <table class="form">
                    <tr>
                      <td>Nama Mahasiswa </td> 
                      <td>: <?php echo $nama = $_POST['nama']; ?></td> 
                    </tr>
                    <tr>
                      <td>Nim Mahasiswa</td> 
                      <td>: <?php echo $nim = $_POST['nim']; ?></td> 
                    </tr>
                    <tr>                  
                      <td><br> 
                      <?php $jk = $_POST['jk'];
                      if ($jk == 'laki') {
                          $hasil = 'Selamat datang mas '.$nama; 
                          } else {
                          $hasil = 'Selamat datang mbak '.$nama;
                          }       
                          echo $hasil;
                      ?>
                          </td> 
                    </tr>
                    <tr>
                      <td>
                        Peminatan anda adalah : <br>
                        <?php 
                        if (isset($_POST['check1'])) {  
                          echo $_POST['check1']." <br/>";  
                            }  
                        if (isset($_POST['check2'])) {  
                          echo $_POST['check2']." <br/>";  
                            }  
                        if (isset($_POST['check3'])) {  
                          echo $_POST['check3']." <br/>";  
                            }  
                        if (isset($_POST['check4'])) {  
                          echo $_POST['check4']." <br/>";  
                            }  
                        ?>
                      </td>
                    </tr>
                  </table>
            </div>
      </div>      
     </body>
</html>
