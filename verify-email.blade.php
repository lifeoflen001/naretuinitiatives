<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">
                Verify Your Email
            </h2>

            <!-- Description -->
            <p class="text-sm text-gray-600 text-center mb-6">
                Thanks for signing up! Before getting started, please verify your email 
                address by clicking the link we just sent you. 
                If you didn’t receive the email, we will gladly send you another.
            </p>

            <!-- Success Message -->
            @if (session('status') == 'verification-link-sent')
                <div id="successMessage"
                     class="mb-4 px-4 py-3 rounded-lg bg-green-100 border border-green-400 text-green-700 text-sm transition-opacity duration-500">
                    A new verification link has been sent to your email address.
                </div>

                <script>
                    setTimeout(() => {
                        const msg = document.getElementById('successMessage');
                        if (msg) {
                            msg.style.opacity = '0';
                            setTimeout(() => msg.remove(), 500);
                        }
                    }, 2000);
                </script>
            @endif

            <!-- Buttons -->
            <div class="flex flex-col space-y-4">

                <!-- Resend -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-300 shadow-md">
                        Resend Verification Email
                    </button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2.5 rounded-lg transition duration-300">
                        Log Out
                    </button>
                </form>

            </div>

        </div>
    </div>
</x-guest-layout>
