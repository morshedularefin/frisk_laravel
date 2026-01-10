<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    @include('admin.layouts.styles')

    @include('admin.layouts.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        @yield('main_content')
    </div>
</div>

@include('admin.layouts.scripts_bottom')
@include('admin.layouts.custom_error')

</body>
</html>