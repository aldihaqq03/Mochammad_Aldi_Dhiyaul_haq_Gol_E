<!DOCTYPE html>
<html>
<head>
    <title>1RM Calculator</title>
</head>
<body>
    <h1>Hitung 1RM Dips</h1>
    
    <form method="GET" action="/">
        <div>
            <label>Berat Badan (kg):</label><br>
            <input type="number" name="bodyweight" value="{{ $bodyweight ?? '' }}">
        </div>
        
        <div>
            <label>Beban Tambahan (kg):</label><br>
            <input type="number" name="weight" value="{{ $weight ?? '' }}">
        </div>
        <div>
            <label>Jumlah Reps:</label><br>
            <input type="number" name="reps" value="{{ $reps ?? '' }}">
        </div>
        
        <br>
        <button type="submit">Hitung</button>
    </form>
    @if(isset($hasilORM))
    <br>
    <h3>Hasil:</h3>
    <p>1RM Anda: <strong>{{ $hasilORM }} kg</strong></p>
    @endif
</body>
