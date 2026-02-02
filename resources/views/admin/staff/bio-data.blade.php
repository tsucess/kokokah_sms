@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Bio Data')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .hidden {
            display: none;
        }
    </style>
    <div>
        <div class="p-8 step" data-content='bio-data'>
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('admin.staff') }}"
                    class="inline-flex items-center gap-2 text-sm text-black100 hover:text-grey400">
                    <i class="fa-solid fa-arrow-left text-black100"></i>
                    Back to Staff
                </a>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Bio Data</h3>
                <p class="text-sm text-primary font-sitka">Manage student information and enrolment</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column - Image Upload -->
                <div class="lg:col-span-1">
                    <div class="flex flex-col gap-6">

                        <!-- Profile Image Upload -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-auth">
                            <div
                                class="w-full aspect-square bg-gray-100 rounded-lg flex items-center justify-center mb-4 relative overflow-hidden">
                                <img id="profilePreview" src="" alt=""
                                    class="hidden w-full h-full object-cover">
                                <div id="profilePlaceholder" class="text-center">
                                    <img src="/images/bio-data-student.jpg" alt="">
                                </div>
                            </div>
                            <button type="button" onclick="document.getElementById('profileImage').click()"
                                class="w-full px-4 py-2 gap-2 bg-blue200 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                                Browse Profile File
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <input type="file" id="profileImage" class="hidden" accept="image/*"
                                onchange="previewImage(this)">
                        </div>

                        <!-- Signature Upload -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-auth">
                            <div
                                class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4 relative overflow-hidden">
                                <img id="signaturePreview" src="" alt=""
                                    class="hidden w-full h-full object-contain">
                                <div id="signaturePlaceholder" class="text-center">
                                    <img src="/images/signature-bio-data.png" alt="">
                                </div>
                            </div>
                            <button type="button" onclick="document.getElementById('signatureImage').click()"
                                class="w-full px-4 py-2 bg-blue200 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2 justify-center">
                                Upload Signature
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <input type="file" id="signatureImage" class="hidden" accept="image/*"
                                onchange="previewSignature(this)">
                        </div>

                        <!-- Gender Selection -->
                        <div class="">
                            <label class="block text-sm font-medium text-primary mb-3 font-sitka">Gender
                                <span>*</span></label>
                            <div class="flex gap-4">
                                <label class="flex items-center gap-2 font-sitka">
                                    <input type="radio" name="gender" value="male" class="w-4 h-4 text-blue-600">
                                    <span class="text-sm text-black">Male</span>
                                </label>
                                <label class="flex items-center gap-2 font-sitka">
                                    <input type="radio" name="gender" value="female" class="w-4 h-4 text-blue-600">
                                    <span class=" text-sm text-black">Female</span>
                                </label>
                            </div>
                        </div>

                        <!-- Staff Type Selection -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-primary mb-3 font-sitka">Staff Type
                                <span>*</span></label>
                            <div class="flex gap-4">
                                <label class="flex items-center font-sitka gap-2">
                                    <input type="radio" name="staff_type" value="academic" class="w-4 h-4 text-blue-600">
                                    <span class="ml-2 text-sm text-black">Academic</span>
                                </label>
                                <label class="flex items-center font-sitka gap-2">
                                    <input type="radio" name="staff_type" value="non-academic"
                                        class="w-4 h-4 text-blue-600">
                                    <span class="text-sm text-black">Non Academic</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Form Fields -->
                <div class="lg:col-span-2">
                    <form class="px-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Last Staff ID -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Last
                                    Student ID</label>
                                <input type="text" placeholder="0001" class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Student ID -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Student
                                    ID</label>
                                <input type="text" placeholder="Enter student ID"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Enter First Name -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter
                                    First Name</label>
                                <input type="text" placeholder="John" class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Enter Last Name -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter
                                    Last Name</label>
                                <input type="text" placeholder="Doe" class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Other Name -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Other
                                    Name</label>
                                <input type="text" placeholder="Enter other name"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Enter Date of Birth -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter
                                    Date of Birth</label>
                                <input type="date" placeholder="dd/mm/yyyy"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Email Address -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Email
                                    Address</label>
                                <input type="email" placeholder="Enter email address"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Phone Number -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Phone
                                    Number</label>
                                <input type="tel" placeholder="Enter phone number"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Country -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Country</label>
                                <select class="w-full outline-none text-primary text-sm">
                                    <option value="">Nigeria</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="kenya">Kenya</option>
                                </select>
                            </div>

                            <!-- Postal Code -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Postal
                                    Code</label>
                                <input type="text" placeholder="Enter postal code"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- State of Origin -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">State
                                    of Origin</label>
                                <select class="w-full outline-none text-primary text-sm">
                                    <option value="">Please state of origin</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="abuja">Abuja</option>
                                </select>
                            </div>

                            <!-- Local Government Area -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Local
                                    Government Area</label>
                                <select class="w-full outline-none text-primary text-sm">
                                    <option value="">Please local government</option>
                                </select>
                            </div>

                            <!-- Weight -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Weight</label>
                                <input type="text" placeholder="Enter weight"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Height -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Height</label>
                                <input type="text" placeholder="Enter height"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Home Address (Full Width) -->
                            <div class="md:col-span-2 border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Home
                                    Address</label>
                                <textarea rows="4" placeholder="Address" class="resize-none w-full outline-none text-primary text-sm"></textarea>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <!-- Progress Indicator -->
                            <div class=" flex items-center justify-center gap-2">
                                <div class="w-16 h-3 bg-accent rounded"></div>
                                <div class="w-16 h-3 bg-grey300 rounded"></div>
                                <div class="w-16 h-3 bg-grey300 rounded"></div>
                            </div>

                            <!-- Action Buttons -->
                            <button data-type='kin-details' type="button"
                                class="px-20 py-3 bg-accent text-black font-sikta rounded-lg hover:bg-accent-hover transition-colors font-semibold">
                                Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="p-8 step hidden" data-content='kin-details'>
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('admin.staff') }}"
                    class="inline-flex items-center gap-2 text-sm text-black100 hover:text-grey400">
                    <i class="fa-solid fa-arrow-left text-black100"></i>
                    Back to Staff
                </a>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Next Kin Details</h3>
                <p class="text-sm text-primary font-sitka">Manage Next of Kim information and enrollment</p>
            </div>
            <form class="">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Next of Kin First Name -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin First Name</label>
                        <input type="text" placeholder="Enter Next of Kin First Name"
                            class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Next of Kin Surname -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin Surname</label>
                        <input type="text" placeholder="Enter Next of Kin Surname"
                            class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Next of Kin Other Name -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin Other Name</label>
                        <input type="text" placeholder="Enter Next of Kin Other Name"
                            class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Next of Kin Phone Number -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin Phone Number</label>
                        <input type="text" placeholder="Enter Next of Kin Phone Number"
                            class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Next of Kin Relationship -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin Relationship</label>
                        <input type="text" placeholder="Enter Next of Kin Relationship"
                            class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Next of Kin Email Address -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin Email Address</label>
                        <input type="email" placeholder="Next of Kin Email Address"
                            class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Next of Kin House Address -->
                    <div class="md:col-span-3 border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                            of Kin House Address</label>
                        <textarea rows="4" placeholder="Address" class="resize-none w-full outline-none text-primary text-sm"></textarea>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <!-- Progress Indicator -->
                    <div class=" flex items-center justify-center gap-2">
                        <div class="w-16 h-3 bg-grey300 rounded"></div>
                        <div class="w-16 h-3 bg-accent rounded"></div>
                        <div class="w-16 h-3 bg-grey300 rounded"></div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-5">
                        <button data-type='bio-data' type="button"
                            class="px-20 py-3 bg-transparent border border-primary text-primary font-sikta rounded-lg hover:bg-primary hover:text-white transition-colors font-semibold">
                            Previous
                        </button>
                        <button data-type='staff-management' type="button"
                            class="px-20 py-3 bg-accent text-black font-sikta rounded-lg hover:bg-accent-hover transition-colors font-semibold">
                            Next
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <div class="p-8 step hidden" data-content='staff-management'>
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('admin.staff') }}"
                    class="inline-flex items-center gap-2 text-sm text-black100 hover:text-grey400">
                    <i class="fa-solid fa-arrow-left text-black100"></i>
                    Back to Staff
                </a>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Staff Management</h3>
                <p class="text-sm text-primary font-sitka">Manage Next of Kim information and enrollment</p>
            </div>

            <div class="flex flex-col gap-6">
                <div class="rounded-2xl p-10 border-4 border-orange50 flex flex-col gap-8">
                    <div class="flex justify-between items-center gap-4">
                        <div class="bg-primary w-24 h-24 rounded-full flex justify-center items-center">
                            <i class="fa-solid fa-user-astronaut fa-2xl text-white"></i>
                        </div>
                        <div class="bg-primary w-24 h-24 rounded-full flex justify-center items-center">
                            <p class="text-xs text-white font-mulish">Signature</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">First Name</h4>
                            <p class="font-sitka text-sm text-primary">Samuel</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Last Name</h4>
                            <p class="font-sitka text-sm text-primary">Ali</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Other Name</h4>
                            <p class="font-sitka text-sm text-primary">Musa</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Gender</h4>
                            <p class="font-sitka text-sm text-primary">Male</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Date of Birth</h4>
                            <p class="font-sitka text-sm text-primary">08-02-2016</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Country</h4>
                            <p class="font-sitka text-sm text-primary">Nigeria</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">State of Origin</h4>
                            <p class="font-sitka text-sm text-primary">Sokoto</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">LGA</h4>
                            <p class="font-sitka text-sm text-primary">Gwadabawa</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Marital Status</h4>
                            <p class="font-sitka text-sm text-primary">Married</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Staff Type</h4>
                            <p class="font-sitka text-sm text-primary">Academic</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Phone Number</h4>
                            <p class="font-sitka text-sm text-primary">+234810 000 0000</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Email Address</h4>
                            <p class="font-sitka text-sm text-primary">myemail@gmail.com</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Home Address</h4>
                            <p class="font-sitka text-sm text-primary">Lagos, Nigeria</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Blood Group</h4>
                            <p class="font-sitka text-sm text-primary">O -</p>
                        </div>

                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Genotype</h4>
                            <p class="font-sitka text-sm text-primary">AA</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl p-10 border-4 border-orange50 flex flex-col gap-6">
                    <div class="flex flex-col gap-1">
                        <h3 class="text-base font-semibold text-primary font-fredoka">Next Kin</h3>
                        <p class="text-sm text-primary font-sitka">Below is your next of kin's Information</p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's First Name</h4>
                            <p class="font-sitka text-sm text-primary">Samuel</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's Surname</h4>
                            <p class="font-sitka text-sm text-primary">Ali</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's Other Name</h4>
                            <p class="font-sitka text-sm text-primary">Musa</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's Email Address</h4>
                            <p class="font-sitka text-sm text-primary">myemail@gmail.com</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's Phone Number</h4>
                            <p class="font-sitka text-sm text-primary">08-02-2016</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's Relationship</h4>
                            <p class="font-sitka text-sm text-primary">Nigeria</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <h4 class="font-sitka text-base font-semibold text-primary">Next of Kin's Address</h4>
                            <p class="font-sitka text-sm text-primary">Sokoto</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-between mt-6">
                <!-- Progress Indicator -->
                <div class=" flex items-center justify-center gap-2">
                    <div class="w-16 h-3 bg-grey300 rounded"></div>
                    <div class="w-16 h-3 bg-grey300 rounded"></div>
                    <div class="w-16 h-3 bg-accent rounded"></div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center gap-5">
                    <button data-type='kin-details' type="button"
                        class="px-20 py-3 bg-transparent border border-primary text-primary font-sikta rounded-lg hover:bg-primary hover:text-white transition-colors font-semibold">
                        Previous
                    </button>
                    <button type="submit"
                        class="px-20 py-3 bg-accent text-black font-sikta rounded-lg hover:bg-accent-hover transition-colors font-semibold">
                        Submit
                    </button>
                </div>
            </div>

        </div>

    </div>
    </div>

    @push('scripts')
        <script>
            function previewImage(input) {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('profilePreview').src = e.target.result;
                        document.getElementById('profilePreview').classList.remove('hidden');
                        document.getElementById('profilePlaceholder').classList.add('hidden');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function previewSignature(input) {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('signaturePreview').src = e.target.result;
                        document.getElementById('signaturePreview').classList.remove('hidden');
                        document.getElementById('signaturePlaceholder').classList.add('hidden');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            const steps = document.querySelectorAll(".step");
            const buttons = document.querySelectorAll("button[data-type]");

            function showStep(type) {
                steps.forEach(step => {
                    if (step.dataset.content === type) {
                        step.classList.remove("hidden");
                    } else {
                        step.classList.add("hidden");
                    }
                });
            }

            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    const target = button.dataset.type;
                    if (target) showStep(target);
                });
            });
        </script>
    @endpush
@endsection
