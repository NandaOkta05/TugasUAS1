<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tambah Pelanggan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./quixlab-master/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="content-body">
        <div class="row"></div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Pelanggan</h4>
                    <p class="text-muted m-b-15 f-s-12"></p>
                    <div class="basic-form">
                        <form action="pelanggan-list3.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="nohp">No. HP:</label>
                                <input type="text" class="form-control" id="nohp" name="nohp" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                            <a href="pelanggan-list3.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
    Content body end
    ***********************************-->
    <!--**********************************
    Scripts
    ***********************************-->
    <script src="./quixlab-master/plugins/common/common.min.js"></script>
    <script src="./quixlab-master/js/custom.min.js"></script>
    <script src="./quixlab-master/js/settings.js"></script>
    <script src="./quixlab-master/js/gleek.js"></script>
    <script src="./quixlab-master/js/styleSwitcher.js"></script>

    <?php require 'sidebar.php'; ?>
</body>
</html>
