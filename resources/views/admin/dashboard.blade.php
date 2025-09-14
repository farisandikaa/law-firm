@extends('layouts.admin')

@section('title', 'Dashboard - HYP & Partners')

@section('content')
    <!-- Box Info -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6">
        <div class="bg-white shadow rounded-lg p-4 md:p-6">
            <h3 class="text-sm text-gray-500">Total Users</h3>
            <p class="text-xl md:text-2xl font-bold text-[#2b2b45]">{{ $totalUsers }}</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 md:p-6">
            <h3 class="text-sm text-gray-500">Articles</h3>
            <p class="text-xl md:text-2xl font-bold text-[#2b2b45]">{{ $totalArticles }}</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 md:p-6">
            <h3 class="text-sm text-gray-500">Visits</h3>
            <p class="text-xl md:text-2xl font-bold text-[#2b2b45]">{{ $totalVisits }}</p>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="bg-white shadow rounded-lg p-4 md:p-6">
        <h3 class="text-base md:text-lg font-bold mb-4">Articles per Month</h3>
        <div class="w-full overflow-x-auto">
            <canvas id="trafficChart" class="w-full max-h-[300px]"></canvas>
        </div>
    </div>

    @push('scripts')
    <script>
        const ctx = document.getElementById('trafficChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ($labels),   // label bulan
                datasets: [{
                    label: 'Articles',
                    data: ($data),   // jumlah artikel
                    borderColor: '#2b2b45',
                    backgroundColor: 'rgba(43,43,69,0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }},
                scales: { y: { beginAtZero: true }}
            }
        });
    </script>
    @endpush
@endsection
