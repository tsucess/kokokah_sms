# Authentication Quick Start Guide

## Setup Instructions

### 1. Run Database Migrations
```bash
php artisan migrate
```

This will create:
- `schools` table
- Add `phone`, `gender`, `role`, and `school_id` fields to `users` table

### 2. Start Development Servers

**Terminal 1 - Laravel Server:**
```bash
php artisan serve
```

**Terminal 2 - Vite Dev Server:**
```bash
npm run dev
```

## Available Routes

### Public Routes (Guest Users)
- **Login**: http://localhost:8000/login
- **School Registration**: http://localhost:8000/register/school
- **User Registration**: http://localhost:8000/register
- **Forgot Password**: http://localhost:8000/forgot-password

### Protected Routes (Authenticated Users)
- **Dashboard**: http://localhost:8000/dashboard
- **Super Admin**: http://localhost:8000/superadmin/*
- **School Admin**: http://localhost:8000/school/*

## Testing the Registration Flow

### Step 1: School Registration
1. Visit: http://localhost:8000/register/school
2. Fill in the form:
   - **School Name**: Winner's Institute of Technology
   - **School Code**: WIOT
   - **Country**: Nigeria
   - **State**: Lagos
   - **Website**: https://wiot.edu.ng (optional)
3. Click "Next"

### Step 2: User Registration
1. You'll be redirected to: http://localhost:8000/register
2. Fill in the form:
   - **First Name**: John
   - **Last Name**: Doe
   - **Email**: john@wiot.edu.ng
   - **Phone**: 08012345678
   - **Gender**: Male
   - **Role**: School Admin
   - **Password**: password123
   - **Confirm Password**: password123
   - ✓ Check "Terms and Conditions"
3. Click "Submit"
4. You'll be automatically logged in and redirected to the dashboard

## Testing the Login Flow

### Step 1: Login
1. Visit: http://localhost:8000/login
2. Enter credentials:
   - **Email**: john@wiot.edu.ng
   - **Password**: password123
3. Click "Submit"
4. You'll be redirected to the dashboard

### Step 2: Logout
1. Send a POST request to: http://localhost:8000/logout
2. Or create a logout button in your navigation

## Testing Password Reset

1. Visit: http://localhost:8000/forgot-password
2. Enter your email address
3. Click "Email Password Reset Link"
4. Check your email for the reset link (requires email configuration)

## Design Features Implemented

### Visual Design
✅ Split background (white top, orange bottom)
✅ Centered Kokokah logo
✅ Responsive form cards with shadow
✅ Two-column grid layout on desktop
✅ Single column on mobile

### Form Elements
✅ Text inputs with proper styling
✅ Dropdown selects with custom arrows
✅ Password visibility toggle
✅ Checkbox for terms and conditions
✅ Previous and Submit buttons
✅ Validation error messages
✅ Success messages

### Typography & Colors
✅ Fredoka One for headings
✅ Sitka for body text
✅ Orange (#FDAF22) for primary buttons
✅ Teal for links and focus states
✅ Gray for borders and secondary text

## Common Issues & Solutions

### Issue: "Class 'School' not found"
**Solution**: Make sure you've created the School model and run migrations.

### Issue: "SQLSTATE[42S02]: Base table or view not found"
**Solution**: Run `php artisan migrate` to create the database tables.

### Issue: "The school_code has already been taken"
**Solution**: Use a different school code or clear the database.

### Issue: Styles not loading
**Solution**: Make sure Vite dev server is running with `npm run dev`.

### Issue: CSRF token mismatch
**Solution**: Clear browser cache and cookies, or restart the Laravel server.

## Database Structure

### Schools Table
```
id, name, code, country, state, website, subdomain, status, created_at, updated_at
```

### Users Table (Updated)
```
id, name, email, email_verified_at, password, phone, gender, role, school_id, 
remember_token, created_at, updated_at
```

## User Roles

- **admin**: School Administrator (full access to school features)
- **teacher**: Teacher (access to classes, students, grades)
- **parent**: Parent/Guardian (access to their children's information)
- **student**: Student (access to their own information)

## Next Development Steps

1. **Role-Based Middleware**: Create middleware to restrict access based on user roles
2. **Email Verification**: Implement email verification after registration
3. **Password Reset Email**: Configure email settings for password reset
4. **Multi-Tenancy**: Implement subdomain-based routing for schools
5. **Profile Management**: Create user profile pages
6. **School Settings**: Create school configuration pages

## Support

For issues or questions, refer to:
- `AUTHENTICATION_IMPLEMENTATION.md` - Detailed implementation documentation
- Laravel Documentation: https://laravel.com/docs
- Tailwind CSS Documentation: https://tailwindcss.com/docs

