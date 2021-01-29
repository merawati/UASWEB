<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
</head>
<body>

  <div class="container">
      <h2 class="text-center"> Data PPDB SMAN CIBADAK</p></h2>
      <br>
      <br>
      <a href="/home/tambah" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">+Tambah Data</a>
      <br>
      <br>

      <table class="table table-sm">
          <thead>
            <tr class="bg-success text-center">
              <b><th scope="col">NO</th>
              <th scope="col">NAMA</th>
              <th scope="col">NISN</th>
              <th scope="col">TEMPAT LAHIR</th>
              <th scope="col">JENIS KELAMIN</th>
              <th scope="col">ASAL SEKOLAH</th>
              <th scope="col">OPSI</th></b>
            </tr>
          </thead>
          <tbody>
          <?php $no = 0;?>
            @foreach ($siswa as $m)
            <?php $no++ ;?>
              <tr>
              <td>{{ $no }}</td>
                  <td>{{ $m->nama_siswa}}</td>
                  <td>{{ $m->nisn}}</td>
                  <td>{{ $m->tempat_lahir}}</td>
                  <td>{{ $m->jenis_kelamin}}</td>
                  <td>{{ $m->lulusan}}</td>
                  <td> <a href="/home/edit/{{$m->jenis_kelamin}}" class="btn btn-dark btn-sm">Edit</a>
                  |
                      <a href="/home/delete/{{$m->jenis_kelamin}}" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
              </tr>
            </tbody>
            @endforeach
        </table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
