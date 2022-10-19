{{-- <div class="min-h-screen grid grid-cols-2 justify-between mx-auto items-center ">
    <div class="flex flex-col sm:justify-center items-center p-6 sm:p-10 bg-gray-100">
        <div>
            {{ $logo }}
        </div>
    
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div> --}}

<div class="relative min-h-screen bg-gray-50 p-10">
    <div class="flex max-w-7xl mx-auto" >
        {{-- Registrasi --}}
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                  <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                </div>
                <div class="mt-10">
                    {{ $logo }}
                </div>
            </div>
            {{-- EndRegistrasi --}}
            
            <div class="mt-5 md:mt-0 md:col-span-2">
                
                <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
        
    </div>
</div>
