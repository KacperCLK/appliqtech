<form action="/submit" method="POST" class="form">
    @csrf

    <input type="text" id="name" name="name" placeholder="Your Name" required>

    <input type="email" id="email" name="email" placeholder="What's your email?" required>

    <textarea id="message" name="message" placeholder="Your message..." required></textarea>

    <button type="submit" class="button--main">Send message</button>
</form>