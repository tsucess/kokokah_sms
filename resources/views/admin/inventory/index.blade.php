@extends('layouts.admin', ['active' => 'inventory'])

@section('title', 'Inventory Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<style>
    .hidden{
        display: none;
    }
</style>
    <div class="p-8">
        <!-- Header -->
        <div class="mb-7 flex items-center justify-between">
            <div class="flex flex-col gap-1">
                <h2 class="text-2xl font-bold text-primary font-fredoka">Inventory Management</h2>
                <p class="text-sm text-primary font-sitka">This is a rundown display of all classes and subjects with the
                    approved time slot. You can choose to add or makes change</p>
            </div>
            <button
            onclick="openInventoryItemModal()"
                class="px-4 py-2 bg-accent text-black font-semibold  rounded-lg hover:bg-accent-hover transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Item
            </button>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-4 gap-6 mb-6">
            <!-- Total Items -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-blue300"></div>
                    <div class="p-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">290</p>
                    <p class="text-sm font-semibold text-primary">Total Items</p>

                </div>
            </div>

            <!-- In Stock -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-green400"></div>
                <div class="p-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">290</p>
                    <p class="text-sm font-semibold text-primary">In Stock</p>
                </div>
            </div>

            <!-- Low Stock -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-red200"></div>
                <div class="p-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">290</p>
                    <p class="text-sm font-semibold text-primary">Low Stock</p>
                </div>
            </div>

            <!-- Total Value -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-red200"></div>
                <div class="p-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">₦4,900,000</p>
                    <p class="text-sm font-semibold text-primary">Total Value</p>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="mb-10 flex flex-col gap-8">
            <div class="flex items-center gap-3 w-2/3">
            <!-- Date Range -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                        <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Date Range</label>
                        <input type="date" placeholder="Enter message subject"
                            class="w-full outline-none text-primary text-sm">
                    </div>

            <!-- Category -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Category</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>Category</option>
                    <option>Stationery</option>
                    <option>Furniture</option>
                    <option>Electronics</option>
                </select>
            </div>

            <!-- Status -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label
                            class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Status</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>Status</option>
                    <option>In Stock</option>
                    <option>Low Stock</option>
                    <option>Out of Stock</option>
                </select>
            </div>
            </div>

            <div class="relative">
            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search schools..."
                class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
        </div>
        </div>

        <!-- Inventory Table -->
        <div class="bg-white rounded-lg shadow-lg">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Item
                                Name</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">
                                Category</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">
                                Quantity</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">Unit
                                Price</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">Total
                                Value</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">Date
                                Added</th>
                            <th class="px-6 py-3 text-left text-xs ont-semibold text-black font-sitka tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 - Exercise Books -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary font-sitka">Exercise Books</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm text-primary font-sitka">Stationery</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">200 pcs</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦300</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦60,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="flex items-center text-sm text-primary font-sitka">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    In Stock
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12/12/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex ">
                                    <button onclick="openInventoryItemModal()"
                                        class="px-3 py-1 border border-primary text-primary rounded-l-lg hover:bg-gray-50 text-sm">
                                        View
                                    </button>
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-r-lg hover:bg-gray-50 text-sm">
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 - Chairs -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary font-sitka">Chairs</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm text-primary font-sitka">Furniture</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦15,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦45,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="flex items-center text-sm text-primary font-sitka">
                                    <svg class="w-4 h-4 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Low Stock
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12/12/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex ">
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-l-lg hover:bg-gray-50 text-sm">
                                        View
                                    </button>
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-r-lg hover:bg-gray-50 text-sm">
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 - Projector -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary font-sitka">Projector</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm text-primary font-sitka">Electronics</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦85,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦85,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="flex items-center text-sm text-primary font-sitka">
                                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                    Out of Stock
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12/12/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex ">
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-l-lg hover:bg-gray-50 text-sm">
                                        View
                                    </button>
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-r-lg hover:bg-gray-50 text-sm">
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 - Exercise Books -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary font-sitka">Exercise Books</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm text-primary font-sitka">Stationery</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">200 pcs</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦300</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦60,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="flex items-center text-sm text-primary font-sitka">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    In Stock
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12/12/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex ">
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-l-lg hover:bg-gray-50 text-sm">
                                        View
                                    </button>
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-r-lg hover:bg-gray-50 text-sm">
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 - Chairs -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary font-sitka">Chairs</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm text-primary font-sitka">Furniture</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦15,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦45,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="flex items-center text-sm text-primary font-sitka">
                                    <svg class="w-4 h-4 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Low Stock
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12/12/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex ">
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-l-lg hover:bg-gray-50 text-sm">
                                        View
                                    </button>
                                    <button
                                        class="px-3 py-1 border border-primary text-primary rounded-r-lg hover:bg-gray-50 text-sm">
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Inventory Item Modal -->
    <div id="inventoryItemModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50"
      >
        <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4 max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 pt-4">
                <h3 class="text-lg font-semibold font-fredoka text-primary"> Add Inventory Item</h3>
                <button onclick="closeInventoryItemModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 space-y-6">
                <!-- Item Name -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Item Name
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select...</option>
                        <option value="exercise-books" selected>Exercise Books</option>
                        <option value="chairs">Chairs</option>
                        <option value="projector">Projector</option>
                        <option value="desks">Desks</option>
                    </select>
                </div>

                <!-- Category -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Category
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select...</option>
                        <option value="stationery" selected>Stationary</option>
                        <option value="furniture">Furniture</option>
                        <option value="electronics">Electronics</option>
                        <option value="sports">Sports Equipment</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Quantity
                    </label>
                    <input type="number" value="200 pcs"
                        class="w-full outline-none text-primary text-sm">
                </div>

                <!-- Unit Price -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Unit Price
                    </label>
                    <input type="text" value="₦500"
                        class="w-full outline-none text-primary text-sm">
                </div>

                <!-- Total Value -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Total Value
                    </label>
                    <input type="text" value="₦60,000"
                        class="w-full outline-none text-primary text-sm"
                        readonly>
                </div>

                <!-- Status -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Status
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select...</option>
                        <option value="in-stock" selected>In Stock</option>
                        <option value="low-stock">Low Stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                    </select>
                </div>

                <!-- Date Added -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Date Added
                    </label>
                    <input type="text" value="10 Nov. 2025"
                        class="w-full outline-none text-primary text-sm"
                        readonly>
                </div>

                <!-- Description -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Description
                    </label>
                    <textarea rows="3"
                        class="w-full outline-none text-primary text-sm"
                        placeholder="Enter item description..."></textarea>
                </div>

                <!-- Attach File -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Attach File
                    </label>
                    <div
                        class=" p-6 text-centercursor-pointer">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <p class="text-sm text-gray-600">Click to upload or drag and drop</p>
                        <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX, JPG, PNG (max. 5MB)</p>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 px-6 py-4 bg-white">
                <button
                    class="px-6 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium">
                    Delete Item
                </button>
                <button class="px-6 py-2 rounded-lg font-medium bg-accent text-black hover:bg-accent-hover transition-colors">
                    Edit Item
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Inventory Item Modal functions
            function openInventoryItemModal() {
                const modal = document.getElementById('inventoryItemModal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            }

            function closeInventoryItemModal() {
                const modal = document.getElementById('inventoryItemModal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                if (event.target.id === 'inventoryItemModal') {
                    closeInventoryItemModal();
                }
            });
        </script>
    @endpush

@endsection
