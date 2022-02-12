<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>work-1</title>
</head>
<body style="background-color: aliceblue;">
    <header class="shadow-sm bg-white">
        <div class="container">
            <div class="d-flex justify-content-between py-3 align-items-center">
                <h2>laravel</h2>
                <div class="links">
                    @yield('mainManu')
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container p-0 shadow-sm my-5 bg-white">
            <div class="title bg-light">
                <h1 class="p-2 h4 shadow-sm">
                    @yield('title')
                </h1>
            </div>
            <div class="mainContent p-3">
                @yield('mainContent')
            </div>
        </div>
    </main>
</body>
</html>