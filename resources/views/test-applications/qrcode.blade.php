<x-guest-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div
                class="border border-gray-200 bg-black/5 p-6 shadow-lg dark:border-secondary dark:bg-white/5 sm:rounded-md sm:p-10 items-center justify-center">
                <h3 class="mb-6 text-center text-2xl font-bold text-gray-800 dark:text-gray-200">
                    Acesse o seu teste pelo QR Code abaixo
                </h3>
                
                <div class="mt-4 flex justify-center">
                    <div class="rounded-md bg-gray-100 p-4 shadow-md">
                        {!! $testApplication->qr_code !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>