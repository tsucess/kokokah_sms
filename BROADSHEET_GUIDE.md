# Broadsheet Feature - User Guide

## Overview
The Broadsheet feature provides a comprehensive view of student grades and class performance analytics for any selected class and academic session.

## Accessing the Broadsheet
Navigate to: **School Dashboard → Broadsheet** (from sidebar)
URL: `http://localhost:8000/school/broadsheet`

## Features

### 1. Class Selection
- Use the dropdown at the top to select different classes
- Available classes include all levels: Nursery, Primary, JSS, and SSS
- The page automatically reloads with the selected class data

### 2. Performance Statistics

**Top Statistics Cards:**
- **Class Average**: Overall average percentage for the class
- **Top Student**: Highest performing student with their average
- **Lowest Student**: Lowest performing student with their average
- **Top Subject**: Best performing subject in the class
- **Weakest Subject**: Subject needing improvement

**Bottom Statistics Cards:**
- **Class Average**: Repeated for quick reference
- **Highest**: Highest individual score in any subject
- **Lowest**: Lowest individual score in any subject
- **Total Students**: Number of students in the class

### 3. Student Search
- Real-time search by student name or ID
- Type in the search box to filter the table
- No page reload required

### 4. Grade Table
**Columns:**
- Student ID
- Student Name (clickable for future student profile)
- Gender
- Subject Scores (format: score / total)
- Overall Grade (color-coded badge)

**Grade Color Coding:**
- 🟢 Green: A, B (Excellent/Very Good)
- 🟠 Orange: C, D (Good/Fair)
- 🔴 Red: E, F (Poor/Failed)

### 5. Export Options
Three export buttons are available:
- **Export PDF**: Download broadsheet as PDF (to be implemented)
- **Export Excel**: Download as Excel spreadsheet (to be implemented)
- **Print Broadsheet**: Print-friendly version (to be implemented)

## Database Structure

### Tables
1. **academic_sessions**: Stores session and term information
2. **school_classes**: Class definitions
3. **subjects**: Subject catalog
4. **students**: Student records
5. **grades**: Individual student grades

### Relationships
- Students belong to a Class
- Grades belong to Student, Subject, and Academic Session
- Each grade record is unique per student-subject-session combination

## Sample Data
The system comes pre-seeded with:
- 3 academic sessions (2024/2025 - First, Second, Third terms)
- 17 classes across all levels
- 15 subjects
- 170 students (70 in JSS1A, 20 each in 5 other classes)
- 680 grade records

## Grade Calculation

### Grading Scale
- **A**: 90-100% (Excellent)
- **B**: 80-89% (Very Good)
- **C**: 70-79% (Good)
- **D**: 60-69% (Fair)
- **E**: 50-59% (Poor)
- **F**: Below 50% (Failed)

### Statistics Calculation
- **Class Average**: Mean of all student averages
- **Student Average**: Mean of all subject scores for that student
- **Subject Average**: Mean of all student scores in that subject

## Technical Details

### Controller
`App\Http\Controllers\BroadsheetController`
- Method: `index(Request $request)`
- Accepts: `class_id` query parameter
- Returns: Broadsheet view with students, subjects, stats

### Route
```php
Route::get('/broadsheet', [BroadsheetController::class, 'index'])->name('broadsheet');
```

### View
`resources/views/school/broadsheet.blade.php`
- Extends: `layouts.school`
- Active sidebar: `broadsheet`

## Future Enhancements

### Planned Features
1. **PDF Export**: Generate downloadable PDF reports
2. **Excel Export**: Export to Excel with formatting
3. **Print Stylesheet**: Optimized print layout
4. **Session Selector**: Switch between different terms
5. **Subject Filter**: View specific subjects only
6. **Grade Entry**: Direct grade input interface
7. **Bulk Upload**: Import grades from CSV/Excel
8. **Report Cards**: Individual student reports
9. **Analytics Charts**: Visual performance trends
10. **Term Comparison**: Compare performance across terms

### API Endpoints (Future)
```
GET  /api/broadsheet?class_id={id}&session_id={id}
POST /api/grades/bulk-upload
GET  /api/grades/export/pdf?class_id={id}
GET  /api/grades/export/excel?class_id={id}
```

## Troubleshooting

### No Data Showing
1. Ensure migrations have been run: `php artisan migrate`
2. Ensure seeders have been run: `php artisan db:seed`
3. Check that an academic session is marked as active

### Statistics Not Calculating
1. Verify grades exist for the selected class
2. Check that subjects are properly linked
3. Ensure academic session is active

### Class Selector Empty
1. Run SchoolClassSeeder: `php artisan db:seed --class=SchoolClassSeeder`
2. Check database connection

## Support
For issues or feature requests, contact the development team or create an issue in the project repository.

---

**Last Updated**: January 27, 2025
**Version**: 1.0.0

