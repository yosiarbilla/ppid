<!DOCTYPE html>
<html lang="en">
<head>
    <base href = "/public"> 
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font-size: 50px;
            padding-bottom: 40px;
        }

        .form_container {
            display: flex;
            justify-content: center;
        }

        .form_box {
            width: 60%;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .text_color {
            color: black !important;
            width: 100%;
            height: 50px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .submit_btn {
            width: 100%;
            height: 50px;
            margin-top: 20px;
            font-size: 18px;
        }

        label {
            display: inline-block;
            width: 100%;
            padding-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @if(session()->has('message'))
                <div class = "alert alert-success">
                    <button type = "button" style="width:100px;" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="div_center">
                    <h1 class="font_size">UPDATE BERITA KIRI</h1>
                    <div class="form_container">
                        <!-- Add Berita Kiri -->
                        <div class="form_box">
                            <h2 class="text-success">UPDATE BERITA</h2>
                            <form action="{{url('/update_beritakiri_confirm',$berita->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label class="text-success">Headline:</label>
                                <input class="text_color" type="text" name="headline" placeholder="Masukkan Headline" required="" value="{{$berita->Headline}}">

                                <label class="text-success">Tanggal:</label>
                                <input class="text_color" type="text" name="date" placeholder="Masukkan Tanggal Contoh: 20 Agustus 2022" required=""value="{{$berita->Tanggal}}">

                                <label class="text-success">Deskripsi:</label>
                                <input class="text_color" type="text" name="description" placeholder="Masukkan Deskripsi" required=""value="{{$berita->Deskripsi}}">

                                <label class="text-success">Current Image:</label>
                                <img width="100" height="100" src="{{ url('/berita/' . $berita->Image) }}">
                                
                                <label class="text-success">Ganti Gambar:</label>
                                <input class="text_color1" style="color:green;" type="file" name="image">
                                <input type="submit" value="Update Berita" class="btn btn-primary submit_btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>
</html>
