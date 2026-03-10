<body class="container mt-5">
    <div class="row border p-4 shadow-sm">
        <div class="col-md-9">
            <h3>{{ $student->first_name }} {{ $student->last_name }}</h3>
            <p><strong>Descripción:</strong> {{ $student->description }}</p>
        </div>
        <div class="col-md-3 text-center">
            <label class="d-block fw-bold mb-2">Avatar:</label>
            <img src="{{ asset('storage/' . $student->picture) }}" class="img-fluid border" style="max-height: 250px;">
        </div>
    </div>
</body>