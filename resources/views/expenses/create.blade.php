<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Tambah Pengeluaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Tambah Pengeluaran Baru</h1>
        <form action="{{ url('/expenses') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <input type="text" id="description" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" id="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="amount">Jumlah:</label>
                <input type="number" id="amount" name="amount" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
