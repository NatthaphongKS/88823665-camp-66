<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Multiplication Table</h1>
        <form action="{{ url('/generate-table') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Enter a number:</label>
                <input type="text" name="number" id="number" class="form-control" placeholder="Enter number">
            </div>
            <button type="submit" class="btn btn-primary">Generate Table</button>
        </form>

        @if (isset($table) && isset($number))
            <h3>Table for {{ $number }}</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Multiplier</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $multiplier => $result)
                        <tr>
                            <td>{{ $multiplier }}</td>
                            <td>{{ $result }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
