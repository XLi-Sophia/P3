<!doctype html>
<html lang='en'>
<head>
    <title>Project 3</title>
    <meta charset='utf-8'>
    {{-- CSS global to every page can be loaded here --}}
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
          crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel='stylesheet' href='/css/form.css'>
</head>
<body>
<div class='container'>
    <div class='content'>
        <h1>Income Percentage Calculator</h1>
        <h4><b>*</b> Fields are required.</h4>
        <section>
            @yield('content')
        </section>

        <footer>
            &copy; {{date('Y')}} <a href='/help/'>Help</a>
        </footer>
    </div>
</div>
</body>
</html>