<div class="bg-gradient-to-tr from-orange-500 to-red-600 red-600 pt-28 pb-12 flex items-center justify-center">   
</div>
<section id="contact" class="bg-gradient-to-tr bg-white text-black border-b drop-shadow-xl">
    
    <div class="container pt-16">
        <h2 class="text-center title-2 text-black">Contact me</h2>
        


        @unless(session()->has('success'))
            <p class="pb-12 text-2xl text-center leading-10 text-gray-500 font-light">Get started right away!<br>I'm happy to answer any questions you might have.</p>
            <form id="contactForm" action="/contact/send#contact" method="POST" class="text-center">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <div>
                        <input type="text" name="name" placeholder="Name *" class="w-full border-0 border-b border-1 border-gray-300 bg-transparent px-3 py-3 text-xl focus:ring-0 focus:border-gray-500 transition-colors ease-in duration-300">
                        @error('name')
                            <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter your name</div>
                        @enderror
                    </div>

                    <div>
                        <input type="text" name="phone" placeholder="Phone *" class="w-full border-0 border-b border-1 border-gray-300 bg-transparent px-3 py-3 text-xl focus:ring-0 focus:border-gray-500 transition-colors ease-in duration-300">
                        @error('phone')
                            <div class="text-xs text-red-400 mt-3 ml-1.5">{{$error}}</div>
                        @enderror
                    </div>

                    <div>
                        <input type="text" name="email" placeholder="Email *" class="w-full border-0 border-b border-1 border-gray-300 bg-transparent px-3 py-3 text-xl focus:ring-0 focus:border-gray-500 transition-colors ease-in duration-300">
                        @error('email')
                            <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter your email address</div>
                        @enderror
                    </div>

                    <div>
                        <input type="text" name="subject" placeholder="Subject *" class="w-full border-0 border-b border-1 border-gray-300 bg-transparent px-3 py-3 text-xl focus:ring-0 focus:border-gray-500 transition-colors ease-in duration-300">
                        @error('subject')
                            <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter a subject</div>
                        @enderror
                    </div>
                    
                    <div class="lg:col-span-2">
                        <textarea name="body" placeholder="Message *" rows="4" class="w-full border-0 border-b border-1 border-gray-300 bg-transparent px-3 py-3 text-xl focus:ring-0 focus:border-gray-500 transition-colors ease-in duration-300" style="resize: none;"></textarea>
                        @error('body')    
                            <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter your message</div>
                        @enderror
                    </div>
                </div>
                    
                <button type="submit" class="btn mt-10 mx-auto bg-black text-white border-0 rounded-xs">Send message</button>
            </form>
        @else
            <p class="pb-12 text-2xl text-center leading-10 text-gray-500 font-light">
                {{session('success')}}
            </p>
        @endunless

        <p class="py-12 text-2xl text-center leading-10 text-gray-500 font-light">Or email me directly <a href="mailto:hello@frankjones.co" class="text-black font-bold bg-yellow-300 px-1.5 py-1 hover:bg-black hover:text-white transition-all ease duration-300">hello@frankjones.co</a></p>
        
    </div>
</section>