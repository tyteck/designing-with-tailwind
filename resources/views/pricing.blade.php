@extends('layouts.www')


@section('content')

<div class="container p-4 mx-auto">
    
    @include('partials.pricing_header')

    <div class="flex flex-wrap justify-center py-2 text-gray-900 items-center">    
        <div class="text-center sm:pb-16 md:pb-20 lg:text-left lg:w-1/3">
            <div class="bg-white shadow rounded-lg max-w-md mx-auto lg:min-w-0 relative overflow-hidden">
                <div class="px-8 py-6 bg-gray-100">
                    <h3 class="text-blue-grey-darker uppercase tracking-wide text-lg sm:text-xl text-center font-bold my-0">
                        Starter
                    </h3>
                </div>
                <div class="px-8 pb-8 text-base md:text-lg">
                    <!-- price -->
                    <div class="text-center py-4">
                        <span
                            class="inline-flex items-center font-display text-4xl md:text-5xl font-bold text-black mr-2 sm:mr-3">
                            <span class="text-xl md:text-2xl">&euro;</span><span class="billing-price">9</span>
                        </span>
                        <span class="text-gray-600 billing-period">/mo</span>
                    </div>
                    <!-- core features -->
                    <div>
                        <ul class="px-2 sm:px-6">
                            <li class="flex items-start mb-4">
                                <span class="mr-4 mt-1">
                                    @include('svg.check_mark',['cssClass'=>'h-5 w-5 block'])
                                </span>
                                <span><strong>1 video by week</strong></span>
                            </li>
                            @include ('partials.standard_premium_items')
                        </ul>

                        <!-- call to action -->
                        <div class="text-center mt-12">
                            <a class="w-full text-lg sm:text-xl block bg-no-image rounded-lg focus:outline-none bg-blue-grey hover:bg-blue-grey-dark focus:bg-blue-grey-dark text-blue-grey-darker font-semibold px-6 py-3 sm:py-4"
                                href="https://gum.co/LsTNA/launchday" data-gumroad-single-product="true">
                                Register now
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="mt-4 text-center sm:pb-16 md:pb-20 lg:text-left lg:w-1/3">
            <div class="bg-white shadow rounded-lg max-w-md mx-auto lg:min-w-0 relative overflow-hidden">
                <div class="px-8 py-6 bg-grey-lighter">
                    <h3 class="text-blue-grey-darker uppercase tracking-wide text-lg sm:text-xl text-center font-bold my-0">
                        Professionnal
                    </h3>
                </div>
                <div class="px-8 pb-8 text-base md:text-lg">
                    <!-- price -->
                    <div class="text-center py-4">
                        <span
                            class="inline-flex items-center font-display text-4xl md:text-5xl font-bold text-black mr-2 sm:mr-3">
                            <span class="text-xl md:text-2xl">&euro;</span><span class="billing-price">29</span>
                        </span>
                        <span class="text-gray-600 billing-period">/mo</span>
                    </div>
                    <!-- core features -->
                    <div>
                        <ul class="px-2 sm:px-6">
                            <li class="flex items-start mb-4">
                                <span class="mr-4 mt-1">
                                    @include('svg.check_mark',['cssClass'=>'h-5 w-5 block'])
                                </span>
                                <span><strong>3 videos by week</strong></span>
                            </li>
                            @include ('partials.standard_premium_items')
                        </ul>

                        <!-- call to action -->
                        <div class="text-center mt-12">
                            <a class="w-full text-lg sm:text-xl block bg-no-image rounded-lg focus:outline-none bg-blue-grey hover:bg-blue-grey-dark focus:bg-blue-grey-dark text-blue-grey-darker font-semibold px-6 py-3 sm:py-4"
                                href="https://gum.co/LsTNA/launchday" data-gumroad-single-product="true">
                                Register now
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="mt-24 text-center sm:pb-16 md:pb-20 lg:text-left lg:w-1/3">
            <div class="bg-white shadow rounded-lg max-w-md mx-auto lg:min-w-0 relative overflow-hidden">
                <div class="px-8 py-6 bg-gray-100">
                    <h3 class="text-blue-grey-darker uppercase tracking-wide text-lg sm:text-xl text-center font-bold my-0">
                        Business
                    </h3>
                </div>
                <div class="px-8 pb-8 text-base md:text-lg">
                    <!-- price -->
                    <div class="text-center py-4">
                        <span
                            class="inline-flex items-center font-display text-4xl md:text-5xl font-bold text-black mr-2 sm:mr-3">
                            <span class="text-xl md:text-2xl">&euro;</span><span class="billing-price">79</span>
                        </span>
                        <span class="text-gray-600 billing-period">/mo</span>
                    </div>
                    <!-- core features -->
                    <div>
                        <ul class="px-2 sm:px-6">
                            <li class="flex items-start mb-4">
                                <span class="mr-4 mt-1">
                                    @include('svg.check_mark',['cssClass'=>'h-5 w-5 block'])
                                </span>
                                <span><strong>1 video by week</strong></span>
                            </li>
                            @include ('partials.standard_premium_items')
                        </ul>

                        <!-- call to action -->
                        <div class="text-center mt-12">
                            <a class="w-full text-lg sm:text-xl block bg-no-image rounded-lg focus:outline-none bg-blue-grey hover:bg-blue-grey-dark focus:bg-blue-grey-dark text-blue-grey-darker font-semibold px-6 py-3 sm:py-4"
                                href="https://gum.co/LsTNA/launchday" data-gumroad-single-product="true">
                                Register now
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>


    <div class="p-4 mt-12 block lg:flex lg:items-center lg:flex-row-reverse lg:mt-16">
        <!--  PRICE WITH EMPHASIS -->
        <div
            class="bg-white shadow rounded-lg mt-16 max-w-xs mx-auto lg:max-w-full lg:rounded-r-none lg:min-w-0 lg:w-2/5 lg:mt-0 overflow-hidden">
            <div class="px-8 py-6 bg-grey-lighter">
                <h3 class="text-blue-grey-darker uppercase tracking-wide text-xl text-center font-bold my-0">
                    Starter
                </h3>
            </div>

            <div class="px-8 pb-8 text-base md:text-lg">
                <div class="text-center py-4">
                    <span
                        class="line-through opacity-75 inline-flex items-center font-display text-lg md:text-xl font-semibold text-grey-dark mr-2 sm:mr-3">
                        <span class="text-xl">$</span><span>99</span>
                    </span>
                    <span
                        class="inline-flex items-center font-display text-4xl md:text-5xl font-bold text-black mr-2 sm:mr-3">
                        <span class="text-xl md:text-2xl">$</span><span>79</span>
                    </span>
                    <span
                        class="inline-flex items-center font-display text-lg md:text-xl font-bold text-grey-dark mr-2 sm:mr-3">
                        USD
                    </span>
                </div>
                <div>
                    <ul class="list-reset px-2 sm:px-6">
                        <li class="flex items-start mb-4">
                            <span class="mr-4 mt-1"><svg class="h-5 w-5 block" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <g fill="none" fill-rule="evenodd">
                                        <circle cx="10" cy="10" r="10" fill="#9CE2B6"></circle>
                                        <polyline stroke="#126D34" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" points="6 10 8.667 12.667 14 7.333"></polyline>
                                    </g>
                                </svg></span>
                            <span><strong>The 218-page book</strong> in PDF format</span>
                        </li>

                    </ul>



                    <div class="text-center mt-12">
                        <a class="w-full text-lg sm:text-xl block bg-no-image rounded-lg focus:outline-none bg-blue-grey hover:bg-blue-grey-dark focus:bg-blue-grey-dark text-blue-grey-darker font-semibold px-6 py-3 sm:py-4"
                            href="https://gum.co/LsTNA/launchday" data-gumroad-single-product="true">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CENTRAL PRICE -->
        <div class="bg-white shadow rounded-lg max-w-md mx-auto lg:min-w-0 lg:w-3/5 relative overflow-hidden">
            <div class="px-8 py-6 bg-grey-lighter">
                <h3 class="text-blue-grey-darker uppercase tracking-wide text-lg sm:text-xl text-center font-bold my-0">
                    Professionnal
                </h3>
            </div>

            <div class="px-8 pb-8 text-base md:text-lg">
                <div class="text-center py-6 lg:py-4">
                    <span
                        class="line-through opacity-75 inline-flex items-center font-display text-xl md:text-2xl font-semibold text-grey-dark mr-3 sm:mr-4">
                        <span class="text-xl">$</span><span>249</span>
                    </span>
                    <span
                        class="inline-flex items-center font-display text-5xl md:text-6xl font-bold text-black mr-3 sm:mr-4">
                        <span class="text-2xl md:text-3xl">$</span><span>149</span>
                    </span>
                    <span
                        class="inline-flex items-center font-display text-xl md:text-2xl font-bold text-grey-dark mr-3 sm:mr-4">
                        USD
                    </span>
                </div>
                <div>
                    <ul class="list-reset px-2 sm:px-6">
                        <li class="flex items-start mb-4">
                            <span class="mr-4 mt-1"><svg class="h-5 w-5 block" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <g fill="none" fill-rule="evenodd">
                                        <circle cx="10" cy="10" r="10" fill="#9CE2B6"></circle>
                                        <polyline stroke="#126D34" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" points="6 10 8.667 12.667 14 7.333"></polyline>
                                    </g>
                                </svg></span>
                            <span><strong>The 218-page book</strong> in PDF format</span>
                        </li>
                    </ul>

                    <div class="text-center mt-12">
                        <a class="block w-full text-xl sm:text-2xl inline-block bg-no-image rounded-lg focus:outline-none bg-indigo hover:bg-indigo-dark focus:bg-indigo-dark text-white font-semibold px-6 py-4 sm:py-5"
                            href="https://gum.co/MyQsm/launchday" data-gumroad-single-product="true">
                            Buy Now
                        </a>
                        <p class="text-base mt-4 mb-0">Buying for your team? <a href="https://gum.co/nFsfq">View team
                                pricing options</a>.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECOND PRICE WITH EMPHASIS -->
        <div
            class="bg-white shadow rounded-lg mt-16 max-w-xs mx-auto lg:max-w-full lg:rounded-r-none lg:min-w-0 lg:w-2/5 lg:mt-0 overflow-hidden">
            <div class="px-8 py-6 bg-grey-lighter">
                <h3 class="text-blue-grey-darker uppercase tracking-wide text-xl text-center font-bold my-0">
                    Starter
                </h3>
            </div>

            <div class="px-8 pb-8 text-base md:text-lg">
                <div class="text-center py-4">
                    <span
                        class="line-through opacity-75 inline-flex items-center font-display text-lg md:text-xl font-semibold text-grey-dark mr-2 sm:mr-3">
                        <span class="text-xl">$</span><span>99</span>
                    </span>
                    <span
                        class="inline-flex items-center font-display text-4xl md:text-5xl font-bold text-black mr-2 sm:mr-3">
                        <span class="text-xl md:text-2xl">$</span><span>79</span>
                    </span>
                    <span
                        class="inline-flex items-center font-display text-lg md:text-xl font-bold text-grey-dark mr-2 sm:mr-3">
                        USD
                    </span>
                </div>
                <div>
                    <ul class="list-reset px-2 sm:px-6">
                        <li class="flex items-start mb-4">
                            <span class="mr-4 mt-1"><svg class="h-5 w-5 block" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <g fill="none" fill-rule="evenodd">
                                        <circle cx="10" cy="10" r="10" fill="#9CE2B6"></circle>
                                        <polyline stroke="#126D34" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" points="6 10 8.667 12.667 14 7.333"></polyline>
                                    </g>
                                </svg></span>
                            <span><strong>The 218-page book</strong> in PDF format</span>
                        </li>

                    </ul>

                    <div class="text-center mt-12">
                        <a class="w-full text-lg sm:text-xl block bg-no-image rounded-lg focus:outline-none bg-blue-grey hover:bg-blue-grey-dark focus:bg-blue-grey-dark text-blue-grey-darker font-semibold px-6 py-3 sm:py-4"
                            href="https://gum.co/LsTNA/launchday" data-gumroad-single-product="true">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        const MONTHLY=0;
        const YEARLY=1;
        const PER_YEAR_LABEL='/yr';
        const PER_MONTH_LABEL='/mo';
        var monthlyButton=document.getElementById("monthly-button");
        var yearlyButton=document.getElementById("yearly-button");
        monthlyButton.addEventListener("click", monthlyPricing);
        yearlyButton.addEventListener("click", yearlyPricing);

        function monthlyPricing(){
            activate(monthlyButton);
            deactivate(yearlyButton);
            changeLabels(MONTHLY);
            changePrices(MONTHLY);
        }

        function yearlyPricing(){
            activate(yearlyButton);
            deactivate(monthlyButton);
            changeLabels(YEARLY);
            changePrices(YEARLY);
        }

        function activate(element){
            addClass(element, "bg-gray-700");
            addClass(element, "text-white");
            removeClass(element, "text-gray-700");
        }

        function deactivate(element){
            removeClass(element, "bg-gray-700");
            removeClass(element, "text-white");
            addClass(element, "text-gray-700");
        }

        function changeLabels(periodActivated){
            var label = PER_MONTH_LABEL;
            if (periodActivated==YEARLY) {
                label = PER_YEAR_LABEL;
            }
            var labelsToChange = document.getElementsByClassName("billing-period");
            for (index = 0; index < labelsToChange.length; ++index) {
                labelsToChange[index].innerHTML=label;
            }
        }

        function changePrices(periodActivated){
            var pricesToChange = document.getElementsByClassName("billing-price");
            for (index = 0; index < pricesToChange.length; ++index) {
                price = parseInt(pricesToChange[index].innerHTML);
                var newPrice=0;
                if (periodActivated==YEARLY) {
                    newPrice=price*10;
                } else {
                    newPrice=price/10;
                }
                pricesToChange[index].innerHTML=newPrice.toString();
            }
            return true;
        }

        function hasClass(element,className) {
            return !!element.className.match(new RegExp('(\\s|^)'+className+'(\\s|$)'));
        }

        function addClass(element,className) { 
            if (!hasClass(element,className)) element.className += " "+className;
        }

        function removeClass(element,className) {
            if (hasClass(element,className)) {
                var reg = new RegExp('(\\s|^)'+className+'(\\s|$)');
                element.className=element.className.replace(reg,' ');
            }
        }
    });
</script>

@endsection