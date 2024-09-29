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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - List ID, NIK dan Nama</title>
    <style>
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
<body>
    <div class="container">
        <header>
            <h1>List NIK dan Nama Pemohon</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234567890123456</td>
                    <td>John Doe</td>
                    <td>
                        <form action="{{ url('/', ['id' => $beritakiri->id]) }}" method="GET">
                            @csrf
                            <button class="btn btn-primary">Details</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2345678901234567</td>
                    <td>Jane Smith</td>
                    <td><a href="admin_dashboard.html?nik=2345678901234567" class="view-btn">Lihat Detail</a></td>
                </tr>
                <tr>
                    <td>3456789012345678</td>
                    <td>Robert Johnson</td>
                    <td><a href="admin_dashboard.html?nik=3456789012345678" class="view-btn">Lihat Detail</a></td>
                </tr>
                <!-- Add more rows as needed -->
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
