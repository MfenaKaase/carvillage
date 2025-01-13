<x-layout>
    <h1>Add Car</h1>
    <form action="{{ route('cars.update', $car->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ $car->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Year -->
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year"
                value="{{ $car->year }}">
            @error('year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Transmission -->
        <div class="mb-3">
            <label for="transmission" class="form-label">Transmission</label>
            <input type="text" class="form-control @error('transmission') is-invalid @enderror" id="transmission"
                name="transmission" value="{{ $car->transmission}}">
            @error('transmission')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Body Type -->
        <div class="mb-3">
            <label for="body_type" class="form-label">Body Type</label>
            <input type="text" class="form-control @error('body_type') is-invalid @enderror" id="body_type"
                name="body_type" value="{{ $car->body_type}}">
            @error('body_type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Make -->
        <div class="mb-3">
            <label for="make" class="form-label">Make</label>
            <input type="text" class="form-control @error('make') is-invalid @enderror" id="make" name="make"
                value="{{ $car->make}}">
            @error('make')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Condition -->
        <div class="mb-3">
            <label for="condition" class="form-label">Condition</label>
            <input type="text" class="form-control @error('condition') is-invalid @enderror" id="condition"
                name="condition" value="{{ $car->condition}}">
            @error('condition')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Model -->
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model"
                name="model" value="{{ $car->model}}">
            @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ $car->price}}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $car->description}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Speed -->
        <div class="mb-3">
            <label for="speed" class="form-label">Speed</label>
            <input type="number" class="form-control @error('speed') is-invalid @enderror" id="speed"
                name="speed" value="{{ $car->speed}}">
            @error('speed')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Engine -->
        <div class="mb-3">
            <label for="engine" class="form-label">Engine</label>
            <input type="text" class="form-control @error('engine') is-invalid @enderror" id="engine"
                name="engine" value="{{ $car->engine}}">
            @error('engine')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Photo -->
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                name="photo">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Vehicle</button>
    </form>
</x-layout>
