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
        <h3 class="panel-title">Data Siswa </h3>
      </br>

      </div>
      <?php echo form_open('site/form'); ?>
      <fieldset>
        <button type="submit"  class="btn btn-primary">Tambah Data Siswa</button>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center">Nama</th>
              <th scope="col" class="text-center">Nomor Induk Siswa</th>
              <th scope="col" class="text-center">Nomor Telepon</th>
              <th scope="col" class="text-center">Alamat</th>
              <th scope="col" class="text-center">Email</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data_siswa as $datasiswa) { ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $datasiswa->nama; ?></td>
              <td><?php echo $datasiswa->nis; ?></td>
              <td><?php echo $datasiswa->tlp; ?></td>
              <td><?php echo $datasiswa->alamat; ?></td>
              <td><?php echo $datasiswa->email; ?></td>
              <td class="text-center">
                  <a class="btn btn-raised btn btn-primary" href="<?php echo base_url().'site/edit/'.$datasiswa->id;?>">Edit</a>


                  <a  class="btn btn-raised btn-danger btn-sm"
                  onclick="return confirm('Yakin mau hapus siswa <?php echo $datasiswa->nama; ?>');"
                  href="<?php echo base_url().'site/hapus/'.$datasiswa->id;?>"> Hapus </a>
                </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </fieldset>
    <?php form_close(); ?>
    </div>
  </div>



</body>
</html>
