<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\School;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    /**
     * Display the school registration view.
     */
    public function createSchool()
    {
        return view('auth.register-school');
    }

    /**
     * Display the user registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle school registration request.
     */
    public function storeSchool(Request $request)
    {
        $request->validate([
            'school_name' => ['required', 'string', 'max:255'],
            'school_code' => ['required', 'string', 'max:50', 'unique:schools,code'],
            'country' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:100'],
            'website' => ['nullable', 'url', 'max:255'],
        ]);

        // Store school data in session to use in user registration
        $request->session()->put('school_data', $request->only([
            'school_name',
            'school_code',
            'country',
            'state',
            'website'
        ]));

        // Redirect to user registration
        return redirect()->route('register');
    }

    /**
     * Handle user registration request.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'in:male,female,other'],
            'role' => ['required', 'string', 'in:admin,teacher,parent,student'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required', 'accepted'],
        ]);

        // Get school data from session if exists
        $schoolData = $request->session()->get('school_data');
        $schoolId = null;

        // Create school if school data exists
        if ($schoolData) {
            $school = School::create([
                'name' => $schoolData['school_name'],
                'code' => $schoolData['school_code'],
                'country' => $schoolData['country'],
                'state' => $schoolData['state'],
                'website' => $schoolData['website'] ?? null,
                'subdomain' => Str::slug($schoolData['school_code']),
                'status' => 'active',
            ]);
            $schoolId = $school->id;
        }

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'role' => $request->role,
            'school_id' => $schoolId,
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Clear school data from session
        $request->session()->forget('school_data');

        return redirect()->route('dashboard');
    }

    /**
     * Display the progressive registration view.
     */
    public function createProgressive()
    {
        return view('auth.register-progressive');
    }

    /**
     * Handle progressive registration request.
     */
    public function storeProgressive(Request $request)
    {
        $request->validate([
            // Step 1: User Information
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'in:male,female,other'],
            'role' => ['required', 'string', 'in:admin,teacher,parent,student'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required', 'accepted'],

            // Step 2: School Information
            'school_name' => ['required', 'string', 'max:255'],
            'school_code' => ['required', 'string', 'max:50', 'unique:schools,code'],
            'country' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:100'],
            'website' => ['nullable', 'url', 'max:255'],

            // Step 3: Class Levels
            'class_levels' => ['nullable', 'array'],
            'class_levels.*' => ['string', 'in:nursery,primary,grade,junior_secondary,senior_secondary'],

            // Step 4: Class Arms
            'has_arms' => ['nullable', 'string', 'in:yes,no'],
            'arm_types' => ['nullable', 'array'],
            'arm_types.*' => ['string', 'in:letter,number,color,program'],

            // Step 5: Academic Session
            'academic_session' => ['nullable', 'string', 'max:20'],
            'current_term' => ['nullable', 'string', 'in:first,second,third'],
            'term_start' => ['nullable', 'date'],
            'term_end' => ['nullable', 'date', 'after:term_start'],
        ]);

        // Create school
        $school = School::create([
            'name' => $request->school_name,
            'code' => $request->school_code,
            'country' => $request->country,
            'state' => $request->state,
            'website' => $request->website,
            'subdomain' => Str::slug($request->school_code),
            'status' => 'active',
        ]);

        // Create user
        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'role' => $request->role,
            'school_id' => $school->id,
        ]);

        // Store additional configuration data in session or database
        // You can create additional models/tables for class_levels, arms, and sessions
        $request->session()->put('onboarding_data', [
            'class_levels' => $request->class_levels ?? [],
            'has_arms' => $request->has_arms,
            'arm_types' => $request->arm_types ?? [],
            'academic_session' => $request->academic_session,
            'current_term' => $request->current_term,
            'term_start' => $request->term_start,
            'term_end' => $request->term_end,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration completed successfully! Welcome to Kokokah SMS.');
    }
}

