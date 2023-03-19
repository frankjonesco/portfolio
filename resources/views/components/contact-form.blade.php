<section id="contact">
    <div class="container py-28">
        <h2>Contact me</h2>

        <form id="contactForm" action="/go" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-10">
                <input type="text" name="name" placeholder="Name *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                <input type="text" name="phone" placeholder="Phone *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                <input type="text" name="email" placeholder="Email *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                <input type="text" name="subject" placeholder="Subject *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                <textarea name="message" placeholder="Message *" rows="4" class="col-span-2 border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400" style="resize: none;"></textarea>
            </div>
                
            <button type="submit" class="btn mt-10 border">Send message</button>
        </form>
    </div>
</section>