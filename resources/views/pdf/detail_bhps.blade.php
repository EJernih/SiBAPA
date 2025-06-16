<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Stok BHP per Lab</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 30px;
        }

        header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        header img {
            width: 60px;
            height: auto;
            margin-right: 15px;
        }

        h2 {
            margin: 0;
            font-size: 18px;
        }

        .bhp-section {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #666;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .unit {
            font-style: italic;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<header>
    <img src="{{ public_path('storage/logo.png') }}" alt="Logo">
    <h2>Detail Stok BHP per Lab</h2>
</header>

@foreach ($data as $bhp)
    <div class="bhp-section">
        <h3>{{ $bhp['name_bhp'] }}</h3>
        <p class="unit"><strong>Unit:</strong> {{ $bhp['unit'] }}</p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lab</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bhp['labs'] as $index => $stock)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $stock['lab_name'] }}</td>
                        <td>{{ $stock['stock'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak ada stok di lab mana pun</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endforeach

</body>
</html>
