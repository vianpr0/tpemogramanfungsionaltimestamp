<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timestamp Conversion</title>
</head>
<body>
    <h1>Hasil Konversi Timestamp Yos </h1>
    <p><strong>Tanggal dan Waktu:</strong> {{ $dateTime }}</p>
    {{-- <p><strong>Timestamp Terkonversi:</strong> {{ $convertedTimestamp }}</p> --}}
    <p><strong>Formatted Date:</strong> {{ $formattedDate }}</p>
    <p><strong>Nama Bulan (Panjang):</strong> {{ $monthNames['long'] }}</p>
    <p><strong>Nama Bulan (Pendek):</strong> {{ $monthNames['short'] }}</p>
    <p><strong>Format Lengkap dengan Jam:</strong> {{ $fullDateTime }}</p>
    <p><strong>Format Singkat (Tanggal):</strong> {{ $shortDate }}</p>
</body>
</html>
