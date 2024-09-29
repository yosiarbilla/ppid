<!DOCTYPE html>
< lang="en">

<head>
<head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>PPID JABAR</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


      <!-- Tambahkan sebelum penutup body tag -->


   </head>
    <style>
        

        body {
    padding-top: 0px; /* Sesuaikan dengan tinggi navbar Anda */
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    overflow: auto;
    flex-direction: column;
    height: 100%;
}
        .header {
            background-color: #16A75C;
            width: 100%;
            padding: 20px;
            text-align: center;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
    margin-top: 100px!important; /* Tambahkan margin-top atau padding-top untuk menggeser konten ke bawah */
    padding-top: 20px;
    width: 80%;
    max-width: 800px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 0px;
        }

        .form-group {
            flex: 1 1 100%;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group textarea,
        .form-group select,
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .form-group .warning {
            color: red;
            font-size: 12px;
        }

        .upload-instructions {
            font-size: 14px;
            color: #666;
            text-align: center;
            margin-top: 10px;
        }

        .options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .options label {
            font-size: 14px;
        }

        .submit-btn {
            background-color: #5a5a5a;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #434343;
        }

        .file-upload-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    background-color: #f0f0f0;
    text-align: center;
    width: 100%;
    max-width: 100%;
    box-sizing: border-box; /* Prevents the padding from adding to the width */
}

.file-upload-wrapper label {
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    text-align: center;
    width: 100%;
}

        .file-upload-wrapper label img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .file-upload-wrapper input[type="file"] {
            display: none;
        }
        .file-upload-wrapper .icon {
    margin-right: 10px;
    font-size: 24px;
}


        /* Styling for the image preview */
        .file-upload-wrapper img {
            display: block;
            max-width: 100%;
            max-height: 200px;
            margin: 10px auto;
            border-radius: 5px;
            object-fit: cover;
        }
        #ktp-preview {
    max-width: 100%;   /* Limits the image to the container width */
    max-height: 200px; /* Adjust the height limit */
    margin-top: 10px;
    object-fit: cover;
    border-radius: 5px;
    overflow: hidden;
}
    </style>
</head>

<body>
    <div class="kepala">
        @include('home.header')
    </div>

    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" style="width:100px;" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif
        <form action="{{ url('/add_permohonan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nik">NIK/No.Identitas Pribadi</label>
                <input type="text" id="nik" name="nik" placeholder="Masukan NIK/No.Identitas Pribadi">
                <small class="warning">* Mohon pastikan NIK yang anda masukan sesuai dengan no NIK KTP</small>
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda">
            </div>

            <div class="form-group">
                <label for="upload-ktp">Upload KTP Pribadi</label>
                <div class="file-upload-wrapper">
                    <label for="upload-ktp">
                        <i class='bx bxs-cloud-upload icon'></i>
                        <h3>Upload KTP Pribadi</h3>
                    </label>
                    <input id="upload-ktp" type="file" name="imagektp" accept="image/*" onchange="previewKtp(event)">
                    <img id="ktp-preview" style="display: none;" />
                </div>
                <p class="upload-instructions">Upload File KTP Pribadi or Drag File KTP Pribadi <br> Max Upload 2 Mb</p>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukan Alamat Email Anda">
            </div>

            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="tel" id="telepon" name="telepon" placeholder="Masukan Nomor Telepon Anda">
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan Anda">
            </div>

            <div class="form-group">
                <label for="rincian">Rincian Informasi</label>
                <textarea id="rincian" name="rincian" placeholder="Masukan Rincian Informasi"></textarea>
            </div>

            <div class="form-group">
                <label for="tujuan">Tujuan Penggunaan Informasi</label>
                <textarea id="tujuan" name="tujuan" placeholder="Masukan Tujuan Penggunaan Informasi"></textarea>
            </div>

            <div class="form-group">
                <label>Cara Memperoleh Informasi</label>
                <div class="options">
                    <label><input type="radio" name="cara" value="melihat"> Melihat</label>
                    <label><input type="radio" name="cara" value="membaca"> Membaca</label>
                    <label><input type="radio" name="cara" value="mendengarkan"> Mendengarkan</label>
                    <label><input type="radio" name="cara" value="mencatat"> Mencatat</label>
                </div>
            </div>

            <div class="form-group">
                <label>Mendapatkan Salinan Informasi</label>
                <div class="options">
                    <label><input type="radio" name="salinan" value="softcopy"> Softcopy</label>
                    <label><input type="radio" name="salinan" value="hardcopy"> Hardcopy</label>
                </div>
            </div>

            <div class="form-group">
                <label>Cara Mendapatkan Salinan Informasi</label>
                <div class="options">
                    <label><input type="radio" name="carasalinan" value="langsung"> Mengambil Langsung</label>
                    <label><input type="radio" name="carasalinan" value="faksimili"> Faksimili</label>
                    <label><input type="radio" name="carasalinan" value="email"> Email</label>
                </div>
            </div>

            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

    <script>
        function previewKtp(event) {
            const preview = document.getElementById('ktp-preview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>
