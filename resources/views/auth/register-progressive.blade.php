<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register - Kokokah SMS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Fredoka+One&display=swap"
        rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Sitka';
            src: local('Sitka Text'), local('Sitka Display'), local('Sitka Heading'), local('Sitka Subheading'), local('Sitka Small'), local('Sitka Banner');
            font-weight: 400;
            font-style: normal;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sitka antialiased"
    style="background: linear-gradient(to bottom, white 0%, white 48%, #FDAF22 48%, #FDAF22 100%);">
    <div class="min-h-screen flex flex-col">
        <!-- Logo and Header -->
        <div class="w-full flex justify-center pt-8 pb-8">
            <div class="text-center">
                <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-20 mx-auto mb-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-h3 font-bold text-primary font-fredoka">
                        Kokokah School Management System
                    </h1>
                    <p class="text-grey400 text-sm">Let's get to know you by creating your account</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex items-start justify-center px-4 pb-16">
            <div class="w-full max-w-4xl">
                <div class="bg-white rounded-lg shadow-auth p-8">
                    <!-- Progress Indicator -->
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-grey400">Step <span id="current-step">1</span> of
                                5</span>
                            <span class="text-sm font-medium text-primary"><span id="progress-percent">20</span>%
                                Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div id="progress-bar" class="h-2 rounded-full transition-all duration-300"
                                style="width: 20%; background-color: #FDAF22;"></div>
                        </div>
                    </div>

                    <form id="registration-form" method="POST" action="{{ route('register.progressive') }}">
                        @csrf

                        <!-- Step 1: User Information -->
                        <div class="step-content" id="step-1">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- First Name -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="first_name"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Enter
                                            First Name</label>
                                        <input id="first_name" type="text" name="first_name"
                                            value="{{ old('first_name') }}" required placeholder="Mark"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                <!-- Last Name -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="last_name"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter Last Name
                                        </label>
                                        <input id="last_name" type="text" name="last_name"
                                            value="{{ old('last_name') }}" required placeholder="Man"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- Email Address -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="email"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter Email Address
                                        </label>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                                            required placeholder="WIOT@"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                <!-- Phone Number -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="phone"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter Phone Number
                                        </label>
                                        <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                                            required placeholder="08000000000"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- Gender -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="gender"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Select Gender
                                        </label>
                                        <select id="gender" name="gender" required
                                            class="w-full outline-none text-primary text-sm">
                                            <option value="">Male</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                {{-- role --}}
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="role"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Select Role
                                        </label>
                                        <select id="role" name="role" required
                                            class="w-full outline-none text-primary text-sm">
                                            <option value="">Teacher</option>
                                            <option value="male">Parent</option>
                                            <option value="female">Student</option>
                                            <option value="other">Admin</option>
                                        </select>
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- Password -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="password"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter Password
                                        </label>
                                        <input id="password" type="password" name="password" required
                                            placeholder="********" class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                <!-- Confirm Password -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="password_confirmation"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Confirm Password
                                        </label>
                                        <input id="password_confirmation" type="password"
                                            name="password_confirmation" required placeholder="********"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-6 flex flex-col gap-1 items-center">
                                <label class="flex items-start">
                                    <input type="checkbox" name="terms" id="terms" required
                                        class="mt-1 h-4 w-4  focus:ring-accent border-black rounded">
                                    <span class="ml-2 text-base text-black">
                                        By clicking, I agree to the <a href="#"
                                            class="font-semibold hover:text-accent transition-colors">Terms and
                                            Condition</a> of Kokokah
                                        platform
                                    </span>
                                </label>
                                <span class="error-message text-red-600 text-sm hidden"></span>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex justify-center">
                                <button type="button" onclick="nextStep(2)"
                                    class="px-30 py-3 font-semibold font-sitka text-black bg-accent hover:bg-accent-hover rounded transition-colors">
                                    Next
                                </button>
                            </div>

                            <!-- Login Link -->
                            <div class="mt-6 text-center">
                                <p class="ml-2 text-base text-black"> Already have a Kokokah SMS account? <a
                                        href="{{ route('login') }}"
                                        class="text-primary hover:text-accent transition-all font-semibold">Login
                                        Here</a>
                                </p>
                            </div>
                        </div>

                        <!-- Step 2: School Information -->
                        <div class="step-content hidden" id="step-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- School Name -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="school_name"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter School Name
                                        </label>
                                        <input id="school_name" type="text" name="school_name"
                                            placeholder="Winner's Institute of Technology"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                <!-- School Code -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="school_code"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter School Code
                                        </label>
                                        <input id="school_code" type="text" name="school_code" placeholder="WIOT"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 md:items-center gap-6 mb-6">
                                <!-- Country -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="country"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Select Country
                                        </label>
                                        <select id="country" name="country"
                                            class="w-full outline-none text-primary text-sm">
                                            <option value="">Select Country</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="South Africa">South Africa</option>
                                        </select>
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                <!-- URL Preview -->
                                <div
                                    class="bg-school-btn rounded-xl px-5.5 py-3 mt-3 flex flex-col gap-2 divide-y-2 divide-primary">
                                    <p class="text-xs text-primary font-sitka pb-2">
                                        https://<span id="subdomain-preview">yourcode</span>.kokokah.com
                                    </p>

                                    <p class="text-xs text-primary font-sitka">This will be the main URL to the portal
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- State -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="state"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Select State
                                        </label>
                                        <select id="state" name="state"
                                            class="w-full outline-none text-primary text-sm">
                                            <option value="">Select State</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Abuja">Abuja</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Rivers">Rivers</option>
                                        </select>
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>

                                <!-- School Website -->
                                <div class="flex flex-col gap-1">
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="website"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            Enter School Website
                                        </label>
                                        <input id="website" type="url" name="website"
                                            placeholder="Winner’s Institute of Technology"
                                            class="w-full outline-none text-primary text-sm">
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                            </div>




                            <!-- Navigation Buttons -->
                            <div class="flex justify-center gap-4 items-center">
                                <button type="button" onclick="previousStep(1)"
                                    class="px-30 py-3 text-primary border border-primary bg-white rounded hover:text-white hover:bg-primary transition-all font-semibold">
                                    Previous
                                </button>
                                <button type="button" onclick="nextStep(3)"
                                    class="px-30 py-3 font-semibold font-sitka text-black bg-accent hover:bg-accent-hover rounded transition-colors">
                                    Next
                                </button>
                            </div>
                        </div>

                        <!-- Step 3: Class Levels -->
                        <div class="step-content hidden" id="step-3">
                            <div class="mb-6 flex flex-col gap-2">
                                <h2 class="text-xl font-bold text-primary font-fredoka">
                                    What is Class Level?
                                </h2>
                                <p class="text-grey400 text-base">
                                    Class levels represent the different educational stages in your school. Select all
                                    the levels that apply to your institution.
                                </p>
                            </div>

                            <div class="space-y-4 mb-6">
                                <!-- Nursery -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="class_levels[]" value="nursery"
                                        class="mt-1 h-5 w-5 border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-black text-base">Nursery</span>
                                        <p class="text-sm text-grey400">Nursery 1, Nursery 2</p>
                                    </div>
                                </label>

                                <!-- Primary -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="class_levels[]" value="primary"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-black text-base">Primary</span>
                                        <p class="text-sm text-grey400">Primary 1, Primary 2, Primary 3, Primary 4,
                                            Primary 5, Primary 6</p>
                                    </div>
                                </label>

                                <!-- Grade -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="class_levels[]" value="grade"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-black text-base">Grade</span>
                                        <p class="text-sm text-grey400">Grade 1, Grade 2, Grade 3, Grade 4, Grade 5,
                                            Grade 6</p>
                                    </div>
                                </label>

                                <!-- Junior Secondary -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="class_levels[]" value="junior_secondary"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-black text-base">Junior Secondary</span>
                                        <p class="text-sm text-grey400">JSS 1, JSS 2, JSS 3</p>
                                    </div>
                                </label>

                                <!-- Senior Secondary -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="class_levels[]" value="senior_secondary"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-black text-base">Senior Secondary</span>
                                        <p class="text-sm text-grey400">SSS 1, SSS 2, SSS 3</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex justify-center gap-5 items-center">
                                <button type="button" onclick="previousStep(2)"
                                    class="px-30 py-3 text-primary border border-primary bg-white rounded hover:text-white hover:bg-primary transition-all font-semibold">
                                    Previous
                                </button>
                                <button type="button" onclick="nextStep(4)"
                                    class="px-30 py-3 font-semibold font-sitka text-black bg-accent hover:bg-accent-hover rounded transition-colors">
                                    Next
                                </button>
                            </div>
                        </div>

                        <!-- Step 4: Class Arms -->
                        <div class="step-content hidden" id="step-4">
                            <div class="mb-6 flex flex-col gap-2">
                                <h2 class="text-xl font-bold text-primary font-fredoka">
                                    What is Class Arm?
                                </h2>
                                <p class="text-grey400 text-base">
                                    Class arms are subdivisions within each class level (e.g., Primary 1A, Primary 1B).
                                    They help organize students into smaller groups.
                                </p>
                            </div>

                            <!-- Yes/No Question -->
                            <div class="mb-6">
                                <p class="font-medium text-black text-sm mb-4">
                                    Do you have different arms for each class in your school?
                                </p>
                                <div class="flex gap-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="has_arms" value="yes"
                                            onclick="document.getElementById('arms-options').classList.remove('hidden')"
                                            class="h-4 w-4   border-black">
                                        <span class="ml-2 text-gray-700">YES</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="has_arms" value="no"
                                            onclick="document.getElementById('arms-options').classList.add('hidden')"
                                            class="h-4 w-4   border-black">
                                        <span class="ml-2 text-gray-700">NO</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Arms Options (shown when YES is selected) -->
                            <div id="arms-options" class="hidden space-y-4 mb-6">
                                <!-- Letter-Based Arms -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="arm_types[]" value="letter"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-800">Common Letter-Based Arms</span>
                                        <p class="text-sm text-gray-500">A, B, C, D, E, F</p>
                                    </div>
                                </label>

                                <!-- Number-Based Arms -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="arm_types[]" value="number"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-800">Number-Based Arms</span>
                                        <p class="text-sm text-gray-500">1, 2, 3, 4, 5, 6</p>
                                    </div>
                                </label>

                                <!-- Color-Based Arms -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="arm_types[]" value="color"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-800">Color</span>
                                        <p class="text-sm text-gray-500">Red, Blue, Green, Yellow, Gold, Silver</p>
                                    </div>
                                </label>

                                <!-- Special Program Arms -->
                                <label
                                    class="flex items-center p-4 border border-black rounded-md cursor-pointer transition-colors">
                                    <input type="checkbox" name="arm_types[]" value="program"
                                        class="mt-1 h-5 w-5   border-black rounded">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-800">Special Program Arms</span>
                                        <p class="text-sm text-gray-500">Science, Arts, Commercial, Technical</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex justify-center gap-5 items-center">
                                <button type="button" onclick="previousStep(3)"
                                    class="px-30 py-3 text-primary border border-primary bg-white rounded hover:text-white hover:bg-primary transition-all font-semibold">
                                    Previous
                                </button>
                                <button type="button" onclick="nextStep(5)"
                                    class="px-30 py-3 font-semibold font-sitka text-black bg-accent hover:bg-accent-hover rounded transition-colors">
                                    Next
                                </button>
                            </div>
                        </div>

                        <!-- Step 5: Academic Session -->
                        <div class="step-content hidden" id="step-5">
                            {{-- <div class="mb-6 flex flex-col gap-2">
                                <h2 class="text-2xl font-bold text-gray-800">
                                    Academic Session Setup
                                </h2>
                                <p class="text-grey400">
                                    Set up your current academic session and term to get started with the system.
                                </p>
                            </div> --}}

                            <div class="space-y-6 mb-6">
                                <!-- Academic Session -->
                                <div class="flex flex-col gap-3 border-b border-b-black pb-3">
                                    <p class="text-base text-black">Please choose the academic session you'd like to
                                        set up</p>
                                    <div class="flex flex-col gap-1">
                                        <div
                                            class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                            <label for="academic_session"
                                                class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">

                                            </label>
                                            <select id="academic_session" name="academic_session"
                                                class="w-full outline-none text-primary text-sm">
                                                <option value="">Select Session</option>
                                                <option value="2024/2025">2024/2025 Session</option>
                                                <option value="2025/2026" selected>2025/2026 Session</option>
                                                <option value="2026/2027">2026/2027 Session</option>
                                            </select>
                                        </div>
                                        <span class="error-message text-red-600 text-sm hidden"></span>
                                    </div>
                                </div>

                                <!-- Current Term -->
                                <div class="flex flex-col gap-3">
                                    <p>Please select your current term to set up</p>
                                    <div class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                        <label for="current_term"
                                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                            select Term
                                        </label>
                                        <select id="current_term" name="current_term"
                                            class="w-full outline-none text-primary text-sm">
                                            <option value="">Select Term</option>
                                            <option value="first">First Term</option>
                                            <option value="second">Second Term</option>
                                            <option value="third">Third Term</option>
                                        </select>
                                    </div>
                                    <span class="error-message text-red-600 text-sm hidden"></span>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                    <!-- Term Start Date -->
                                    <div class="flex flex-col gap-1">
                                        <div
                                            class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                            <label for="term_start"
                                                class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                                Term Start Date
                                            </label>
                                            <input id="term_start" type="date" name="term_start"
                                                class="w-full outline-none text-primary text-sm">
                                        </div>
                                        <span class="error-message text-red-600 text-sm hidden"></span>
                                    </div>

                                    <!-- Term End Date -->
                                    <div class="flex flex-col gap-1">
                                        <div
                                            class="border-[1.5px] border-primary rounded-xl relative px-5.5 py-3 mt-3">
                                            <label for="term_end"
                                                class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                                Term End Date
                                            </label>
                                            <input id="term_end" type="date" name="term_end"
                                                class="w-full outline-none text-primary text-sm">
                                        </div>
                                        <span class="error-message text-red-600 text-sm hidden"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex justify-center gap-4 items-center">
                                <button type="button" onclick="previousStep(4)"
                                    class="px-30 py-3 text-primary border border-primary bg-white rounded hover:text-white hover:bg-primary transition-all font-semibold">
                                    Previous
                                </button>
                                <button type="submit"
                                    class="px-30 py-3 font-semibold font-sitka text-black bg-accent hover:bg-accent-hover rounded transition-colors">
                                    Complete Set up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Update subdomain preview when school code changes
        document.getElementById('school_code').addEventListener('input', function(e) {
            const code = e.target.value.toLowerCase().replace(/[^a-z0-9]/g, '');
            document.getElementById('subdomain-preview').textContent = code || 'yourcode';
        });

        // Step navigation functions
        function nextStep(stepNumber) {
            // Validate current step before proceeding
            const currentStep = stepNumber - 1;
            if (!validateStep(currentStep)) {
                return;
            }

            // Hide all steps
            document.querySelectorAll('.step-content').forEach(step => {
                step.classList.add('hidden');
            });

            // Show target step
            document.getElementById('step-' + stepNumber).classList.remove('hidden');

            // Update progress
            updateProgress(stepNumber);
        }

        function previousStep(stepNumber) {
            // Hide all steps
            document.querySelectorAll('.step-content').forEach(step => {
                step.classList.add('hidden');
            });

            // Show target step
            document.getElementById('step-' + stepNumber).classList.remove('hidden');

            // Update progress
            updateProgress(stepNumber);
        }

        function updateProgress(stepNumber) {
            const percentage = (stepNumber / 5) * 100;
            document.getElementById('current-step').textContent = stepNumber;
            document.getElementById('progress-percent').textContent = percentage;
            document.getElementById('progress-bar').style.width = percentage + '%';
        }

        function validateStep(stepNumber) {
            const step = document.getElementById('step-' + stepNumber);
            const inputs = step.querySelectorAll('input[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                const errorSpan = input.parentElement.querySelector('.error-message');

                if (input.type === 'checkbox' && input.hasAttribute('required')) {
                    if (!input.checked) {
                        isValid = false;
                        if (errorSpan) {
                            errorSpan.textContent = 'This field is required';
                            errorSpan.classList.remove('hidden');
                        }
                        input.classList.add('border-red-500');
                    } else {
                        if (errorSpan) {
                            errorSpan.classList.add('hidden');
                        }
                        input.classList.remove('border-red-500');
                    }
                } else if (!input.value.trim()) {
                    isValid = false;
                    if (errorSpan) {
                        errorSpan.textContent = 'This field is required';
                        errorSpan.classList.remove('hidden');
                    }
                    input.classList.add('border-red-500');
                } else {
                    if (errorSpan) {
                        errorSpan.classList.add('hidden');
                    }
                    input.classList.remove('border-red-500');
                }
            });

            // Special validation for password confirmation
            if (stepNumber === 1) {
                const password = document.getElementById('password').value;
                const passwordConfirmation = document.getElementById('password_confirmation').value;

                if (password !== passwordConfirmation) {
                    isValid = false;
                    const errorSpan = document.getElementById('password_confirmation').parentElement.querySelector(
                        '.error-message');
                    if (errorSpan) {
                        errorSpan.textContent = 'Passwords do not match';
                        errorSpan.classList.remove('hidden');
                    }
                    document.getElementById('password_confirmation').classList.add('border-red-500');
                }
            }

            return isValid;
        }

        // Form submission
        document.getElementById('registration-form').addEventListener('submit', function(e) {
            if (!validateStep(5)) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
