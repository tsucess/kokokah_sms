# Kokokah School Management System - Project Structure

## Technology Stack

### Backend
- **Framework**: Laravel 12
- **Database**: MySQL
- **Real-time**: Laravel Reverb (WebSocket)
- **API**: RESTful API with Laravel Sanctum (to be configured)

### Frontend
- **Template Engine**: Blade
- **CSS Framework**: Tailwind CSS v4
- **JavaScript**: Vanilla JS with Laravel Echo
- **Build Tool**: Vite

## Directory Structure

```
kokokah_sms/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/              # API Controllers
│   │   │   │   ├── StudentController.php
│   │   │   │   ├── TeacherController.php
│   │   │   │   ├── ClassController.php
│   │   │   │   ├── SubjectController.php
│   │   │   │   ├── AttendanceController.php
│   │   │   │   └── GradeController.php
│   │   │   └── Controller.php
│   │   └── Middleware/
│   ├── Models/                   # Eloquent Models
│   │   ├── Student.php
│   │   ├── Teacher.php
│   │   ├── SchoolClass.php
│   │   ├── Subject.php
│   │   ├── Attendance.php
│   │   └── Grade.php
│   └── Providers/
├── database/
│   ├── migrations/               # Database migrations
│   └── seeders/                  # Database seeders
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind CSS
│   ├── js/
│   │   ├── app.js               # Main JS entry
│   │   └── bootstrap.js         # Laravel Echo & Axios
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php    # Main layout
│       │   └── navigation.blade.php
│       ├── dashboard.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── web.php                  # Web routes
│   ├── api.php                  # API routes
│   └── console.php              # Console routes
└── public/                      # Public assets

```

## Core Modules (To Be Implemented)

### 1. Student Management
- Student registration
- Student profiles
- Student enrollment
- Student attendance tracking

### 2. Teacher Management
- Teacher profiles
- Teacher assignments
- Teacher schedules

### 3. Class Management
- Class creation
- Class schedules
- Class assignments

### 4. Subject Management
- Subject creation
- Subject assignments
- Curriculum management

### 5. Attendance System
- Daily attendance
- Attendance reports
- Real-time attendance updates (WebSocket)

### 6. Grading System
- Grade entry
- Grade reports
- Performance analytics

### 7. Real-time Features (WebSocket)
- Live attendance updates
- Real-time notifications
- Live dashboard updates

## API Endpoints

Base URL: `/api/v1`

- `GET|POST /students` - List/Create students
- `GET|PUT|DELETE /students/{id}` - Show/Update/Delete student
- `GET|POST /teachers` - List/Create teachers
- `GET|PUT|DELETE /teachers/{id}` - Show/Update/Delete teacher
- `GET|POST /classes` - List/Create classes
- `GET|PUT|DELETE /classes/{id}` - Show/Update/Delete class
- `GET|POST /subjects` - List/Create subjects
- `GET|PUT|DELETE /subjects/{id}` - Show/Update/Delete subject
- `GET|POST /attendance` - List/Create attendance
- `GET|PUT|DELETE /attendance/{id}` - Show/Update/Delete attendance
- `GET|POST /grades` - List/Create grades
- `GET|PUT|DELETE /grades/{id}` - Show/Update/Delete grade

## Setup Instructions

### 1. Install Dependencies
```bash
composer install
npm install
```

### 2. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Setup
```bash
php artisan migrate
php artisan db:seed
```

### 4. Build Assets
```bash
npm run dev
```

### 5. Start Development Server
```bash
php artisan serve
```

### 6. Start WebSocket Server
```bash
php artisan reverb:start
```

## Next Steps

1. Receive and implement frontend SVG designs
2. Create database migrations for all modules
3. Implement models with relationships
4. Build API controllers
5. Create Blade views based on designs
6. Implement authentication system
7. Set up WebSocket events and listeners
8. Add real-time features

