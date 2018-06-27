<?php
use App\Models\User;
?>

<div class="logo">
    <p><img class="center-block" alt="Site logo" src="images/logo.png" /></p>
    <p class="text-center color-white" style="font-weight: bold;font-size: 20px;"> Hi <?php $id=$_SESSION['user']; $user = User::where('id', $id)->first(); echo $user->username; ?>  </p>
    
</div>

<nav class="navbar navbar-defaul">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color: white;" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #2c3e50;"></span>
        <span class="icon-bar" style="background-color: #2c3e50;"></span>
        <span class="icon-bar" style="background-color: #2c3e50;"></span>
      </button>
    </div>
    <style type="text/css"> li{ border-bottom: 2px #2c3e50 ; }
    </style>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-stacked">
        <li role="presentation" class="active second-background">
            <a href="dashboard"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Dashboard</a>
        </li>

        <li role="presentation" class="second-background">
            <a href="user"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View User</a>
        </li>

        <li role="presentation" class="active second-background">
            <a href="menu"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Menu Category</a>
        </li>

        <li role="presentation" class="active second-background">
            <a href="menuitem"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Menu Item</a>
        </li>

        <li role="presentation" class="active second-background">
            <a href="order"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order</a>
        </li>

        <li role="presentation" class="active second-background">
            <a href="complaints"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> Complaints</a>
        </li>

        <li role="presentation" class="active second-background">
            <a href="aboutus"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About Us</a>
        </li>

        <li role="presentation" class="second-background">
            <a href="logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
        </li>
      </ul>
    </div>
</nav>



<!-- <div class="nav">
  <ul class="nav nav-stacked">

    <li role="presentation" class="active second-background">
        <a href="dashboard"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Dashboard</a>
    </li>

    <li role="presentation" class="second-background">
        <a href="user"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View User</a>
    </li>

    <li role="presentation" class="active second-background">
        <a href="menu"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Menu Category</a>
    </li>

    <li role="presentation" class="active second-background">
        <a href="menuitem"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Menu Item</a>
    </li>

    <li role="presentation" class="active second-background">
        <a href="order"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Order</a>
    </li>

    <li role="presentation" class="active second-background">
        <a href="aboutus"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> About Us</a>
    </li>

    <li role="presentation" class="second-background">
        <a href="logout"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Logout</a>
    </li>
    

    </ul>

</div> -->
<!-- <li role="presentation" class="second-background">
        <a href="reset"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Reset</a>
    </li> -->