import Chart from 'chart.js/auto';

// Monthly Trends Chart
export function initMonthlyTrendsChart(canvasId) {
    const ctx = document.getElementById(canvasId);
    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Budget (target)',
                    data: [40, 75, 80, 75, 55, 40],
                    borderColor: '#f59e0b',
                    backgroundColor: 'transparent',
                    tension: 0.4,
                    borderWidth: 2,
                },
                {
                    label: 'Schools',
                    data: [35, 65, 70, 45, 55, 35],
                    borderColor: '#6366f1',
                    backgroundColor: 'transparent',
                    tension: 0.4,
                    borderWidth: 2,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        stepSize: 20
                    }
                }
            }
        }
    });
}

// Badge Distribution Chart
export function initBadgeDistributionChart(canvasId) {
    const ctx = document.getElementById(canvasId);
    if (!ctx) return;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Math Wiz', 'Science Pro', 'Art of Chem...', 'Literature Hero', 'Science Ace', 'STEM Explorer', 'Debate Ace', 'Science Lab', 'Literature Hero', 'Port in Storm'],
            datasets: [{
                label: '2025',
                data: [40, 20, 60, 20, 35, 85, 10, 85, 50, 70],
                backgroundColor: '#818cf8',
                borderRadius: 4,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        stepSize: 20
                    }
                },
                x: {
                    ticks: {
                        maxRotation: 45,
                        minRotation: 45
                    }
                }
            }
        }
    });
}

// Initialize all charts
export function initAllCharts() {
    initMonthlyTrendsChart('monthlyTrendsChart');
    initBadgeDistributionChart('badgeDistributionChart');
}

// Auto-initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAllCharts);
} else {
    initAllCharts();
}

