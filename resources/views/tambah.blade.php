<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tambah.css">
    <body>
        <title>Tambah Data Siswa</title>
            <div class="container p-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-secondary"> <b>TAMBAH DATA MAHASISWA</b> </div>
                            <div class="card-body">
                              <form action="/home/store" method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-group row">
                                    <label class="col-md-4 text-md-right">NISN</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nisn" class="form-control">
                                    </div>
                                </div>
                                  <div class="form-group row">
                                      <label class="col-md-4 text-md-right">NAMA SISWA</label>
                                      <div class="col-md-6">
                                          <input type="text" name="namasiswa" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-4 text-md-right">TEMPAT LAHIR</label>
                                    <div class="col-md-6">
                                        <input type="text" name="tempatlahir" class="form-control">
                                    </div>
                                </div>
                                  <div class="form-group row">
                                      <label class="col-md-4 text-md-right">JENIS KELAMIN</label>
                                      <div class="col-md-6">
                                          <select name="jeniskelamin" class="form-control">
                                              <option value="lakilaki">Laki-Laki</option>
                                              <option value="perempuan">Perempuan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-md-4 text-md-right">ASAL SEKOLAH</label>
                                      <div class="col-md-6">
                                          <input type="text" name="asalsekolah" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-md-4 text-md-right"></label>
                                      <div class="col-md-6">
                                          <button class="btn btn-dark" type="submit">Simpan</button>
                                      </div>
                                  </div>
                              </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </head>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
