<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

@vite(['resources/assets/vendor/fonts/remixicon/remixicon.scss'])
<!-- Core CSS -->
@vite([
  'resources/assets/vendor/scss/core.scss',
  'resources/assets/vendor/scss/theme-default.scss',
  'resources/assets/css/demo.css'
])

<!-- Vendor Styles -->
@vite(['resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.scss'])
@yield('vendor-style')

<!-- Page Styles -->
@yield('page-style')
