@extends('layouts.superadmin', ['active' => 'subscription'])

@section('title', 'Subscription')
@section('page-title', 'Subscription')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
        + Add New Subscription
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Monthly Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-gray-600 mb-2">Monthly Revenue</p>
            <p class="text-3xl font-bold text-gray-900">₦100,000,000</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">2% this month</span>
            </div>
        </div>

        <!-- Active Subscription -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-gray-600 mb-2">Active Subscription</p>
            <p class="text-3xl font-bold text-gray-900">124</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">7% this month</span>
            </div>
        </div>

        <!-- Trial Accounts -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-gray-600 mb-2">Trial Accounts</p>
            <p class="text-3xl font-bold text-gray-900">8</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">3% this month</span>
            </div>
        </div>

        <!-- Churn Rate -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <p class="text-sm font-medium text-gray-600 mb-2">Churn Rate</p>
            <p class="text-3xl font-bold text-gray-900">24%</p>
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
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-orange-600">B</span>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-gray-900">Basic</h3>
                        <p class="text-xs text-gray-500">Perfect for small schools</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>
            
            <div class="mb-4">
                <div class="flex items-baseline">
                    <span class="text-3xl font-bold text-gray-900">₦100,000</span>
                    <span class="text-gray-500 ml-1">/month</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Up to 100 students
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Basic reporting
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Email support
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Parent portal
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Advanced analytics
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    API access
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Custom branding
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Priority support
                </li>
            </ul>

            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-6 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
                    25 schools
                </button>
                <span class="text-sm text-gray-600">Revenue ₦10,000/mo</span>
            </div>
        </div>

        <!-- Standard Plan -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-orange-600">S</span>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-gray-900">Standard</h3>
                        <p class="text-xs text-gray-500">Ideal for growing schools</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <div class="mb-4">
                <div class="flex items-baseline">
                    <span class="text-3xl font-bold text-gray-900">₦400,000</span>
                    <span class="text-gray-500 ml-1">/month</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Up to 1000 students
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Advanced reporting
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Priority Email support
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Parent portal & teacher portals
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Advanced analytics
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    API access
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Custom branding
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    24/7 phone support
                </li>
            </ul>

            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-6 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
                    52 schools
                </button>
                <span class="text-sm text-gray-600">Revenue ₦10,000/mo</span>
            </div>
        </div>

        <!-- Premium Plan -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-orange-600">P</span>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-gray-900">Premium</h3>
                        <p class="text-xs text-gray-500">Complete solution for large schools</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <div class="mb-4">
                <div class="flex items-baseline">
                    <span class="text-3xl font-bold text-gray-900">₦1,400,000</span>
                    <span class="text-gray-500 ml-1">/month</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Unlimited students
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Custom reporting
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    24/7 phone support
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Full platform access
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Advanced analytics
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Full API access
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Custom branding
                </li>
                <li class="flex items-start text-sm text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Dedicated account manager
                </li>
            </ul>

            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-6 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
                    47 schools
                </button>
                <span class="text-sm text-gray-600">Revenue ₦10,000/mo</span>
            </div>
        </div>
    </div>

    <!-- Recently Transactions -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Recently Transactions</h2>
            <p class="text-sm text-gray-600">Latest subscription payments and billing</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">School Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Next Billing</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Greenwood Academy</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Premium</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Riverside Academy</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Standard</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Oakmont International</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Premium</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Maple Leaf School</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Basic</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Pending</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Brighton Academy</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Premium</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full">Paid</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23/02/2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <button class="text-sm text-gray-600 hover:text-gray-900">Previous</button>
            <span class="text-sm text-gray-600">Page 01 of 12</span>
            <button class="text-sm text-gray-600 hover:text-gray-900">Next</button>
        </div>
    </div>

    <!-- Upcoming Renewals -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Upcoming Renewals</h2>
            <p class="text-sm text-gray-600">Schools with upcoming subscription renewals</p>
        </div>
        <div class="divide-y divide-gray-200">
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-gray-900">Sunset Valley School</h3>
                    <p class="text-xs text-gray-500">Standard Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">5 days</p>
                        <p class="text-xs text-gray-500">until renewal</p>
                    </div>
                    <button class="px-4 py-2 bg-gray-900 text-white text-sm rounded-lg hover:bg-gray-800">Paid</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-gray-900">Mountain Peak Academy</h3>
                    <p class="text-xs text-gray-500">Basic Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">5 days</p>
                        <p class="text-xs text-gray-500">until renewal</p>
                    </div>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-lg hover:bg-gray-200">Medium Risk</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-gray-900">Lakeside Elementary</h3>
                    <p class="text-xs text-gray-500">Premium Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">5 days</p>
                        <p class="text-xs text-gray-500">until renewal</p>
                    </div>
                    <button class="px-4 py-2 bg-gray-900 text-white text-sm rounded-lg hover:bg-gray-800">Paid</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-sm font-medium text-gray-900">Forest Creek School</h3>
                    <p class="text-xs text-gray-500">Standard Plan • ₦10,000/month</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">5 days</p>
                        <p class="text-xs text-gray-500">until renewal</p>
                    </div>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-lg hover:bg-gray-200">High Risk</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">Contact</button>
                </div>
            </div>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <button class="text-sm text-gray-600 hover:text-gray-900">Previous</button>
            <span class="text-sm text-gray-600">Page 01 of 12</span>
            <button class="text-sm text-gray-600 hover:text-gray-900">Next</button>
        </div>
    </div>
</div>
@endsection
