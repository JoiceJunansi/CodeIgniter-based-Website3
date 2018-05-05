<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="panel panel-default">

      <div class="panel-heading">
      </br>
      </br>
        <h3 class="panel-title">Input Data Siswa </h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url(); ?>site/insert" method="POST">
      <fieldset>
            <div class="form-group">
            <label for="inputNama" class="col-md-2 control-label">Nama Siswa</label>

            <div class="col-md-10">
              <input type="nama" class="form-control" name="inputNama" placeholder="Nama Siswa">
            </div>
          </div>

          <div class="form-group">
          <label for="inputNomorIndukSiswa" class="col-md-2 control-label">Nomor Induk Siswa</label>

          <div class="col-md-10">
            <input type="NomorIndukSiswa" class="form-control" name="inputNomorIndukSiswa" placeholder="Nomor Induk Siswa">

          </div>
        </div>

        <div class="form-group">
        <label for="inputNomorTelepon" class="col-md-2 control-label">Nomor Telepon</label>

        <div class="col-md-10">
          <input type="NomorTelepon" class="form-control" name="inputNomorTelepon" placeholder="Nomor Telepon">
        </div>
      </div>

      <div class="form-group">
      <label for="inputAlamat" class="col-md-2 control-label">Alamat</label>

      <div class="col-md-10">
        <input type="Alamat" class="form-control" name="inputAlamat" placeholder="Alamat">
      </div>
    </div>

    <div class="form-group">
     <label for="exampleInputEmail1" class="col-md-2 control-label">Email</label>


   <div class="col-md-10">
     <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp" placeholder="Email">
   </div>
    </div>

    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
