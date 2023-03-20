<x-template>
    <x-navbar class="bg-gradient-to-tr from-slate-700 to-black" />



    <section id="how-it-works">
        <div class="container !w-3/4 py-40 flex flex-col items-center">
            <h2>How It Works</h2>

            <p class="w-1/2 text-center">We have developed a simple four step process to help you set up your quality website and get it online as quickly as possible.</p>



            <div class="w-full border-l-4 border-b-4 border-gray-400 rounded-bl-3xl mt-20">
                <div class="bg-black rounded-full w-16 aspect-square text-white text-3xl font-bold flex justify-center items-center relative -left-9 -top-0">
                    <span class="relative top-[2px] -left-[1px]">1</span>
                </div>
                <div class="p-20 grid grid-cols-2 gap-20">
                    
                    <div>
                        <h3 class="text-3xl mb-3">Pick a Design</h3>
                        <p>Go to <a href="https://webflow.com/templates" target="_blank" class="bg-yellow-300 px-1.5 py-1 hover:bg-black hover:text-white transition-all ease duration-300">https://webflow.com/templates</a> and pick a design you like.</p>
                        <h3 class="text-lg">Why do I use design templates instead of designing from scratch?</h3>
                        <p><b>You save money</b> and it speeds up the project completion time. <b>It is much more expensive to design from scratch</b> as it adds a lot of time to the project.</p>
                    </div>
                    <img src="{{asset('images/templates/templates-grid.png')}}" alt="">
                </div>
            </div>



            <div class="w-full border-r-4 border-b-4 border-gray-400 rounded-br-3xl relative">
                <div class="bg-black rounded-full w-16 aspect-square text-white text-3xl font-bold flex justify-center items-center absolute -right-9 -top-9">
                    <span class="relative top-[2px] -left-[1px]">2</span>
                </div>
                <div class="p-20 grid grid-cols-2 gap-20">
                    <img src="{{asset('images/dropbox.jpg')}}" alt="">
                    <div>
                        <h3 class="text-3xl mb-3">Provide Me With Website Content</h3>
                        <p>I will provide a Dropbox link where you may upload all the relevant content to be used on your site.</p>
                        <ul class="list-disc ml-5 mt-5">
                            <li>Photos</li>
                            <li>Videos</li>
                            <li>Services You Offer</li>
                            <li>Company Bio</li>
                            <li>Team Bio(s)</li>
                            <li>Contact Infomation</li>
                            <li>Logos</li>
                            <li>Any Content You Want On The Site</li>
                        </ul>
                    </div>
                    
                </div>

                
            </div>




            <div class="w-full border-l-4 border-b-4 border-gray-400 rounded-bl-3xl relative">
                <div class="bg-black rounded-full w-16 aspect-square text-white text-3xl font-bold flex justify-center items-center absolute -left-9 -top-9">
                    <span class="relative top-[2px] -left-[1px]">3</span>
                </div>
                <div class="p-20 grid grid-cols-2 gap-20">
                    
                    <div>
                        <h3 class="text-3xl mb-3">Finish Build & Review</h3>
                        <p>Once I have completed building your site, I will send it over to you for review.</p>
                    </div>
                    <img src="{{asset('images/leonardo.gif')}}" alt="" class="mx-auto">
                    
                </div>
            </div>



            <div class="w-full border-r-4 border-b-4 border-gray-400 rounded-br-3xl relative">
                <div class="bg-black rounded-full w-16 aspect-square text-white text-3xl font-bold flex justify-center items-center absolute -right-9 -top-9">
                    <span class="relative top-[2px] -left-[1px]">4</span>
                </div>
                <div class="p-20 grid grid-cols-2 gap-20">
                    <img src="{{asset('images/rocket-launch.gif')}}" alt="">
                    <div>
                        <h3 class="text-3xl mb-3">Enjoy Your Awesome Website!</h3>
                        <p class="mb-3">Once you review and we make any last minute changes, I'll ask you to confirm your ready for launch 🎉. </p>
                        <p>Once I have your confirmation, we'll launch your site live!</p>
                        <a href="/#contact" class="btn btn-positive mt-5 inline-block">Contact me now</a>
                    </div>
                    
                </div>

                <div class="rounded-full w-16 aspect-square text-white text-3xl font-bold flex justify-center items-center absolute -left-9 -bottom-8">
                    <span>
                        <img src="{{asset('images/smile.webp')}}" alt="">
                    </span>
                </div>
            </div>

        </div>
    </section>


</x-template>