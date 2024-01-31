<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('')}}">
    @yield('desktopcss')
    @yield('mobile&tabletcss')
    @yield('pagetitle')
</head>

<body>
    <header>
        <div class="navbar">
            <h1>Admin Dashboard</h1>
        </div>

        <div>
            <img src="path_to_your_image.jpg" alt="Description of the image">
        </div>
    </header>
    <main>
        <section class="c-left-sidebar">
            <ul>
                <li>Product Category</li>
                <li>Products</li>
                <li>Reports</li>
            </ul>
        </section>
        @yield('content')
    </main>
</body>

</html>