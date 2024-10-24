<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
</head>

<body>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="/contact" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" required></textarea>
        </div>

        <button type="submit">Send</button>
    </form>
</body>

</html>