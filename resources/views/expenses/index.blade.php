<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Daftar Pengeluaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Daftar Pengeluaran</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->id }}</td>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>
                        <a href="{{ url('/expenses/'.$expense->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ url('/expenses/'.$expense->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('/expenses/'.$expense->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/expenses/create') }}" class="btn btn-primary mb-4">Tambah Pengeluaran Baru</a>
    </div>
</body>
</html>
