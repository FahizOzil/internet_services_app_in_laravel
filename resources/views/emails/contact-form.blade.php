<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 px-6 py-4">
            <h1 class="text-white text-2xl font-bold">New Contact Form Submission</h1>
            <p class="text-blue-100 text-sm">Internet & Cable Deals</p>
        </div>

        <!-- Content -->
        <div class="p-6">
            <div class="mb-6">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-2 rounded-full mr-3">
                        <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Customer Information</h2>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg space-y-3">
                    <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                        <span class="font-medium text-gray-600">Name:</span>
                        <span class="text-gray-900 font-semibold">{{ $contactData['name'] }}</span>
                    </div>

                    <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                        <span class="font-medium text-gray-600">Email:</span>
                        <a href="mailto:{{ $contactData['email'] }}" class="text-blue-600 hover:text-blue-800 font-medium">
                            {{ $contactData['email'] }}
                        </a>
                    </div>

                    <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                        <span class="font-medium text-gray-600">Phone:</span>
                        <a href="tel:{{ $contactData['phone'] }}" class="text-blue-600 hover:text-blue-800 font-medium">
                            {{ $contactData['phone'] }}
                        </a>
                    </div>

                    <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                        <span class="font-medium text-gray-600">Service Interest:</span>
                        <span class="text-gray-900 capitalize">
                            @if($contactData['service'] === 'internet')
                                Internet Service
                            @elseif($contactData['service'] === 'tv')
                                Cable TV
                            @elseif($contactData['service'] === 'bundle')
                                Internet + TV Bundle
                            @elseif($contactData['service'] === 'support')
                                Technical Support
                            @elseif($contactData['service'] === 'other')
                                Other Inquiry
                            @else
                                Not specified
                            @endif
                        </span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-600">Submitted:</span>
                        <span class="text-gray-900">{{ $contactData['submitted_at'] }}</span>
                    </div>
                </div>
            </div>

            <!-- Message Section -->
            <div class="mb-6">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-2 rounded-full mr-3">
                        <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Customer Message</h2>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-800 leading-relaxed whitespace-pre-wrap">{{ $contactData['message'] }}</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="mailto:{{ $contactData['email'] }}"
                   class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                    <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Reply via Email
                </a>

                <a href="tel:{{ $contactData['phone'] }}"
                   class="inline-flex items-center justify-center px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors">
                    <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    Call Customer
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <p class="text-gray-600 text-sm text-center">
                This email was sent from the Internet & Cable Deals contact form on your website.
            </p>
        </div>
    </div>
</body>
</html>
