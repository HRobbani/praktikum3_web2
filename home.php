<?php
include_once 'atas.php';
?>




<div class="row">
  <div class="col-md-12 mb-5">
    <h2 class="mt-5 text-center text-secondary">Aplikasi BMI</h2>
  </div>
  <div class="col-md-12 d-flex justify-content-center">
    <div class="card mb-3  w-75">
      <div class="card-header text-white bg-info">Form Input Nilai</div>
      <div class="card-body">
        <form action="data_bmi.php" method="POST">
          <div class="form-group row">
            <label class="col-4 col-form-label" for="name">Nama Lengkap</label>
            <div class="col-8">
              <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa">
            </div>
          </div>
          <div class="form-group row pt-4 pb-2">
            <label for="berat" class="col-4 col-form-label ">Berat Badan (kg)</label>
            <div class="col-8">
            <input id="berat" name="berat" type="text" class="form-control" placeholder="Berat Badan">
            </div>
          </div>
          <div class="form-group row pt-2 pb-4">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label>
            <div class="col-8">
              <input id="tinggi" name="tinggi" placeholder="Tinggi Badan" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row  pb-4">
            <label for="umur" class="col-4 col-form-label">Umur (tahun)</label>
            <div class="col-8">
              <input id="umur" name="umur" placeholder="Umur" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row  pb-4">
            <label for="tugas" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-Laki">
                <label class="form-check-label" for="gender">Laki-Laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
                <label class="form-check-label" for="gender">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
include_once 'bawah.php';
?>