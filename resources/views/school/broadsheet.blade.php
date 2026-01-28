@extends('layouts.school', ['active' => 'broadsheet'])

@section('title', 'Broadsheet')

@section('content')
<div class="p-8 space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">
                Broadsheet: {{ $class->code ?? 'JSS1A' }} - {{ $session->term ?? 'Second Term' }}, {{ $session->name ?? '2024/2025' }}
            </h2>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                Export PDF
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export Excel
            </button>
            <button class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-teal-700 flex items-center" style="background-color: #FDAF22;">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                </svg>
                Print Broadsheet
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
        <!-- Class Average -->
        <div class="bg-white rounded-lg border-2 p-4" style="border-color: #9333EA;">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['class_average'] }}%</p>
                <p class="text-sm text-teal-600 mt-1">Class Average</p>
            </div>
        </div>

        <!-- Top Student -->
        <div class="bg-white rounded-lg border-2 p-4" style="border-color: #22C55E;">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['top_student']['average'] }}%</p>
                <p class="text-sm text-teal-600 mt-1">Top Student {{ $stats['top_student']['name'] }}</p>
            </div>
        </div>

        <!-- Lowest Student -->
        <div class="bg-white rounded-lg border-2 p-4" style="border-color: #EF4444;">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['lowest_student']['average'] }}%</p>
                <p class="text-sm text-teal-600 mt-1">Lowest Student ({{ $stats['lowest_student']['name'] }})</p>
            </div>
        </div>

        <!-- Top Subject -->
        <div class="bg-white rounded-lg border-2 p-4" style="border-color: #EF4444;">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['top_subject']['average'] }}%</p>
                <p class="text-sm text-teal-600 mt-1">Top Subject ({{ $stats['top_subject']['name'] }})</p>
            </div>
        </div>

        <!-- Weakest Subject -->
        <div class="bg-white rounded-lg border-2 p-4" style="border-color: #22C55E;">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['weakest_subject']['average'] }}%</p>
                <p class="text-sm text-teal-600 mt-1">Weakest Subject ({{ $stats['weakest_subject']['name'] }})</p>
            </div>
        </div>
    </div>

    <!-- Filters and Search Bar -->
    <div class="flex items-center justify-between gap-4">
        <!-- Class Selector -->
        <div class="flex items-center gap-3">
            <label for="class-select" class="text-sm font-medium text-teal-700">Select Class:</label>
            <select id="class-select"
                    onchange="window.location.href='{{ route('school.broadsheet') }}?class_id=' + this.value"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 text-teal-700">
                @foreach($classes as $classOption)
                    <option value="{{ $classOption->id }}" {{ $class && $class->id == $classOption->id ? 'selected' : '' }}>
                        {{ $classOption->code }} - {{ $classOption->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Search Bar -->
        <div class="relative flex-1 max-w-md">
            <input type="text" id="student-search" placeholder="Search for student..."
                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
            <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Broadsheet Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Student ID</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Student</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Gender</th>
                        @foreach($subjects as $subject)
                        <th class="px-4 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">{{ $subject->name }}</th>
                        @endforeach
                        <th class="px-4 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($students as $student)
                    @php
                        // Calculate student's overall grade
                        $studentGrades = $student->grades;
                        $totalPercentage = $studentGrades->count() > 0 ? $studentGrades->avg('percentage') : 0;
                        $overallGrade = \App\Models\Grade::calculateGrade($totalPercentage);

                        // Grade colors
                        $gradeColors = [
                            'A' => 'bg-green-500',
                            'B' => 'bg-green-500',
                            'C' => 'bg-orange-400',
                            'D' => 'bg-orange-400',
                            'E' => 'bg-red-500',
                            'F' => 'bg-red-500',
                        ];
                    @endphp
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-teal-700">{{ $student->student_id }}</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">{{ $student->full_name }}</a>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-teal-700">{{ $student->gender }}</td>
                        @foreach($subjects as $subject)
                            @php
                                $grade = $studentGrades->firstWhere('subject_id', $subject->id);
                            @endphp
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-teal-700">
                                @if($grade)
                                    {{ number_format($grade->score, 0) }} / {{ number_format($grade->total, 0) }}
                                @else
                                    - / -
                                @endif
                            </td>
                        @endforeach
                        <td class="px-4 py-3 whitespace-nowrap">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full {{ $gradeColors[$overallGrade] ?? 'bg-gray-400' }} text-white font-bold text-sm">
                                {{ $overallGrade }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-4 py-8 text-center text-gray-500">
                            No students found for this class.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bottom Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Class Average -->
        <div class="bg-white rounded-lg border border-gray-200 p-4">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['class_average'] }}%</p>
                <p class="text-sm text-teal-600 mt-1">Class Average</p>
            </div>
        </div>

        <!-- Highest -->
        <div class="bg-white rounded-lg border border-gray-200 p-4">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['highest'] }}</p>
                <p class="text-sm text-teal-600 mt-1">Highest</p>
            </div>
        </div>

        <!-- Lowest -->
        <div class="bg-white rounded-lg border border-gray-200 p-4">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['lowest'] }}</p>
                <p class="text-sm text-teal-600 mt-1">Lowest</p>
            </div>
        </div>

        <!-- Total Students -->
        <div class="bg-white rounded-lg border border-gray-200 p-4">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">{{ $stats['total_students'] }}</p>
                <p class="text-sm text-teal-600 mt-1">Total Students</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Simple search functionality
    document.getElementById('student-search').addEventListener('keyup', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const studentName = row.querySelector('td:nth-child(2)')?.textContent.toLowerCase() || '';
            const studentId = row.querySelector('td:nth-child(1)')?.textContent.toLowerCase() || '';

            if (studentName.includes(searchTerm) || studentId.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
@endpush

@endsection

