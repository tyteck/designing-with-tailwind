<!-- container for 2 cols -->
<div class="flex items-center max-w-screen-xl mx-auto p-4">
    <div class="pt-4 text-center sm:pb-16 md:pb-20 lg:text-left lg:w-1/2">
        <h1 class="pt-4 text-5xl text-white tracking-normal font-extrabold leading-tight lg:text-5xl">
            Your channel
            <span class="block text-red-400 lg:inline">as a podcast</span>
        </h1>
        <div class="mt-3 text-base text-gray-300 leading-7 md:text-2xl ">
            Upload your videos on youtube (as usual).
            I'll convert it in audio and distribute
            your podcast to Apple Podcasts, Spotify
            and Google Podcasts.
        </div>
        <div class="mt-8 mx-auto text-center lg:mx-0 lg:text-left">
            <a href="#"
                class="text-white font-semibold rounded-full border-white border-2 pt-2 pb-3 px-4 sm:w-auto hover:text-gray-900 hover:bg-white focus:outline-none focus:bg-white focus:shadow-outline focus:border-gray-300">
                Sign up
            </a>
        </div>
    </div>
    <div class="hidden lg:block lg:w-1/2">
        @include('partials.podcast_svg', [ 'cssClass' => 'h-auto w-auto'])
    </div>
</div>
<!-- this one is only displayed in small to medium -->
<div class="block pt-4 lg:hidden">
    @include('partials.podcast_svg', [ 'cssClass' => 'h-auto w-auto'])
</div>