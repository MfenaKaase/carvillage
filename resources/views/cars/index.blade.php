<x-layout>
    <h1>All Cars</h1>
    <div class="container">
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-md-4 p-2 shadow-sm rounded">
                    <h2>{{ $car->name }}</h2>
                    <img src="{{ asset('storage/' . $car->photo) }}" alt="">
                    <p>{{ $car->year }}</p>
                    <div class="d-flex gap-2">
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                    </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
