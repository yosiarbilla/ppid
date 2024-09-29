<!DOCTYPE html>
<html lang="en">
  <head>
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

        .table_container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px;
        }

        .table_box {
            width: 55%;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: fixed; /* Menjadikan lebar kolom tetap */
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
            overflow: hidden;
            text-overflow: ellipsis; /* Menampilkan "..." jika teks terlalu panjang */
            white-space: nowrap; /* Mencegah teks melakukan baris baru */
        }

        th {
            background-color: #007bff;
            color: black;
        }

        .table_title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: left;
            font-weight: bold;
        }
        .btn {
            display: block;
            width: 100%; /* Optional: agar tombol penuh selebar container */
             margin-bottom: 10px; /* Jarak antar tombol */
}
.content-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
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
                    <h1 class="font_size">Manage Berita</h1>
                    <div class="table_container">
                        <!-- Berita Kiri Table -->
                        <div class="table_box">
                            <h2 class="table_title" style="color:black">Berita Kiri</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th style="width:50px;">ID</th>
                                        <th>Headline</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($berita as $beritakiri)
                                    <tr style="color:black;">
                                        <td>{{ $beritakiri->id }}</td>
                                        <td>{{ $beritakiri->Headline }}</td>
                                        <td>{{ $beritakiri->Tanggal }}</td>
                                        <td>{{ $beritakiri->Deskripsi }}</td>
                                        <td><img src="/berita/{{ $beritakiri->Image }}" alt="Gambar" width="50"></td>
                                        <td>
                                        <form action="{{ url('/update_beritakiri', ['id' => $beritakiri->id]) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-primary">Edit</button>
                                        </form>

                                            
                                            <form action="{{ url('/delete_beritakiri', ['id' => $beritakiri->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Berita Kanan Table -->
                        <div class="table_box">
                            <h2 class="table_title" style="color:black">Berita Kanan</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th style="width:50px;">ID</th>
                                        <th>Headline</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($beritakanan as $berita)
                                    <tr style="color:black;">
                                        <td>{{ $berita->id }}</td>
                                        <td>{{ $berita->Headlinekanan }}</td>
                                        <td>{{ $berita->Tanggalkanan }}</td>
                                        <td>{{ $berita->Deskripsikanan }}</td>
                                        <td><img src="/beritakanan/{{ $berita->imagekanan }}" alt="Gambar" width="50"></td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <form action="{{ url('/delete_beritakanan', ['id' => $berita->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
