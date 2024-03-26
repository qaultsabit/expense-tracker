<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Detail Pengeluaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Detail Pengeluaran</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $expense->id }}</h5>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $expense->description }}</p>
                <p class="card-text"><strong>Tanggal:</strong> {{ $expense->date }}</p>
                <p class="card-text"><strong>Jumlah:</strong> {{ $expense->amount }}</p>
                <a href="{{ url('/expenses') }}" class="btn btn-primary">Kembali ke Daftar Pengeluaran</a>
            </div>
        </div>
    </div>
</body>
</html>
