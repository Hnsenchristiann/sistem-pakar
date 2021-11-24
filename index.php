<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="website sistem pakar">
      <meta name="author" content="mr k">

      <title>Sistem Pakar</title>

      <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

  </head>
  <body>
        <div>
          <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; border-radius: 20px; padding: 50px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="bg-info mt-16">
            <section class="text-white">
              <h3 class="text-center">Selamat datang di Interest Test</h3>
              <br />
              <p class="text-justify">Website ini bertujuan untuk menentukan jurusan yang cocok
              dengan anda berdasarkan minat dan juga bakat yang anda miliki
              untuk memulai tes, klik start test ya !!</p>
            </section>

            <div class="pt-3" style="display: flex; align-items: center; justify-content: center;" >
              <div class="px-2">
                <button style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" type="button" class="btn btn-lg btn-dark" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Start Test</button>
              </div>
              <div class="px-2">
                <button style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" type="button" class="btn btn-lg btn-dark" data-whatever="@getbootstrap"><a href="about.php" class="text-white" style="text-decoration: none;">About</a></button>
              </div>
            </div>
          </div>
        </div>
    
      <main role="main">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Nama Kamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Anda</label>
                    <input type="text" name="nama" class="form-control" id="input-ame" placeholder="Silahkan Isi Nama Anda" required autofocus >
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Umur Anda</label>
                    <input type="number" name="umur" class="form-control col-sm-8" placeholder="Silahkan Isi Umur" required >
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Lanjut</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

        <div class="container marketing">

      </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

  </body>
</html>