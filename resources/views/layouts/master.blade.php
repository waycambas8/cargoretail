<!DOCTYPE html>
<html lang="en">
<head>
 @include("layouts.header_meta")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include("layouts.left")
      @yield("content")
    @include("layouts.footer")
  </div>
   @include("layouts.footer_meta")
</body>
</html>

@yield("script")
