<?php
include_once 'atas.php';

include_once 'class_bmipasien.php';
include_once 'atas.php';

$nama_siswa = $_POST['nama'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$umur = $_POST['umur'];
$gender = $_POST['gender'];


$list1 = ['nama' => 'Huda Robbani','gender' => 'Laki-Laki','umur' => 22, 'berat' => 75, 'tinggi' => 178];
$list2 = ['nama' => $nama_siswa,'gender' => $gender, 'umur' => $umur, 'berat' => $berat, 'tinggi' => $tinggi];

$list_siswa = [$list1, $list2];


?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>BMI</th>
                        <th>Hasil</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($list_siswa as $action) {
                        $bmiPasien = new BmiPasien($action['nama'],$action['umur'],$action['gender'],$action['berat'],$action['tinggi']);
                    ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <td><?= $action['nama'] ?></td>
                            <td><?= $action['gender'] ?></td>
                            <td><?= $action['umur'] ?></td>
                            <td><?= $action['berat'] ?></td>
                            <td><?= $action['tinggi'] ?></td>
                            <td><?= substr($bmiPasien -> statusBMI(), 0, 5) ?></td>
                            <td><?= $bmiPasien -> hasilBmi($bmiPasien -> statusBMI()) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include_once 'bawah.php';
?>