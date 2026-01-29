@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Bio Data')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.staff') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Student
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column - Image Upload -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-teal-900 mb-4">Bio Data</h3>
                <p class="text-sm text-gray-600 mb-6">Manage student information and enrolment</p>
                
                <!-- Profile Image Upload -->
                <div class="mb-6">
                    <div class="w-full aspect-square bg-gray-100 rounded-lg flex items-center justify-center mb-4 relative overflow-hidden">
                        <img id="profilePreview" src="" alt="" class="hidden w-full h-full object-cover">
                        <div id="profilePlaceholder" class="text-center">
                            <svg class="w-20 h-20 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <button type="button" onclick="document.getElementById('profileImage').click()" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Browse Profile File
                    </button>
                    <input type="file" id="profileImage" class="hidden" accept="image/*" onchange="previewImage(this)">
                </div>

                <!-- Signature Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Signature</label>
                    <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4 relative overflow-hidden">
                        <img id="signaturePreview" src="" alt="" class="hidden w-full h-full object-contain">
                        <div id="signaturePlaceholder" class="text-center">
                            <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                    </div>
                    <button type="button" onclick="document.getElementById('signatureImage').click()" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                        Upload Signature
                    </button>
                    <input type="file" id="signatureImage" class="hidden" accept="image/*" onchange="previewSignature(this)">
                </div>

                <!-- Gender Selection -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Gender *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="male" class="w-4 h-4 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Male</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="female" class="w-4 h-4 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Female</span>
                        </label>
                    </div>
                </div>

                <!-- Staff Type Selection -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Staff Type *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center">
                            <input type="radio" name="staff_type" value="academic" class="w-4 h-4 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Academic</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="staff_type" value="non-academic" class="w-4 h-4 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Non Academic</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Form Fields -->
        <div class="lg:col-span-2">
            <form class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Last Staff ID -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Staff ID</label>
                        <input type="text" placeholder="0001" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Staff ID -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Staff ID</label>
                        <input type="text" placeholder="Admin" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Enter First Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Enter First Name</label>
                        <input type="text" placeholder="John" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Enter Last Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Enter Last Name</label>
                        <input type="text" placeholder="Doe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Other Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Other Name</label>
                        <input type="text" placeholder="Enter other name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Enter Date of Birth -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Enter Date of Birth</label>
                        <input type="date" placeholder="dd/mm/yyyy" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" placeholder="Enter email address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" placeholder="Enter phone number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Country -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Nigeria</option>
                            <option value="ghana">Ghana</option>
                            <option value="kenya">Kenya</option>
                        </select>
                    </div>

                    <!-- Postal Code -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Postal Code</label>
                        <input type="text" placeholder="Enter postal code" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- State of Origin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">State of Origin</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Please state of origin</option>
                            <option value="lagos">Lagos</option>
                            <option value="abuja">Abuja</option>
                        </select>
                    </div>

                    <!-- Local Government Area -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Local Government Area</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Please local government</option>
                        </select>
                    </div>

                    <!-- Weight -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <input type="text" placeholder="Enter weight" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Height -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Height</label>
                        <input type="text" placeholder="Enter height" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Home Address (Full Width) -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Home Address</label>
                        <textarea rows="4" placeholder="Address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
                    </div>
                </div>

                <!-- Progress Indicator -->
                <div class="mt-8 flex items-center justify-center gap-2">
                    <div class="w-16 h-1 bg-orange-400 rounded"></div>
                    <div class="w-16 h-1 bg-gray-300 rounded"></div>
                    <div class="w-16 h-1 bg-gray-300 rounded"></div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex justify-end">
                    <button type="submit" class="px-8 py-3 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors font-medium">
                        Next
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

