<!-- resources/views/components/summary.blade.php -->
<div class="card mb-4">
    <div class="card-header">
        <h4>Resumen de Reservación</h4>
    </div>
    <div class="card-body">
        <p><strong>Vuelo Seleccionado:</strong> {{ $selectedFlight }}</p>
        <p><strong>Hotel Seleccionado:</strong> {{ $selectedHotel }}</p>
        <p><strong>Número de Pasajeros:</strong> {{ $totalPassengers }}</p>
        <p><strong>Duración de la Estancia:</strong> {{ $totalNights }} noches</p>
        <p><strong>Total a Pagar:</strong> ${{ $totalAmount }}</p>
    </div>
</div>
