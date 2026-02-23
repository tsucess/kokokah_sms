@extends('layouts.student', ['active' => 'fees'])

@section('title', 'Fees')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 50;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: scroll;
            position: relative;
        }
    </style>
    <div class="p-4 md:px-8 space-y-6">
        <!-- Header -->
        <div class="mb-10 flex flex-col sm:flex-row items-start justify-between gap-6">
            <div class="space-y-2">
                <h2 class="text-xl font-bold text-primary font-fredoka">Fees</h2>
            </div>
            <div class="flex items-center justify-end space-x-3">
                <button
                    class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                    <i class="fa-solid fa-download text-black group-hover:text-primary"></i>
                    Export PDF
                </button>
                <div class="flex items-center ">
                    <button
                        class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                        <svg class="w-5 h-5 text-black group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Export Excel
                    </button>
                    <button
                        class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                        <i class="fa-solid fa-print text-black"></i>
                        Print Broadsheet
                    </button>
                </div>
            </div>
        </div>

        <section class="flex flex-col gap-4 lg:items-end lg:justify-between lg:flex-row">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Total Expenses -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-2 bg-blue300"></div>
                    <p class="text-3xl font-bold text-primary font-inter mb-2">₦495,000</p>
                    <p class="text-xs text-primary font-mulish">Total Expenses</p>

                </div>

                <!-- Approved Expenses -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-2 bg-green700"></div>
                    <p class="text-3xl font-bold text-primary font-inter mb-2">₦495,000</p>
                    <p class="text-xs text-primary font-mulish">Approval Expenses</p>
                </div>

                <!-- Pending Expenses -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-2 bg-red200"></div>
                    <p class="text-3xl font-bold text-primary font-inter mb-2">₦49,000</p>
                    <p class="text-xs text-primary font-mulish">Pending Expenses</p>
                </div>
            </div>
            <a href="{{ route('student.payment-history') }}"
                class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                View Payment History
            </a>
        </section>

        <!-- Fees Table -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Fee
                                Item
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Amount
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Due Date</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-primary/5">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-secondary font-sitka">Partially Paid</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex min-w-40">
                                    <button
                                        class="px-6 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                        View
                                    </button>
                                    <button onclick="openPaymentFeeModal()"
                                        class="px-6 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                        Pay
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-primary/5">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green450 font-sitka">Paid</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                    class=" min-w-40 px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                    Download Reciept
                                </button></td>
                        </tr>
                        <tr class="hover:bg-primary/5">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">Unpaid</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                    onclick="openPaymentFeeModal()"
                                    class="min-w-40 px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                    Pay Now
                                </button></td>
                        </tr>
                        <tr class=" hover:bg-primary/5">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green450 font-sitka">Paid</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                    class="min-w-40 px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                    Download Reciept
                                </button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Payment Fee Modal -->
    <div id="paymentFeeModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8">

            <div class="flex justify-between items-center mb-6">

                <h2 class="text-xl font-semibold text-primary font-fredoka">Payment Fee</h2>

                <button onclick="closePaymentFeeModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <form id="messageForm" class="space-y-6 flex flex-col">
                <!--Fee Item -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Fee
                        Item</label>
                    <input type="text" placeholder="Tuition Fee" class="w-full outline-none text-primary text-sm">
                </div>

                <!--Amount Due -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Amount
                        Due</label>
                    <input type="text" placeholder="₦200,000" class="w-full outline-none text-primary text-sm">
                </div>

                <!--Amount Paid -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Amount
                        Paid</label>
                    <input type="text" placeholder="₦300,000" class="w-full outline-none text-primary text-sm">
                </div>

                <!--Amount to Pay -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Amount to
                        Pay</label>
                    <input type="text" placeholder="₦100,000" class="w-full outline-none text-primary text-sm">
                </div>

                <!-- Payment Method -->
                <div>
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Payment
                            Method</label>
                        <select name="" id="" class="w-full outline-none text-primary text-sm">
                            <option value="">Card</option>
                        </select>
                    </div>
                    <p class="text-xs text-green450 mt-1 font-sitka text-right">Payment secured by Paystack <span
                            class="text-black">✔</span></p>
                </div>

                <!--Email Address -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Email
                        Address</label>
                    <input type="text" placeholder="myemail@example.com"
                        class="w-full outline-none text-primary text-sm">
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-3 py-4">
                    <button type="button" onclick="closePaymentFeeModal()"
                        class="px-6 py-3 border border-primary text-primary rounded hover:bg-primary hover:text-white transition-colors font-semibold text-sm font-sitka">
                        Cancel
                    </button>
                    <button type="button" onclick="openPaymentSuccessModal()"
                        class="px-6 py-3 rounded bg-accent text-black hover:bg-accent-hover font-semibold font-sitka text-sm transition-colors">
                        Proceed to payment
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Payment Fee Modal -->
    <div id="paymentSuccessModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8 ">
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow mb-4 mx-auto">
                <i class="fa-solid fa-circle-check text-green550"></i>
            </div>

            <div class="flex justify-between flex-col gap-6 mb-6">
                <div class="flex flex-col gap-2 items-center">
                    <div class="space-y-0.5">
                        <h2 class="text-black400 font-poppins font-semibold text-sm text-center">Payment Success!</h2>
                        <span class="font-poppins text-xs text-center">Your payment was received successfully.</span>
                    </div>
                    <div class="w-60 h-px bg-gray750"></div>
                    <div class="space-y-0.5">
                        <span class="font-poppins text-xs text-center">Total Payment</span>
                        <h2 class="text-black400 font-poppins font-semibold text-sm text-center">₦20,000</h2>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Receipt  Number</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">2025/INV/003112</span>
                        </div>
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Student</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">John Paul</span>
                        </div>
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Class</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">SS2 - A - Science</span>
                        </div>
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Amount Paid</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">₦20,000</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Date</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">16 Nov 2025</span>
                        </div>
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Payment Method</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">Card (Paystack)</span>
                        </div>
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Transaction Ref</span>
                            <span class="text-xs text-black400 font-poppins font-semibold">PSK-49038390KW</span>
                        </div>
                        <div class="flex justify-between items-center gap-2">
                            <span class="text-xs text-gray850 font-poppins">Payment Status</span>
                            <span class="text-xs text-green550 px-2 py-1 rounded-full font-poppins font-medium bg-green550/10">Success</span>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Action Buttons -->
            <div class="flex items-center justify-end">
            <button class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-xs md:text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
               Download Receipt
            </button>
            <button class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-xs md:text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                Back to My Fees
            </button>
            </div>
        </div>
    </div>




    @push('scripts')
        <script>
            function openPaymentFeeModal() {
                document.getElementById('paymentFeeModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closePaymentFeeModal() {
                document.getElementById('paymentFeeModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            function openPaymentSuccessModal() {
                document.getElementById('paymentFeeModal').classList.remove('active');
                document.body.style.overflow = 'auto';

                document.getElementById('paymentSuccessModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closePaymentSuccessModal() {
                document.getElementById('paymentSuccessModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                const paymentFeeModal = document.getElementById('paymentFeeModal');
                const paymentSuccessModal = document.getElementById('paymentSuccessModal');

                if (event.target === paymentFeeModal) {
                    closePaymentFeeModal();
                }

                if (event.target === paymentSuccessModal) {
                    closePaymentSuccessModal();
                }

            });
        </script>
    @endpush

@endsection
