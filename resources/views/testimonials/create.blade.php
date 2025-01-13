<x-layout>
    <h1>Add Testimonial</h1>
    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Company -->
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company"
                value="{{ old('company') }}">
            @error('company')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Caption -->
        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" class="form-control @error('caption') is-invalid @enderror" id="caption" name="caption"
                value="{{ old('caption') }}">
            @error('caption')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Testimony -->
        <div class="mb-3">
            <label for="testimony" class="form-label">Testimony</label>
            <textarea class="form-control @error('testimony') is-invalid @enderror" id="testimony" name="testimony"
                rows="3">{{ old('testimony') }}</textarea>
            @error('testimony')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Position -->
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position"
                value="{{ old('position') }}">
            @error('position')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Photo -->
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Testimonial</button>
    </form>
</x-layout>
