<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">
            <head>
    <style>
        .logo{
  max-width: 100px !important;
  width: 200% !important;
}
.offcanvas-body{
  background-color: #16A75C;
}
.offcanvas-header{
  background-color:#16A75C
}
.navbar{
  background-color: #16A75C;
}
.navbar-brand{
  color: white !important;
  font-weight: 500!important;
}
.navbar-nav{
  font-weight: normal;

}
.nav-link{
  color: #ffffff !important;
  font-weight: 500 !important;
}
.nav-link:hover{
  color: #ff9100!important;
}
.navbar .dropdown-menu-profil{
  background-color: #16A75C; /* Warna latar belakang */
  width: 200px!important;
  text-decoration: none;
  box-shadow: 0 3px 6px rgb(0, 0, 0, .23);
  border: none;
  border-radius: 10px;
  position: absolute;
  transition: all ease 0.5s;
}
.navbar .dropdown-menu-informasi{
  background-color: #16A75C; /* Warna latar belakang */
  width: 400px!important;
  text-decoration: none;
  box-shadow: 0 3px 6px rgb(0, 0, 0, .23);
  border: none;
  border-radius: 10px;
  position: absolute;
  transition: all ease 0.5s;
}
.navbar .dropdown-menu-standarlayanan{
  background-color: #16A75C; /* Warna latar belakang */
  width: 415px!important;
  text-decoration: none;
  box-shadow: 0 3px 6px rgb(0, 0, 0, .23);
  border: none;
  border-radius: 10px;
  position: absolute;
  transition: all ease 0.5s;
}
.navbar .dropdown-menu-laporan{
  background-color: #16A75C; /* Warna latar belakang */
  width: 295px!important;
  text-decoration: none;
  box-shadow: 0 3px 6px rgb(0, 0, 0, .23);
  border: none;
  border-radius: 10px;
  position: absolute;
  transition: all ease 0.5s;
}
.dropdown:hover .dropdown-menu-laporan {
  display: block;
  z-index: 99;
  opacity: 1;
  margin-top: 0;
  width: 100px;

}
.dropdown:hover .dropdown-menu-profil {
  display: block;
  z-index: 99;
  opacity: 1;
  margin-top: 0;
  width: 100px;

}
.dropdown:hover .dropdown-menu-informasi{
  display: block;
  z-index: 99;
  opacity: 1;
  margin-top: 0;
  width: 100px;
}
.dropdown:hover .dropdown-menu-standarlayanan {
  display: block;
  z-index: 99;
  opacity: 1;
  margin-top: 0;
  width: 100px;

}
.navbar .dropdown-item{
  color: white!important;
  text-decoration: 0;
  
}
.navbar .dropdown-item:hover {
  background-color: #16A75C;
  color: rgb(255, 119, 0) !important; /* Warna teks yang Anda inginkan */
}

.navbar-toggler{
  border:none;
  font-size: 1.25rem;
}
.navbar-toggler:focus{
  box-shadow: none;
  outline: none;
}
.login-button{
  background-color: orange;
  color:white;
  font-size: 14px;
  padding: 8px 20px;
  border-radius: 20px;
  text-decoration: none;
  transition: 0.3s background-color;
}
.login-button:hover{
  background-color: rgb(120, 86, 24);
}

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 24px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
            color: black;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .view-btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
        }

        .view-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
    <div class="container">
        <header>
            <h1>List ID, NIK dan Nama Pemohon</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($permohonaninformasipublik as $permohonan)
                <tr>
                <td>{{ $permohonan->id }}</td>
                <td>{{ $permohonan->nik }}</td>
                <td>{{ $permohonan->nama }}</td>
                    <td><form action="{{ url('/detail_permohonan_informasi_publik', ['id' => $permohonan->id]) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            </div>
        </div>
        <!-- partial -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>
