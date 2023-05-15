<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div style="border:1px solid blue;font-size:25px;">
<b><span style="color:white;background-color:blue;padding:2px">MEDI</span>WARE</b>            </div>
            <p style="font-size:12px;text-align:center"><b>MEDICAL AWARENESS</b></p>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
