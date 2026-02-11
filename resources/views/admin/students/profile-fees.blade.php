@extends('layouts.admin', ['active' => 'students'])

@section('title', 'Student Profile')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .active-tab {
            color: #fdaf22;
            border-color: #fdaf22;
        }

        .active-tab:hover {
            color: #feca6c;
            border-color: #feca6c;
        }

        .hidden {
            display: none;
        }
    </style>
    <div class="p-8">
        <!-- Header -->
        <div class="mb-6 space-y-2">
            <h2 class="text-xl font-bold text-primary font-fredoka">Student Management</h2>
            <p class="text-xs text-primary font-sitka">Manage student information and enrollment</p>
        </div>

        <!-- Back Button -->
        <div class="mb-6 flex items-center gap-1">
            <a href="{{ route('admin.students.management') }}" class="flex gap-1 items-center text-black100 hover:text-black">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Student
            </a>
            <span class="text-black100 mx-2">/</span>
            <span class="text-communicationBtn">Emmanuel Sanusi Lamido</span>
        </div>

        <!-- Student Info Card -->
        <div class="bg-white rounded-lg border-4 border-orange50 p-6 mb-6">
            <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                    <div
                        class="w-20 h-20 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-bold">
                        SM
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl font-bold text-primary font-fredoka">Samuel Musa Ali</h3>
                        <div class="flex items-center gap-1 text-primary text-xs "><span>001 </span> <span>.</span>
                            <p class="">Senior Secondary School 1, A</p>
                        </div>

                        <button
                            class="border border-communicationBtn rounded-full w-6 h-6 text-sm flex items-center justify-center">
                            <i class="fa-solid fa-user text-communicationBtn"></i>
                        </button>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500">
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">Active</span>
                    </label>
                    <button
                        class="px-6 py-2 bg-accent text-black font-mulish text-sm font-semibold rounded-lg hover:bg-accent-hover transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Edit
                    </button>
                </div>
            </div>

            <!-- Student Details Grid -->
            <div class="grid grid-cols-5 gap-6 mt-6">
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">First Name</p>
                    <p class="text-xs text-primary font-sitka">Samuel</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Last Name</p>
                    <p class="text-xs text-primary font-sitka">Ali</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Other Name</p>
                    <p class="text-xs text-primary font-sitka">Musa</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Gender</p>
                    <p class="text-xs text-primary font-sitka">Male</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Date of Birth</p>
                    <p class="text-xs text-primary font-sitka">08/02/2010</p>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-6 mt-4">
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Country</p>
                    <p class="text-xs text-primary font-sitka">Nigeria</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">State of Origin</p>
                    <p class="text-xs text-primary font-sitka">Sokoto</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">LGA</p>
                    <p class="text-xs text-primary font-sitka">Gwadabawa</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Weight (kg)</p>
                    <p class="text-xs text-primary font-sitka">70kg</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Height (cm)</p>
                    <p class="text-xs text-primary font-sitka">1000cm</p>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-6 mt-4">
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Phone Number</p>
                    <p class="text-xs text-primary font-sitka">+234810 000 0000</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Email Address</p>
                    <p class="text-xs text-primary font-sitka">myemail@gmail.com</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Home Address</p>
                    <p class="text-xs text-primary font-sitka">Lagos, Nigeria</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Blood Group</p>
                    <p class="text-xs text-primary font-sitka">O -</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-primary font-sitka mb-1">Genotype</p>
                    <p class="text-xs text-primary font-sitka">AA</p>
                </div>
            </div>
        </div>

        <!-- Tabs and Term Selector -->
        <div class="mb-6 flex items-center justify-between">
            <div class="">
                <nav class="flex space-x-8">
                    <button onclick="showTab('fees')" id="tab-fees"
                        class="px-6 py-2 text-sm font-sitka border-b border-primary text-primary transition-colors">
                        Fees
                    </button>
                    <button onclick="showTab('payment-history')" id="tab-payment-history"
                        class="px-6 py-2 text-sm font-sitka border-b border-primary text-primary transition-colors">
                        Payment History
                    </button>
                    <button onclick="showTab('documents')" id="tab-documents"
                        class="px-6 py-2 text-sm font-sitka border-b border-primary text-primary transition-colors">
                        Document
                    </button>
                </nav>
            </div>

        </div>

        <!-- Payment Statistics Cards -->
        <div id="content-fees" class="tab-content hidden">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mb-6 w-60">
                <label
                    class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Term</option>
                    <option selected>2025/2026 First Term</option>
                </select>
            </div>
            <!-- Statistics Cards -->
            <div class="grid grid-cols-4 gap-6 mb-10">
                <!-- Student Bill -->
                <div class="bg-white rounded-lg border-t-8 border-blue300 p-4 space-y-1.5 shadow-boardsheet">
                    <p class="text-2xl font-bold text-primary font-mulish">N100,247</p>
                    <p class="text-xs text-primary font-mulish">Student Bill</p>
                </div>

                <!-- Discount -->
                <div class="bg-white rounded-lg border-t-8 border-red200 p-4 space-y-1.5 shadow-boardsheet">
                    <p class="text-2xl font-bold text-primary font-mulish">N100,247</p>
                    <p class="text-xs text-primary font-mulish">Discount</p>
                </div>

                <!-- Amount Expected -->
                <div class="bg-white rounded-lg border-t-8 border-green800 p-4 space-y-1.5 shadow-boardsheet">
                    <p class="text-2xl font-bold text-primary font-mulish">N100,247</p>
                    <p class="text-xs text-primary font-mulish">Amount Expected</p>
                </div>

                <!--Amount Paid -->
                <div class="bg-white rounded-lg border-t-8 border-gray300 p-4 space-y-1.5 shadow-boardsheet">
                    <p class="text-2xl font-bold text-primary font-mulish">N100,247</p>
                    <p class="text-xs text-primary font-mulish">Amount Paid</p>
                </div>
                <!--Balance -->
                <div class="bg-white rounded-lg border-t-8 border-red200 p-4 space-y-1.5 shadow-boardsheet">
                    <p class="text-2xl font-bold text-primary font-mulish">N100,247</p>
                    <p class="text-xs text-primary font-mulish">Balance</p>
                </div>
            </div>
        </div>
        <div id="content-payment-history" class="tab-content hidden">
            <div class="flex items-center gap-5 mb-7">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 w-60">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Term</option>
                        <option selected>2025/2026 First Term</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 w-60">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Term</option>
                        <option selected>2025/2026 First Term</option>
                    </select>
                </div>
            </div>
            <!-- Payment History Table -->
            <div class="bg-white rounded-lg  shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class=" border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-sitka text-black font-semibold tracking-wider">
                                    Date</th>
                                <th class="px-6 py-4 text-left text-xs font-sitka text-black font-semibold tracking-wider">
                                    Item</th>
                                <th class="px-6 py-4 text-left text-xs font-sitka text-black font-semibold tracking-wider">
                                    Amount</th>
                                <th class="px-6 py-4 text-left text-xs font-sitka text-black font-semibold tracking-wider">
                                    Method</th>
                                <th class="px-6 py-4 text-left text-xs font-sitka text-black font-semibold tracking-wider">
                                    Status</th>
                                <th class="px-6 py-4 text-left text-xs font-sitka text-black font-semibold tracking-wider">
                                    Receipt</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @for ($i = 1; $i <= 10; $i++)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">08 Nov</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">PTA Fee</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦5,000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Card</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-sm text-primary font-sitka">Successful</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button
                                            class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg hover:bg-primary hover:text-white text-sm">
                                            Download
                                        </button>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div id="content-documents" class="tab-content hidden">
            <div class="w-full min-h-60 h-full flex items-center justify-center flex-col gap-4">
                <h3 class="text-primary text-2xl font-fredoka font-semibold">There are currently no documents.</h3>
                <button class="text-black bg-accent py-4 px-16 rounded-sm font-semibold font-sitka text-sm">Upload Document</button>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            function showTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active class from all tabs
                document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                    tab.classList.remove('active-tab');
                });

                // Show selected tab content
                const contentElement = document.getElementById('content-' + tabName);
                if (contentElement) {
                    contentElement.classList.remove('hidden');
                    console.log(contentElement)
                }

                // Add active class to clicked tab
                const activeTab = document.getElementById('tab-' + tabName);
                if (activeTab) {
                    activeTab.classList.add('active-tab');
                }
            }

            // On load
            document.addEventListener('DOMContentLoaded', () => {
                showTab('fees');
            });
        </script>
    @endpush
@endsection
