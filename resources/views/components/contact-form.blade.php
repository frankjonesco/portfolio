<section id="contact">
    <div class="container py-28">
        <h2>Contact me</h2>

        <form id="contactForm" action="/contact/send#contact" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-10">
                <div>
                    <input type="text" name="name" placeholder="Name *" class="w-full border-0 border-b border-1 border-gray-200 px-2 py-2 focus:border-0">
                    @error('name')
                        <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter your name</div>
                    @enderror
                </div>

                <div>
                    <input type="text" name="phone" placeholder="Phone *" class="w-full border-0 border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                    @error('phone')
                        <div class="text-xs text-red-400 mt-3 ml-1.5">{{$error}}</div>
                    @enderror
                </div>

                <div>
                    <input type="text" name="email" placeholder="Email *" class="w-full border-0 border-b border-1 border-gray-200 px-2 py-2  focus:border-0">
                    @error('email')
                        <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter your email address</div>
                    @enderror
                </div>

                <div>
                    <input type="text" name="subject" placeholder="Subject *" class="w-full border-0 border-b border-1 border-gray-200 px-2 py-2  focus:border-0">
                    @error('subject')
                        <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter a subject</div>
                    @enderror
                </div>
                
                <div class="col-span-2">
                    <textarea name="message" placeholder="Message *" rows="4" class="w-full border-0 border-b border-1 border-gray-200 px-2 py-2  focus:border-0" style="resize: none;"></textarea>
                    @error('message')    
                        <div class="text-xs text-red-400 mt-3 ml-1.5">Please enter your message</div>
                    @enderror
                </div>
            </div>
                
            <button type="submit" class="btn mt-10 border">Send message</button>
        </form>
    </div>
</section>