<?php include 'inc/header.php'; ?>
<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Izzy</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="tab" href="#home">Dashboard</a></li>
                <li><a data-toggle="tab" href="#new">Production</a></li>
                <li><a data-toggle="tab" href="#view">Flock</a></li>
                <li><a data-toggle="tab" href="#vac">Vaccinations</a></li>
                <li><a data-toggle="tab" href="#mot">Motality</a></li>
                <li><a data-toggle="tab" href="#type">Types</a></li>
                <li><a data-toggle="tab" href="#med">Medicine</a></li>
                <li><a data-toggle="tab" href="#set">Settings</a></li>
            </ul>
            <br>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav hidden-xs" id="mainNavbar">
            <br>
            <a href="index.php"><img src="assets/img/LOGO.png" alt="logo" class="img-thumbnail"> </a>
            <hr style="border: 1px solid #145DA0;">
            <ul class="nav nav-pills nav-stacked ">
                <li class="active"><a data-toggle="tab" href="#home"><i class="glyphicon glyphicon-tent"></i>
                        Dashboard</a></li>
                <li><a data-toggle="tab" href="#new"><i class="glyphicon glyphicon-gift"></i> Production</a></li>
                <li><a data-toggle="tab" href="#view"><i class="glyphicon glyphicon-piggy-bank"></i> Flock</a></li>
                <li><a data-toggle="tab" href="#vac"><i class="glyphicon glyphicon-new-window"></i> Update</a></li>
                <li><a data-toggle="tab" href="#inc"><i class="glyphicon glyphicon-briefcase"></i> Income</a></li>
                <li><a data-toggle="tab" href="#ex"><i class="glyphicon glyphicon-eye-open"></i> Expences</a></li>
                <li class=" dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-stats"></i>
                        Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="tab" href="#type"><i class="glyphicon glyphicon-usd"></i> Financial</a></li>
                        <li><a data-toggle="tab" href="#med"><i class="glyphicon glyphicon-leaf"></i> Production</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-cog"></i>
                        Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="tab" href="#type">Types</a></li>
                        <li><a data-toggle="tab" href="#med">Medicine</a></li>
                        <li><a data-toggle="tab" href="#set">Details</a></li>
                    </ul>
                </li>
            </ul>
        </div>