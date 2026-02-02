@extends('layouts.admin', ['active' => 'student'])

@section('title', 'Bio Data')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.students') }}" class="inline-flex items-center text-sm font-sitka gap-2 text-black100 hover:text-grey400">
            <i class="fa-solid fa-arrow-left text-black100"></i>
            Back to Student
        </a>
    </div>

    <div class="flex flex-col gap-1 mb-6">
        <h3 class="text-lg font-semibold text-primary font-fredoka">Bio Data</h3>
                <p class="text-sm text-primary font-sitka">Manage student information and enrolment</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column - Image Upload -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-auth">


                <!-- Profile Image Upload -->
                <div class="mb-6">
                    <div class="w-full aspect-square bg-gray-100 rounded-lg flex items-center justify-center mb-4 relative overflow-hidden ">
                        <img id="profilePreview" src="" alt="" class="hidden w-full h-full object-cover">
                        <div id="profilePlaceholder" class="text-center">
                            <img src="/images/bio-data-student.jpg" alt="">
                        </div>
                    </div>
                    <button type="button" onclick="document.getElementById('profileImage').click()" class="w-full px-4 py-2 bg-blue200 text-white rounded-lg hover:bg-blue100 transition-colors flex gap-2 items-center justify-center">

                        Browse file
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <input type="file" id="profileImage" class="hidden" accept="image/*" onchange="previewImage(this)">
                </div>

                <!-- Gender Selection -->
                <div class="">
                    <label class="block text-sm font-medium text-primary mb-3">Gender *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="male" class="w-4 h-4 border-black border">
                            <span class="text-sm text-black font-sitka">Male</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="female" class="w-4 h-4 border-black border">
                            <span class=" text-sm text-black font-sitka">Female</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Form Fields -->
        <div class="lg:col-span-2">
            <form class="px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Last Student ID -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label  class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Last Student ID</label>
                        <input type="text" placeholder="0001" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Student ID -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Student ID</label>
                        <input type="text" placeholder="Enter student ID" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Enter First Name -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter First Name</label>
                        <input type="text" placeholder="John" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Enter Last Name -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter Last Name</label>
                        <input type="text" placeholder="Doe" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Other Name -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Other Name</label>
                        <input type="text" placeholder="Enter other name" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Enter Date of Birth -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter Date of Birth</label>
                        <input type="date" placeholder="dd/mm/yyyy" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Email Address -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Email Address</label>
                        <input type="email" placeholder="Enter email address" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Phone Number -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Phone Number</label>
                        <input type="tel" placeholder="Enter phone number" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Country -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Country</label>
                        <select class="w-full outline-none text-primary text-sm">
                            <option value="">Nigeria</option>
                            <option value="ghana">Ghana</option>
                            <option value="kenya">Kenya</option>
                        </select>
                    </div>

                    <!-- Postal Code -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Postal Code</label>
                        <input type="text" placeholder="Enter postal code" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- State of Origin -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">State of Origin</label>
                        <select class="w-full outline-none text-primary text-sm">
                            <option value="">Please state of origin</option>
                            <option value="lagos">Lagos</option>
                            <option value="abuja">Abuja</option>
                        </select>
                    </div>

                    <!-- Local Government Area -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Local Government Area</label>
                        <select class="w-full outline-none text-primary text-sm">
                            <option value="">Please local government</option>
                        </select>
                    </div>

                    <!-- Weight -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Weight</label>
                        <input type="text" placeholder="Enter weight" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Height -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Height</label>
                        <input type="text" placeholder="Enter height" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Home Address (Full Width) -->
                    <div class="md:col-span-2 border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Home Address</label>
                        <textarea rows="4" placeholder="Address" class="resize-none w-full outline-none text-primary text-sm"></textarea>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex justify-end">
                    <button type="submit" class="px-20 py-3 bg-accent font-semibold text-black font-sitka rounded-lg hover:bg-accent-hover transition-colors">
                        Save
                    </button>
                </div>
            </form>
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
</script>
@endpush
@endsection

