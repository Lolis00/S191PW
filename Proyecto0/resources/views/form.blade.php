<form action="{{ isset($flight) ? route('flights.update', $flight->id) : route('flights.store') }}" method="POST">
    @csrf
    @if(isset($flight))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="flight_number" class="form-label">Número de Vuelo</label>
        <input type="text" name="flight_number" id="flight_number" class="form-control" 
            value="{{ old('flight_number', $flight->flight_number ?? '') }}" required>
        @error('flight_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="origin" class="form-label">Origen</label>
        <input type="text" name="origin" id="origin" class="form-control" 
            value="{{ old('origin', $flight->origin ?? '') }}" required>
        @error('origin')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="destination" class="form-label">Destino</label>
        <input type="text" name="destination" id="destination" class="form-control" 
            value="{{ old('destination', $flight->destination ?? '') }}" required>
        @error('destination')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="departure_date" class="form-label">Fecha de Salida</label>
        <input type="date" name="departure_date" id="departure_date" class="form-control" 
            value="{{ old('departure_date', $flight->departure_date ?? '') }}" required>
        @error('departure_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="airline" class="form-label">Aerolínea</label>
        <input type="text" name="airline" id="airline" class="form-control" 
            value="{{ old('airline', $flight->airline ?? '') }}" required>
        @error('airline')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input type="number" name="price" id="price" class="form-control" 
            value="{{ old('price', $flight->price ?? '') }}" required>
        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="seats_available" class="form-label">Asientos Disponibles</label>
        <input type="number" name="seats_available" id="seats_available" class="form-control" 
            value="{{ old('seats_available', $flight->seats_available ?? '') }}" required>
        @error('seats_available')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        {{ isset($flight) ? 'Actualizar Vuelo' : 'Crear Vuelo' }}
    </button>
</form>
