<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-8 mt-5">
<div class="col-md-12 text-center">
    <h2>Upload Wallpaper</h2>
</div>
<div class="col-md-12 mt-5 p-5">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Kirim</button>
    </div>
    </form>
</div>
            </div>
        </div>
    </div>

</body>

</html>