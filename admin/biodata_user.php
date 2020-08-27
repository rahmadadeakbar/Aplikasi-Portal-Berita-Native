<?php include 'header.php'; ?>

<?php
function tambah($koneksi)
{
    if (isset($_POST['input_biodata'])) {
        $id = uniqid();
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama_user'];
        $tpt_lahir = $_POST['tempat_lahir'];
        $tanggal = $_POST['tgl_lahir'];
        $jk = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        $foto = $_FILES["foto"]["name"];
        $format = explode(".", $foto);
        $fileExtension = end($format);
        $nama_sementara = $_FILES['foto']['tmp_name'];
        $md5file = md5($foto) . "." . $fileExtension;
        $lokasi_upload = "upload/biodata/";
        $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload . $md5file);
        if ($fungsi_upload) {
            echo '';
        } else {
            echo '<script>alert("gagal di upload")</script>';
        }

        $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES(md5('$id'),'$nama','$tanggal','$tpt_lahir','$jk','$alamat','$md5file','$id_user')");

        if ($query_input) {
            echo '<script>alert("data berhasil di input")
            window.location.href="biodata_user.php";
            window.history.back();
           
          </script>';
        } else {
            echo '<script>alert("data gagal di input")
            window.location.href="biodata_user.php";
          </script>';
        }
    }

?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Data Kategori</h4>
                            <p class="card-description">
                                Masukkan Kategori
                            </p>

                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">


                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih User</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                        <?php

                                        $show = mysqli_query($koneksi, "SELECT * FROM user");

                                        while ($data = mysqli_fetch_array($show)) {

                                        ?>
                                            <option value="<?= $data['id_user'] ?>"><?= $data['username'] . ' - ' . $data['level'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputName1">Nama User</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama_user" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="tempat_lahir" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="exampleInputName1" placeholder="Name" name="tgl_lahir" value="" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Laki-Laki</label>
                                    <input type="radio" class="form-control" id="exampleInputName1" placeholder="Name" name="jenis_kelamin" value="Laki-Laki" required>
                                    <label for="exampleInputName1">Perempuan</label>
                                    <input type="radio" class="form-control" id="exampleInputName1" placeholder="Name" name="jenis_kelamin" value="perempuan" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat</label>
                                    <textarea name="alamat" id="" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>


                                <button type="submit" class="btn btn-success mr-2" type="submit" name="input_biodata">Submit</button>
                                <button class="btn btn-light" type="reset">Reset</button>
                            </form>

                        </div>
                    </div>
                </div>



                <!-- function menampilkan data di table -->
                <?php
                function tampil_data($koneksi)
                {
                    $sql =  "SELECT * FROM biodata";
                    $query = mysqli_query($koneksi, $sql);
                ?>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Biodata</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-border data">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>tempat Lahir</th>
                                                <th>Alamat</th>
                                                <th>foto</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($query)) { ?>

                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $data['nama'] ?></td>
                                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                                    <td><?php echo $data['tempat_lahir'] ?></td>
                                                    <td><?php echo $data['alamat'] ?></td>
                                                    <td>
                                                        <a href="upload/biodata/<?php echo $data['foto'] ?>" target="blank" class="btn btn-info">foto</a>
                                                    </td>

                                                    <td>
                                                        <a href="biodata_user.php?aksi=update&id=<?php echo $data['id_biodata']; ?>&nama=<?php echo $data['nama']; ?>&tanggal=<?php echo $data['tanggal_lahir']; ?>&tempat=<?php echo $data['tempat_lahir']; ?>&jk=<?php echo $data['jenis_kelamin']; ?>&alamat=<?php echo $data['alamat']; ?>&id_user=<?php echo $data['id_user'] ?>" class="btn btn-warning">Edit</a>
                                                        <a href="biodata_user.php?aksi=delete&id=<?php echo $data['id_biodata']; ?>" class=" btn btn-danger delete-link">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- close table -->
            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                    <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                    <i class="mdi mdi-heart text-danger"></i>
                </span>
            </div>
        </footer>
        <!-- partial -->
    </div>

<?php
                }
            }

?>


<?php
function ubah($koneksi)
{
    if (isset($_POST['ubah_biodata'])) {

        $id_biodata = $_POST['id_biodata'];
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama_user'];
        $tempat = $_POST['tempat_lahir'];
        $tanggal = $_POST['tgl_lahir'];
        $jk = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $foto_sementara = !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';
        if ($foto_sementara != null) {

            $foto = $foto_sementara;
            $format = explode(".", $foto);
            $fileExtension = end($format);
            $nama_sementara = $_FILES['foto']['tmp_name'];
            $md5file = md5($foto) . "." . $fileExtension;
            $lokasi_upload = "upload/biodata/";
            $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload . $md5file);
            if ($fungsi_upload) {
                echo '';
            } else {
                echo '<script>alert("gagal di upload")</script>';
            }
        } else {
            $show = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id_biodata='$id_biodata'");
            $data = mysqli_fetch_array($show);
            $md5file = $data['foto'];
        }

        // querynya
        if (!empty($nama)) {
            $query_update = mysqli_query($koneksi, "UPDATE biodata SET nama='$nama', tanggal_lahir='$tanggal', tempat_lahir='$tempat',jenis_kelamin='$jk',alamat='$alamat',foto='$md5file',id_user='$id_user' WHERE id_biodata='$id_biodata'");
            if ($query_update && isset($_GET['aksi'])) {
                if ($_GET['aksi'] == 'update') {
                    echo '<script>alert("data berhasil di update")
                  window.location.href="biodata_user.php";
                </script>';
                }
            } else {
                echo '<script>alert("data gagal di update")</script>';
            }
        }
    }

    if (isset($_GET['id'])) {

?>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Data Kategori</h4>
                    <p class="card-description">
                        Masukkan Kategori
                    </p>

                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id_biodata" value="<?php echo $_GET['id'] ?>">


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih User</label>
                            <?php if (!empty($_GET['id_user'])) { ?>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                    <?php

                                    $id = $_GET['id_user'];
                                    $show = mysqli_query($koneksi, "SELECT * FROM user");

                                    while ($data = mysqli_fetch_array($show)) {

                                    ?>
                                        <option <?php echo ($data['id_user'] == "$id") ? 'selected' : '' ?> value="<?= $data['id_user'] ?>"><?= $data['username'] . ' - ' . $data['level'] ?></option>
                                    <?php } ?>

                                </select>
                                <?php} else{?>

                            <?php } ?>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputName1">Nama User</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama_user" value="<?= $_GET['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tempat Lahir</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="tempat_lahir" value="<?= $_GET['tempat'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputName1" placeholder="Name" name="tgl_lahir" value="<?= $_GET['tanggal'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Laki-Laki</label>
                            <input type="radio" class="form-control" id="exampleInputName1" placeholder="Name" name="jenis_kelamin" value="<?php echo !empty($_GET['jk'] == "Laki-Laki") ? $_GET['jk'] : '' ?>" <?php echo !empty($_GET['jk'] == "Laki-Laki") ? 'checked' : '' ?> required>
                            <label for="exampleInputName1">Perempuan</label>
                            <input type="radio" class="form-control" id="exampleInputName1" placeholder="Name" name="jenis_kelamin" value="<?php echo !empty($_GET['jk'] == "Perempuan") ? $_GET['jk'] : '' ?>" <?php echo !empty($_GET['jk'] == "Perempuan") ? 'checked' : '' ?> required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <textarea name="alamat" id="" class="form-control"><?= $_GET['alamat'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-success mr-2" type="submit" name="ubah_biodata">Submit</button>
                        <button class="btn btn-light" type="reset">Reset</button>
                    </form>

                </div>
            </div>
        </div>



<?php
    }
}

?>




<?php
function hapus($koneksi)
{

    if (isset($_GET['id']) && isset($_GET['aksi'])) {
        $id = $_GET['id'];

        $tampil = mysqli_query($koneksi, "SELECT foto FROM biodata WHERE id_biodata='$id'");

        $data = mysqli_fetch_array($tampil);

        unlink("upload/biodata/" . $data['foto']);

        $query_hapus = mysqli_query($koneksi, "DELETE FROM biodata WHERE id_biodata='$id'");
        if ($query_hapus) {
            if ($_GET['aksi'] == 'delete') {
                echo '<script>alert("Data Berhasil dihapus")
          window.location.href="biodata_user.php";
        </script>';
            }
        } else {
            echo '<script>alert("data gagal di hapus")</script>';
        }
    }
}
?>

<?php

// logika proses aksinya
if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
        case "create":
            tambah($koneksi);
            tampil_data($koneksi);
            break;
        case "read":
            tampil_data($koneksi);
            break;
        case "update":
            ubah($koneksi);
            tampil_data($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>" . $_GET['aksi'] . "</i> tidak ada!</h3>";
            tambah($koneksi);
            tampil_data($koneksi);
    }
} else {
    tambah($koneksi);
    tampil_data($koneksi);
}

?>


<?php include 'footer.php'; ?>

<script>
    jQuery(document).ready(function($) {
        $('.delete-link').on('click', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Are you sure?",
                text: 'Hapus Data?',
                type: "warning",
                html: true,
                confirmButtonColor: '#d9534f',

                confirmButtonColor: "#DD6B55",
                showCancelButton: true,
            }, function() {
                window.location.href = getLink
            });
            return false;
        });
    });
</script>
</body>

</html>