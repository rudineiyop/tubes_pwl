<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group col-6 my-2">
            <label for="current_password">Current Password</label>
            <input id="current_password" name="current_password" type="password" class="form-control{{ $errors->updatePassword->has('current_password') ? ' is-invalid' : '' }}" autocomplete="current-password">
            @if ($errors->updatePassword->has('current_password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->updatePassword->first('current_password') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group col-6 my-2">
            <label for="password">New Password</label>
            <input id="password" name="password" type="password" class="form-control{{ $errors->updatePassword->has('password') ? ' is-invalid' : '' }}" autocomplete="new-password">
            @if ($errors->updatePassword->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->updatePassword->first('password') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group col-6 my-2">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control{{ $errors->updatePassword->has('password_confirmation') ? ' is-invalid' : '' }}" autocomplete="new-password">
            @if ($errors->updatePassword->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->updatePassword->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
        

        <div class="flex items-center gap-4">
            <button class="btn btn-secondary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Tersimpan!') }}</p>
            @endif
        </div>
    </form>
</section>
