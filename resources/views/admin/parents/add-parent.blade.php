@extends('layouts.admin', ['active' => 'parent'])

@section('title', 'Add New Parent')
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
                <a href="{{ route('admin.parents') }}"
                    class="inline-flex items-center gap-2 text-sm text-black100 hover:text-grey400">
                    <i class="fa-solid fa-arrow-left text-black100"></i>
                    Back to Parent
                </a>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Add New Parent</h3>
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

                        <!-- Gender Selection -->
                        <div class="">
                            <label class="block text-sm font-medium text-primary mb-3 font-sitka">Gender
                                <span class="text-red50">*</span></label>
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


                    </div>
                </div>

                <!-- Right Column - Form Fields -->
                <div class="lg:col-span-2">
                    <form class="px-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Enter First Name -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter First Name</label>
                                <input type="text" placeholder="John" class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Enter Last Name -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Enter Last Name</label>
                                <input type="text" placeholder="Doe"
                                    class="w-full outline-none text-primary text-sm">
                            </div>

                            <!-- Other Name -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Other Name</label>
                                <input type="text" placeholder="Enter Other Name" class="w-full outline-none text-primary text-sm">
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
                                <input type="number" placeholder="Enter postal code"
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

                            <!-- Parent’s Occupation -->
                            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Parent’s Occupation</label>
                                <input type="text" placeholder="Enter Parent’s Occupation"
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
                            <button data-type='link-children' type="button"
                                class="px-20 py-3 bg-accent text-black font-sikta rounded-lg hover:bg-accent-hover transition-colors font-semibold">
                                Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="p-8 step hidden" data-content='link-children'>
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('admin.parents') }}"
                    class="inline-flex items-center gap-2 text-sm text-black100 hover:text-grey400">
                    <i class="fa-solid fa-arrow-left text-black100"></i>
                    Back to Parent
                </a>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Link Children</h3>
                <p class="text-sm text-primary font-sitka">Select a child and the relationship this parent has with the Children.</p>
            </div>
            <div class="flex items-center gap-4 mb-10">
                 <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Search for Child</label>
                                <input type="text" placeholder="Search for Child"
                                    class="w-full outline-none text-primary text-sm">
                            </div>
                             <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                                <label
                                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Relationship with Child</label>
                                <input type="text" placeholder="Father"
                                    class="w-full outline-none text-primary text-sm">
                            </div>
                            <button class="bg-accent rounded-xl w-15 h-15 justify-center items-center shrink-0"><i class="fa-solid fa-user-plus fa-lg"></i></button>
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 mb-30">
                <div class="flex flex-col border-2 border-orange50 rounded-lg py-2.5 px-3">
                    <button class="self-end"><i class="fa-regular fa-circle-xmark text-grey600"></i></button>
                    <div class="flex items-center gap-2">
                        <div class="w-16 h-16 flex justify-center shrink-0 items-center rounded-full bg-primary"><i class="fa-solid fa-user-astronaut fa-xl text-white"></i></div>
                        <div class="flex flex-col">
                            <h4 class="text-base text-primary font-fredoka font-semibold">Samuel Musa Ali</h4>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-fredoka text-primary">Male</span>
                                <span class=" font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">O002</span>
                                <span class="font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-2 border-orange50 rounded-lg py-2.5 px-3">
                    <button class="self-end"><i class="fa-regular fa-circle-xmark text-grey600"></i></button>
                    <div class="flex items-center gap-2">
                        <div class="w-16 h-16 flex justify-center shrink-0 items-center rounded-full bg-primary"><i class="fa-solid fa-user-astronaut fa-xl text-white"></i></div>
                        <div class="flex flex-col">
                            <h4 class="text-base text-primary font-fredoka font-semibold">Samuel Musa Ali</h4>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-fredoka text-primary">Male</span>
                                <span class=" font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">O002</span>
                                <span class="font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-2 border-orange50 rounded-lg py-2.5 px-3">
                    <button class="self-end"><i class="fa-regular fa-circle-xmark text-grey600"></i></button>
                    <div class="flex items-center gap-2">
                        <div class="w-16 h-16 flex justify-center shrink-0 items-center rounded-full bg-primary"><i class="fa-solid fa-user-astronaut fa-xl text-white"></i></div>
                        <div class="flex flex-col">
                            <h4 class="text-base text-primary font-fredoka font-semibold">Samuel Musa Ali</h4>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-fredoka text-primary">Male</span>
                                <span class=" font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">O002</span>
                                <span class="font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">JSS 1</span>
                            </div>
                        </div>
                    </div>
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
                            <button data-type='parent-management' type="submit"
                                class="px-20 py-3 bg-accent text-black font-sikta rounded-lg hover:bg-accent-hover transition-colors font-semibold">
                                Next
                            </button>
                            </div>
                        </div>

        </div>
        <div class="p-8 step hidden"  data-content='parent-management'>
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('admin.staff') }}"
                    class="inline-flex items-center gap-2 text-sm text-black100 hover:text-grey400">
                    <i class="fa-solid fa-arrow-left text-black100"></i>
                    Back to Staff
                </a>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Parent Management</h3>
                <p class="text-sm text-primary font-sitka">Manage Next of Kim information and enrollment</p>
            </div>

            <div class="flex flex-col gap-6">
                <div class="rounded-2xl p-10 border-4 border-orange50 flex flex-col gap-8">
                    <div class="flex">
                        <div class="bg-primary w-24 h-24 rounded-full flex justify-center items-center">
                            <i class="fa-solid fa-user-astronaut fa-2xl text-white"></i>
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
                            <h4 class="font-sitka text-base font-semibold text-primary">Occupation</h4>
                            <p class="font-sitka text-sm text-primary">Realtor</p>
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
                    </div>
                </div>
                <div class="rounded-2xl p-10 border-4 border-orange50 flex flex-col gap-6">
                    <div class="flex flex-col gap-1">
                <h3 class="text-base font-semibold text-primary font-fredoka">Linked Children</h3>
                <p class="text-sm text-primary font-sitka">Below is your next of kin's Information</p>
                    </div>
                     <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col border-2 border-orange50 rounded-lg py-2.5 px-3">
                    <button class="self-end"><i class="fa-regular fa-circle-xmark text-grey600"></i></button>
                    <div class="flex items-center gap-2">
                        <div class="w-16 h-16 flex justify-center shrink-0 items-center rounded-full bg-primary"><i class="fa-solid fa-user-astronaut fa-xl text-white"></i></div>
                        <div class="flex flex-col">
                            <h4 class="text-base text-primary font-fredoka font-semibold">Samuel Musa Ali</h4>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-fredoka text-primary">Male</span>
                                <span class=" font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">O002</span>
                                <span class="font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-2 border-orange50 rounded-lg py-2.5 px-3">
                    <button class="self-end"><i class="fa-regular fa-circle-xmark text-grey600"></i></button>
                    <div class="flex items-center gap-2">
                        <div class="w-16 h-16 flex justify-center shrink-0 items-center rounded-full bg-primary"><i class="fa-solid fa-user-astronaut fa-xl text-white"></i></div>
                        <div class="flex flex-col">
                            <h4 class="text-base text-primary font-fredoka font-semibold">Samuel Musa Ali</h4>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-fredoka text-primary">Male</span>
                                <span class=" font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">O002</span>
                                <span class="font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-2 border-orange50 rounded-lg py-2.5 px-3">
                    <button class="self-end"><i class="fa-regular fa-circle-xmark text-grey600"></i></button>
                    <div class="flex items-center gap-2">
                        <div class="w-16 h-16 flex justify-center shrink-0 items-center rounded-full bg-primary"><i class="fa-solid fa-user-astronaut fa-xl text-white"></i></div>
                        <div class="flex flex-col">
                            <h4 class="text-base text-primary font-fredoka font-semibold">Samuel Musa Ali</h4>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-fredoka text-primary">Male</span>
                                <span class=" font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">O002</span>
                                <span class="font-fredoka text-primary">.</span>
                                <span class="text-[10px] font-fredoka text-primary">JSS 1</span>
                            </div>
                        </div>
                    </div>
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
                                <button data-type='link-children' type="button"
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

