<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/intlTelInput.css">
    {{-- <link rel="stylesheet" href="/css/demo.css"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/intlTelInput.js"></script>
    <script src="/js/utils.js"></script>
</head>
<body>
    <form action="/input" method="POST">
        @csrf
        <input type="tel" id="phone" name="phone">
        <button type="submit">送信</button>
    </form>
    
    <script src="/js/script.js"></script>
</body>
</html>
