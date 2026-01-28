@extends('layouts.superadmin', ['active' => 'subscription'])

@section('title', 'Subscription')
@section('page-title', 'Subscription')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button onclick="openSubscriptionModal()" class="px-4 py-2 bg-accent text-primary rounded-lg font-medium hover:bg-accent-hover transition-colors">
        + Add New Subscription
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Monthly Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-primary mb-2">Monthly Revenue</p>
            <p class="text-3xl font-fredoka text-primary">₦100,000,000</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">2% this month</span>
            </div>
        </div>

        <!-- Active Subscription -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-primary mb-2">Active Subscription</p>
            <p class="text-3xl font-fredoka text-primary">124</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">7% this month</span>
            </div>
        </div>

        <!-- Trial Accounts -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-primary mb-2">Trial Accounts</p>
            <p class="text-3xl font-fredoka text-primary">8</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">3% this month</span>
            </div>
        </div>

        <!-- Churn Rate -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-primary mb-2">Churn Rate</p>
            <p class="text-3xl font-fredoka text-primary">24%</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">5% this month</span>
            </div>
        </div>
    </div>

    <!-- Pricing Tiers -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Basic Plan -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-school-badge rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-secondary font-sitka">B</span>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-primary font-sitka text-body2">Basic</h3>
                        <p class="text-xs text-primary font-sitka">Perfect for small schools</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <div class="mb-6">
                <div class="flex items-baseline">
                    <span class="text-3xl font-bold text-primary">₦100,000</span>
                    <span class="text-primary ml-1">/month</span>
                </div>
            </div>

            <ul class="space-y-5 mb-6">
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Up to 100 students
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Basic reporting
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Email support
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Parent portal
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Advanced analytics
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    API access
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Custom branding
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Priority support
                </li>
            </ul>

            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-6 py-2 bg-accent text-black rounded-full font-medium hover:bg-accent-hover transition-colors">
                    25 schools
                </button>
                <button class="px-2 py-2 rounded-full bg-white border border-school-btn">
                    <span class="text-body5 text-black">Revenue ₦10,000/mo</span>
                </button>

            </div>
        </div>

        <!-- Standard Plan -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-school-badge rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-secondary font-sitka">S</span>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-primary font-sitka text-body2">Standard</h3>
                        <p class="text-xs text-primary font-sitka">Ideal for growing schools</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <div class="mb-6">
                <div class="flex items-baseline">
                    <span class="text-3xl font-bold text-primary">₦400,000</span>
                    <span class="text-primary ml-1">/month</span>
                </div>
            </div>

            <ul class="space-y-5 mb-6">
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Up to 1000 students
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Advanced reporting
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Priority Email support
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Parent portal & teacher portals
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Advanced analytics
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    API access
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Custom branding
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    24/7 phone support
                </li>
            </ul>

            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-6 py-2 bg-accent text-black rounded-full font-medium hover:bg-accent-hover transition-colors">
                    52 schools
                </button>
                <button class="px-2 py-2 rounded-full bg-white border border-school-btn">
                    <span class="text-body5 text-black">Revenue ₦10,000/mo</span>
                </button>
            </div>
        </div>

        <!-- Premium Plan -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-school-badge rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-secondary font-sitka">P</span>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-primary font-sitka text-body2">Premium</h3>
                        <p class="text-xs text-primary font-sitka">Complete solution for large schools</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <div class="mb-6">
                <div class="flex items-baseline">
                    <span class="text-3xl font-bold text-primary">₦1,400,000</span>
                    <span class="text-primary ml-1">/month</span>
                </div>
            </div>

            <ul class="space-y-5 mb-6">
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Unlimited students
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Custom reporting
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    24/7 phone support
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Full platform access
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Advanced analytics
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Full API access
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Custom branding
                </li>
                <li class="flex items-start text-sm text-black">
                    <i class="fa-solid fa-user-graduate mr-2 flex-shrink-0 text-black"></i>
                    Dedicated account manager
                </li>
            </ul>

            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-6 py-2 bg-accent text-black rounded-full font-medium hover:bg-accent-hover transition-colors">
                    47 schools
                </button>
                <button class="px-2 py-2 rounded-full bg-white border border-school-btn">
                    <span class="text-body5 text-black">Revenue ₦10,000/mo</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Recently Transactions -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4">
            <h2 class="text-lg font-semibold text-primary font-fredoka">Recently Transactions</h2>
            <p class="text-sm text-primary font-fredoka">Latest subscription payments and billing</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class=" border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-5 text-left text-body4 font-semibold text-black font-sitka tracking-wider">School Name</th>
                        <th class="px-6 py-5 text-left text-body4 font-semibold text-black font-sitka tracking-wider">Plan</th>
                        <th class="px-6 py-5 text-left text-body4 font-semibold text-black font-sitka tracking-wider">Amount</th>
                        <th class="px-6 py-5 text-left text-body4 font-semibold text-black font-sitka tracking-wider">Date</th>
                        <th class="px-6 py-5 text-left text-body4 font-semibold text-black font-sitka tracking-wider">Status</th>
                        <th class="px-6 py-5 text-left text-body4 font-semibold text-black font-sitka tracking-wider">Next Billing</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-body4 font-medium font-sitka text-primary">Greenwood Academy</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-body4 font-medium bg-gray-100 text- black rounded-full">Premium</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-body4 text-primary font-sitka">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-body4 text-primary font-sitka">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-body4 font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-body4 text-primary font-sitka">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary">Riverside Academy</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text- black rounded-full">Standard</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary">Oakmont International</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text- black rounded-full">Premium</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary">Maple Leaf School</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text- black rounded-full">Basic</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text- black rounded-full">Pending</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary">Brighton Academy</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text- black rounded-full">Premium</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary">23/02/2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <button class="px-4 py-1 border border- primary rounded-lg text-body5 font-medium text-primary bg-white hover:bg-gray-50">
                Previous
            </button>
            <div class="text-body5 text-pageColor">
                Page <span class="font-medium">1</span> of <span class="font-medium">12</span>
            </div>
            <button class="px-4 py-1 border border- primary rounded-lg text-body5 font-medium text-primary bg-white hover:bg-gray-50">
                Next
            </button>
        </div>
    </div>

    <!-- Upcoming Renewals -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-primary">Upcoming Renewals</h2>
            <p class="text-sm text-primary">Schools with upcoming subscription renewals</p>
        </div>
        <div class="divide-y divide-gray-200">
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-primary">Sunset Valley School</h3>
                    <p class="text-xs text-search">Standard Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-primary">5 days</p>
                        <p class="text-xs text-search">until renewal</p>
                    </div>
                    <button class="px-4 py-1 bg-gray-900 text-white text-sm rounded-lg hover:bg- black">Paid</button>
                    <button class="px-4 py-1 border border-primary text-primary text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-primary">Mountain Peak Academy</h3>
                    <p class="text-xs text-search">Basic Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-primary">5 days</p>
                        <p class="text-xs text-search">until renewal</p>
                    </div>
                    <button class="px-4 py-1 bg-gray-100 text-black text-sm rounded-lg hover:bg-gray-200">Medium Risk</button>
                    <button class="px-4 py-1 border border-primary text-primary text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-primary">Lakeside Elementary</h3>
                    <p class="text-xs text-search">Premium Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-primary">5 days</p>
                        <p class="text-xs text-search">until renewal</p>
                    </div>
                    <button class="px-4 py-1 bg-gray-900 text-white text-sm rounded-lg hover:bg- black">Paid</button>
                    <button class="px-4 py-1 border border-primary text-primary text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-primary">Forest Creek School</h3>
                    <p class="text-xs text-search">Standard Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-primary">5 days</p>
                        <p class="text-xs text-search">until renewal</p>
                    </div>
                    <button class="px-4 py-1 bg-gray-100 text-black text-sm rounded-lg hover:bg-gray-200">High Risk</button>
                    <button class="px-4 py-1 border border-primary text-primary text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <button class="px-4 py-1 border border- primary rounded-lg text-body5 font-medium text-primary bg-white hover:bg-gray-50">
                Previous
            </button>
            <div class="text-body5 text-pageColor">
                Page <span class="font-medium">1</span> of <span class="font-medium">12</span>
            </div>
            <button class="px-4 py-1 border border- primary rounded-lg text-body5 font-medium text-primary bg-white hover:bg-gray-50">
                Next
            </button>
        </div>
    </div>
</div>

<!-- Add/Edit Subscription Modal -->
<div id="subscriptionModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Edit Subscription - Kokokah SMS Subscription</h3>
            <button onclick="closeSubscriptionModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Subscription Title -->
            <div>
                <label class="block text-sm font-medium mb-2" style="color: #004A53;">Subscription Title</label>
                <input type="text" placeholder="Enter subscription title" value="Kokokah SMS Subscription" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
            </div>

            <!-- Subscription Description -->
            <div>
                <label class="block text-sm font-medium mb-2" style="color: #004A53;">Subscription Description</label>
                <textarea rows="4" placeholder="Enter subscription description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent resize-none" style="font-family: 'Sitka', Georgia, serif;">Kokokah SMS Subscription</textarea>
            </div>

            <!-- Price and Product Row -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2" style="color: #004A53;">Price</label>
                    <input type="text" placeholder="Enter price" value="₦10,000" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2" style="color: #004A53;">Select Product</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">
                        <option>Monthly</option>
                        <option>Quarterly</option>
                        <option>Yearly</option>
                    </select>
                </div>
            </div>

            <!-- Packages -->
            <div>
                <label class="block text-sm font-medium mb-2" style="color: #004A53;">Packages</label>
                <div class="border border-gray-300 rounded-lg p-4 space-y-3">
                    <div class="flex items-center">
                        <input type="checkbox" id="package1" checked class="w-4 h-4 rounded border-gray-300 text-accent focus:ring-accent">
                        <label for="package1" class="ml-3 text-sm" style="color: #004A53;">Basic Package - Student Management</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="package2" class="w-4 h-4 rounded border-gray-300 text-accent focus:ring-accent">
                        <label for="package2" class="ml-3 text-sm" style="color: #004A53;">Standard Package - Full Features</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="package3" class="w-4 h-4 rounded border-gray-300 text-accent focus:ring-accent">
                        <label for="package3" class="ml-3 text-sm" style="color: #004A53;">Premium Package - Advanced Analytics</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button onclick="closeSubscriptionModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Save
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Modal functions
function openSubscriptionModal() {
    const modal = document.getElementById('subscriptionModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeSubscriptionModal() {
    const modal = document.getElementById('subscriptionModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'subscriptionModal') {
        closeSubscriptionModal();
    }
});
</script>
@endpush

@endsection
