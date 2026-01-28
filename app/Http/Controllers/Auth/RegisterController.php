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
}

