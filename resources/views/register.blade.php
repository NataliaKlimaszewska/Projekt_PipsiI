@extends("layouts.master")

@section("content")
    <div class="max-w-[280px] mx-auto">
        <div class="flex flex-col items-center mt-[10vh] mb-[10vh]">
            <h2 class="mb-5 text-gray-900 font-mono font-bold text-xl">{{ __('messages.register_form.title') }}</h2>

            <button class="flex items-center mb-2 justify-center transition ease-in-out delay-50 px-3 py-2.5 space-x-2 bg-white border border-slate-600 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 focus:ring-opacity-50">
                <svg viewBox="0 0 48 48" width="24" height="24" ...>

                </svg>
                <span class="text-gray-700 font-medium">{{ __('messages.register_form.google_button') }}</span>
            </button>

            <span class="mb-2 text-gray-900">{{ __('messages.register_form.separator') }}</span>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium" />
                <input type="text" name="email" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium" placeholder="{{ __('messages.register_form.email_placeholder') }}" value=""/>
                <input type="password" name="password" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium" placeholder="{{ __('messages.register_form.password_placeholder') }}" value=""/>
                <input type="password" name="password_confirmation" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium" placeholder="{{ __('messages.register_form.confirm_password_placeholder') }}" value=""/>


                <button class="bg-slate-500 hover:bg-slate-700 text-white text-base rounded-lg py-2.5 px-5 transition-colors w-full text-[19px]">
                    {{ __('messages.register_form.submit_button') }}
                </button>
            </form>

            <p class="text-center mt-3 text-[14px]">
                {{ __('messages.register_form.has_account_prompt') }}
                <a href="/login" class="text-gray-600 font-bold hover:underline">{{ __('messages.register_form.login_link') }}</a>
            </p>

            <p class="text-center mt-3 text-[14px] text-gray-500">
                {{ __('messages.register_form.terms_agreement_prefix') }}
                <a href="/terms" class="text-gray-600 hover:underline">{{ __('messages.register_form.terms_link') }}</a>
                {{ __('messages.register_form.terms_separator') }}
                <a href="/privacy" class="text-gray-600 hover:underline">{{ __('messages.register_form.privacy_link') }}</a>.
            </p>
        </div>
    </div>
@endsection
