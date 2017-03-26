<?php 
// for choosing active class for the current page.
// 
  switch ($data['select']) {
    case '1':
      $select1 = 'active';
      break;
    case '2':
      $select2 = 'active';
      break;
    case '3':
      $select3 = 'active';
      break;
    case '4':
      $select4 = 'active';
      break;

    default:
      $select1 = $select2 = $select3 = $select4 = '';
      break;
  }
?>

<!-- Start Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/www/simple-MVC/public/">Maestro MVC</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php echo $select1; ?>"><a href="http://localhost/www/simple-MVC/public/home/create"><b>C</b>reate page</a></li>
      <li class="<?php echo $select2; ?>"><a href="http://localhost/www/simple-MVC/public/home/read"><b>R</b>ead page</a></li>
      <li class="<?php echo $select3; ?>"><a href="http://localhost/www/simple-MVC/public/home/update"><b>U</b>pdate page</a></li>
      <li class="<?php echo $select4; ?>"><a href="http://localhost/www/simple-MVC/public/home/delete"><b>D</b>elete page</a></li>
    </ul>
  </div>
</nav>
<!-- End Navbar -->