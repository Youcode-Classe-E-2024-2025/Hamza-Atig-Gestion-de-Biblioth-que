<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#1c1c24] min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-[1200px] bg-[#13131a] rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 relative">
            <a href="/"
                class="absolute top-6 right-6 bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm hover:bg-white/20 transition-colors z-10">
                Back to website →
            </a>
            <div class="relative h-full">
                <img src="https://i.pinimg.com/474x/89/87/8f/89878ff58f80eb2c9ce949c4dd83d635.jpg"
                    alt="Desert landscape" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-purple-900/30"></div>
                <div class="absolute bottom-12 left-12 text-white">
                    <h2 class="text-2xl md:text-4xl font-semibold mb-2">Capturing Moments,</h2>
                    <h2 class="text-2xl md:text-4xl font-semibold">Creating Memories</h2>
                    <div class="flex gap-2 mt-6">
                        <div class="w-4 h-1 bg-white/30 rounded"></div>
                        <div class="w-4 h-1 bg-white/30 rounded"></div>
                        <div class="w-4 h-1 bg-white rounded"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 p-6 md:p-12">
            <div class="max-w-md mx-auto">
                <h1 class="text-white text-2xl md:text-4xl font-semibold mb-2">Login to your account</h1>
                <p class="text-gray-400 mb-8">
                    Don't have an account?
                    <a href="/register" class="text-white hover:underline">Sign Up</a>
                </p>

                <form class="space-y-4">
                    <input type="email" placeholder="Email"
                        class="w-full bg-[#1c1c24] text-white rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-purple-600">
                    <div class="relative">
                        <input type="password" placeholder="Enter your password"
                            class="w-full bg-[#1c1c24] text-white rounded-lg p-3 pr-10 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox"
                            class="rounded bg-[#1c1c24] border-gray-600 text-purple-600 focus:ring-purple-600">
                        <span class="text-gray-400">I agree to the <a href="#" class="text-white hover:underline">Terms
                                & Conditions</a></span>
                    </label>

                    <button type="submit"
                        class="w-full bg-purple-600 text-white rounded-lg p-3 hover:bg-purple-700 transition-colors">
                        Log in
                    </button>

                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-[#13131a] text-gray-400">Or register with</span>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-4">
                        <button type="button"
                            class="w-full md:w-1/2 flex items-center justify-center gap-2 bg-[#1c1c24] text-white rounded-lg p-3 hover:bg-[#25252e] transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z" />
                            </svg>
                            <a href="https://abhirajk.vercel.app/">
                                Google
                            </a>
                        </button>
                        <button type="button"
                            class="w-full md:w-1/2 flex items-center justify-center gap-2 bg-[#1c1c24] text-white rounded-lg p-3 hover:bg-[#25252e] transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17.05,11.97 C17.0389275,10.3054167 18.4521905,9.39916667 18.5,9.36833333 C17.6895905,8.17 16.4353095,7.94416667 15.9415476,7.91916667 C14.9047619,7.81166667 13.9057143,8.49333333 13.3790476,8.49333333 C12.8335714,8.49333333 11.9902381,7.93083333 11.1297619,7.94416667 C10.0233333,7.95916667 8.99642857,8.57583333 8.41309524,9.54833333 C7.20119048,11.5375 8.11357143,14.4758333 9.27357143,16.0708333 C9.86357143,16.8533333 10.5511905,17.7283333 11.4597619,17.7016667 C12.3422619,17.6716667 12.6915476,17.1466667 13.7473809,17.1466667 C14.7897619,17.1466667 15.1161905,17.7016667 16.0422619,17.6866667 C16.995,17.6716667 17.5922619,16.8925 18.1647619,16.1 C18.8576191,15.1866667 19.1397619,14.2916667 19.1522619,14.2466667 C19.1272619,14.2375 17.0647619,13.4366667 17.05,11.97" />
                            </svg>
                            <a href="https://abhirajk.vercel.app/">
                                Apple
                            </a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>