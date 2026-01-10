<script src="{{ asset('dist/admin/js/scripts.js') }}"></script>
<script src="{{ asset('dist/admin/js/custom.js') }}"></script>
<script src="{{ asset('dist/admin/js/chart.js') }}"></script>
<script>
const ctx = document.getElementById('myChart');
new Chart(ctx, {
    type: 'bar', // Options: 'line', 'pie', 'doughnut', 'radar', etc.
    data: {
        labels: ['Jan 01', 'Jan 02', 'Jan 03', 'Jan 04', 'Jan 05', 'Jan 06', 'Jan 07', 'Jan 08', 'Jan 09', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15', 'Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22', 'Jan 23', 'Jan 24', 'Jan 25', 'Jan 26', 'Jan 27', 'Jan 28', 'Jan 29', 'Jan 30', 'Jan 31'],
        datasets: [{
            label: '# of Sales',
            data: [12, 19, 3, 5, 2, 3, 7, 10, 15, 8, 6, 4, 9, 11, 14, 13, 16, 18, 17, 20, 22, 21, 24, 23, 25, 27, 26, 29, 28, 30, 31],
            backgroundColor: 'rgba(54, 162, 235, 0.7)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Sales Count (in USD)'
                }
            }
        }
    }
});
</script>