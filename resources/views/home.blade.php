@extends('layouts.panel')
@section('title','Home')
@section('content')
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle">
                    </div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle">
                    </div>
                </div>
            </div>
        </div>
        <p>
            Please wait...
        </p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay">
</div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">
            search
        </i>
    </div>
    <input placeholder="START TYPING..." type="text">
    <div class="close-search">
        <i class="material-icons">
            close
        </i>
    </div>
</input>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar-collapse" data-toggle="collapse" href="javascript:void(0);">
            </a>
            <a class="bars" href="javascript:void(0);">
            </a>
            <a class="navbar-brand" href="index.html">
                ADMINBSB - MATERIAL DESIGN
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li>
                    <a class="js-search" data-close="true" href="javascript:void(0);">
                        <i class="material-icons">
                            search
                        </i>
                    </a>
                </li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                        <i class="material-icons">
                            notifications
                        </i>
                        <span class="label-count">
                            7
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            NOTIFICATIONS
                        </li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">
                                                person_add
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                12 new members joined
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">
                                                add_shopping_cart
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                4 sales made
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">
                                                delete_forever
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                <b>
                                                    Nancy Doe
                                                </b>
                                                deleted account
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">
                                                mode_edit
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                <b>
                                                    Nancy
                                                </b>
                                                changed name
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">
                                                comment
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                <b>
                                                    John
                                                </b>
                                                commented your post
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">
                                                cached
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                <b>
                                                    John
                                                </b>
                                                updated status
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">
                                                settings
                                            </i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>
                                                Settings updated
                                            </h4>
                                            <p>
                                                <i class="material-icons">
                                                    access_time
                                                </i>
                                                Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">
                                View All Notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                        <i class="material-icons">
                            flag
                        </i>
                        <span class="label-count">
                            9
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            TASKS
                        </li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>
                                                32%
                                            </small>
                                        </h4>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar bg-pink" role="progressbar" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>
                                                45%
                                            </small>
                                        </h4>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar bg-cyan" role="progressbar" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>
                                                54%
                                            </small>
                                        </h4>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar bg-teal" role="progressbar" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>
                                                65%
                                            </small>
                                        </h4>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar bg-orange" role="progressbar" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>
                                                92%
                                            </small>
                                        </h4>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar bg-purple" role="progressbar" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">
                                View All Tasks
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a class="js-right-sidebar" data-close="true" href="javascript:void(0);">
                        <i class="material-icons">
                            more_vert
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside class="sidebar" id="leftsidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img alt="User" height="55" src="/images/perfil/{{Auth::user()->image}}" width="55"/>
            </div>
            <div class="info-container">
                <div aria-expanded="false" aria-haspopup="true" class="name" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                </div>
                <div class="email">
                    {{ Auth::user()->email }}
                </div>
                <div class="btn-group user-helper-dropdown">
                    <i aria-expanded="true" aria-haspopup="true" class="material-icons" data-toggle="dropdown">
                        keyboard_arrow_down
                    </i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons">
                                    person
                                </i>
                                Mi Perfil
                            </a>
                        </li>
                        <li class="divider" role="seperator">
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons">
                                    group
                                </i>
                                Followers
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons">
                                    shopping_cart
                                </i>
                                Sales
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons">
                                    favorite
                                </i>
                                Likes
                            </a>
                        </li>
                        <li class="divider" role="seperator">
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="material-icons">
                                input
                            </i>
                            Cerrar sesion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!-- #User Info -->
  <!-- Menu -->
  <div class="menu">
    <ul class="list">
        <li class="header">
            Menú de Navegación
        </li>
        <li class="{{ Request::is('home') ? 'active' : '' }}">
            <a href="{{ url('home') }}">
                <i class="material-icons">
                    home
                </i>
                <span>
                    Home
                </span>
            </a>
        </li>

        <li class="{{ Request::is('home/categorias*') ? 'active' : '' }}">
            <a class="menu-toggle">
                <i class="material-icons">
                    bookmark
                </i>
                <span>
                    Categorias
                </span>
            </a>
            <ul class="ml-menu">
              <li class="{{ Request::is('home/categorias') ? 'active' : '' }}">
                  <a href="{{ url('home/categorias') }}">
                      Lista de categorias
                  </a>
              </li>
              <li class="{{ Request::is('home/categorias/create') ? 'active' : '' }}">
                 <a href="{{ url('home/categorias/create') }}">
                     Crear nueva categoria
                 </a>
              </li>

            </ul>
        </li>
        <li class="{{ Request::is('home/productos*') ? 'active' : '' }}">
            <a class="menu-toggle">
                <i class="material-icons">
                    store
                </i>
                <span>
                    Productos
                </span>
            </a>
            <ul class="ml-menu">
              <li class="{{ Request::is('home/productos') ? 'active' : '' }}">
                  <a href="{{ url('home/productos') }}">
                      Lista de productos
                  </a>
              </li>
              <li class="{{ Request::is('home/productos/create') ? 'active' : '' }}">
                 <a href="{{ url('home/Productos/create') }}">
                     Crear nuevo producto
                 </a>
              </li>

            </ul>
        </li>
    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        © 2016 - 2017
        <a href="javascript:void(0);">
            AdminBSB - Material Design
        </a>
        .
    </div>
    <div class="version">
        <b>
            Version:
        </b>
        1.0.5
    </div>
</div>
<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside class="right-sidebar" id="rightsidebar">
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li class="active" role="presentation">
            <a data-toggle="tab" href="#skins">
                SKINS
            </a>
        </li>
        <li role="presentation">
            <a data-toggle="tab" href="#settings">
                SETTINGS
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active in active" id="skins" role="tabpanel">
            <ul class="demo-choose-skin">
                <li class="active" data-theme="red">
                    <div class="red">
                    </div>
                    <span>
                        Red
                    </span>
                </li>
                <li data-theme="pink">
                    <div class="pink">
                    </div>
                    <span>
                        Pink
                    </span>
                </li>
                <li data-theme="purple">
                    <div class="purple">
                    </div>
                    <span>
                        Purple
                    </span>
                </li>
                <li data-theme="deep-purple">
                    <div class="deep-purple">
                    </div>
                    <span>
                        Deep Purple
                    </span>
                </li>
                <li data-theme="indigo">
                    <div class="indigo">
                    </div>
                    <span>
                        Indigo
                    </span>
                </li>
                <li data-theme="blue">
                    <div class="blue">
                    </div>
                    <span>
                        Blue
                    </span>
                </li>
                <li data-theme="light-blue">
                    <div class="light-blue">
                    </div>
                    <span>
                        Light Blue
                    </span>
                </li>
                <li data-theme="cyan">
                    <div class="cyan">
                    </div>
                    <span>
                        Cyan
                    </span>
                </li>
                <li data-theme="teal">
                    <div class="teal">
                    </div>
                    <span>
                        Teal
                    </span>
                </li>
                <li data-theme="green">
                    <div class="green">
                    </div>
                    <span>
                        Green
                    </span>
                </li>
                <li data-theme="light-green">
                    <div class="light-green">
                    </div>
                    <span>
                        Light Green
                    </span>
                </li>
                <li data-theme="lime">
                    <div class="lime">
                    </div>
                    <span>
                        Lime
                    </span>
                </li>
                <li data-theme="yellow">
                    <div class="yellow">
                    </div>
                    <span>
                        Yellow
                    </span>
                </li>
                <li data-theme="amber">
                    <div class="amber">
                    </div>
                    <span>
                        Amber
                    </span>
                </li>
                <li data-theme="orange">
                    <div class="orange">
                    </div>
                    <span>
                        Orange
                    </span>
                </li>
                <li data-theme="deep-orange">
                    <div class="deep-orange">
                    </div>
                    <span>
                        Deep Orange
                    </span>
                </li>
                <li data-theme="brown">
                    <div class="brown">
                    </div>
                    <span>
                        Brown
                    </span>
                </li>
                <li data-theme="grey">
                    <div class="grey">
                    </div>
                    <span>
                        Grey
                    </span>
                </li>
                <li data-theme="blue-grey">
                    <div class="blue-grey">
                    </div>
                    <span>
                        Blue Grey
                    </span>
                </li>
                <li data-theme="black">
                    <div class="black">
                    </div>
                    <span>
                        Black
                    </span>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="settings" role="tabpanel">
            <div class="demo-settings">
                <p>
                    GENERAL SETTINGS
                </p>
                <ul class="setting-list">
                    <li>
                        <span>
                            Report Panel Usage
                        </span>
                        <div class="switch">
                            <label>
                                <input checked="" type="checkbox">
                                <span class="lever">
                                </span>
                            </input>
                        </label>
                    </div>
                </li>
                <li>
                    <span>
                        Email Redirect
                    </span>
                    <div class="switch">
                        <label>
                            <input type="checkbox">
                            <span class="lever">
                            </span>
                        </input>
                    </label>
                </div>
            </li>
        </ul>
        <p>
            SYSTEM SETTINGS
        </p>
        <ul class="setting-list">
            <li>
                <span>
                    Notifications
                </span>
                <div class="switch">
                    <label>
                        <input checked="" type="checkbox">
                        <span class="lever">
                        </span>
                    </input>
                </label>
            </div>
        </li>
        <li>
            <span>
                Auto Updates
            </span>
            <div class="switch">
                <label>
                    <input checked="" type="checkbox">
                    <span class="lever">
                    </span>
                </input>
            </label>
        </div>
    </li>
</ul>
<p>
    ACCOUNT SETTINGS
</p>
<ul class="setting-list">
    <li>
        <span>
            Offline
        </span>
        <div class="switch">
            <label>
                <input type="checkbox">
                <span class="lever">
                </span>
            </input>
        </label>
    </div>
</li>
<li>
    <span>
        Location Permission
    </span>
    <div class="switch">
        <label>
            <input checked="" type="checkbox">
            <span class="lever">
            </span>
        </input>
    </label>
</div>
</li>
</ul>
</div>
</div>
</div>
</aside>
<!-- #END# Right Sidebar -->
</section>
<section class="content">
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    <!-- aqui comienza el contenido-->
    @section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DASHBOARD
            </h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            playlist_add_check
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW TASKS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="500">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            help
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW TICKETS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="257">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            forum
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW COMMENTS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="243">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">
                            person_add
                        </i>
                    </div>
                    <div class="content">
                        <div class="text">
                            NEW VISITORS
                        </div>
                        <div class="number count-to" data-fresh-interval="20" data-from="0" data-speed="1000" data-to="1225">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>
                                    CPU USAGE (%)
                                </h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">
                                        REAL TIME
                                    </span>
                                    <label>
                                        OFF
                                        <input checked="" id="realtime" type="checkbox">
                                        <span class="lever switch-col-cyan">
                                        </span>
                                        ON
                                    </input>
                                </label>
                            </div>
                        </div>
                    </div>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="dashboard-flot-chart" id="real_time_chart">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# CPU Usage -->
    <div class="row clearfix">
        <!-- Visitors -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="body bg-pink">
                    <div class="sparkline" data-fill-color="rgba(0, 188, 212, 0)" data-height="92px" data-highlight-line-color="#fff" data-highlight-spot-color="rgb(233, 30, 99)" data-line-color="rgba(255,255,255,0.7)" data-line-width="2" data-max-spot-color="rgb(255,255,255)" data-min-spot-color="rgb(255,255,255)" data-offset="90" data-spot-color="rgb(255,255,255)" data-spot-radius="4" data-type="line" data-width="100%">
                        12,10,9,6,5,6,10,5,7,5,12,13,7,12,11
                    </div>
                    <ul class="dashboard-stat-list">
                        <li>
                            TODAY
                            <span class="pull-right">
                                <b>
                                    1 200
                                </b>
                                <small>
                                    USERS
                                </small>
                            </span>
                        </li>
                        <li>
                            YESTERDAY
                            <span class="pull-right">
                                <b>
                                    3 872
                                </b>
                                <small>
                                    USERS
                                </small>
                            </span>
                        </li>
                        <li>
                            LAST WEEK
                            <span class="pull-right">
                                <b>
                                    26 582
                                </b>
                                <small>
                                    USERS
                                </small>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #END# Visitors -->
        <!-- Latest Social Trends -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="body bg-cyan">
                    <div class="m-b--35 font-bold">
                        LATEST SOCIAL TRENDS
                    </div>
                    <ul class="dashboard-stat-list">
                        <li>
                            #socialtrends
                            <span class="pull-right">
                                <i class="material-icons">
                                    trending_up
                                </i>
                            </span>
                        </li>
                        <li>
                            #materialdesign
                            <span class="pull-right">
                                <i class="material-icons">
                                    trending_up
                                </i>
                            </span>
                        </li>
                        <li>
                            #adminbsb
                        </li>
                        <li>
                            #freeadmintemplate
                        </li>
                        <li>
                            #bootstraptemplate
                        </li>
                        <li>
                            #freehtmltemplate
                            <span class="pull-right">
                                <i class="material-icons">
                                    trending_up
                                </i>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #END# Latest Social Trends -->
        <!-- Answered Tickets -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="body bg-teal">
                    <div class="font-bold m-b--35">
                        ANSWERED TICKETS
                    </div>
                    <ul class="dashboard-stat-list">
                        <li>
                            TODAY
                            <span class="pull-right">
                                <b>
                                    12
                                </b>
                                <small>
                                    TICKETS
                                </small>
                            </span>
                        </li>
                        <li>
                            YESTERDAY
                            <span class="pull-right">
                                <b>
                                    15
                                </b>
                                <small>
                                    TICKETS
                                </small>
                            </span>
                        </li>
                        <li>
                            LAST WEEK
                            <span class="pull-right">
                                <b>
                                    90
                                </b>
                                <small>
                                    TICKETS
                                </small>
                            </span>
                        </li>
                        <li>
                            LAST MONTH
                            <span class="pull-right">
                                <b>
                                    342
                                </b>
                                <small>
                                    TICKETS
                                </small>
                            </span>
                        </li>
                        <li>
                            LAST YEAR
                            <span class="pull-right">
                                <b>
                                    4 225
                                </b>
                                <small>
                                    TICKETS
                                </small>
                            </span>
                        </li>
                        <li>
                            ALL
                            <span class="pull-right">
                                <b>
                                    8 752
                                </b>
                                <small>
                                    TICKETS
                                </small>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #END# Answered Tickets -->
    </div>
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2>
                        TASK INFOS
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Task
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Manager
                                    </th>
                                    <th>
                                        Progress
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Task A
                                    </td>
                                    <td>
                                        <span class="label bg-green">
                                            Doing
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="62" class="progress-bar bg-green" role="progressbar" style="width: 62%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Task B
                                    </td>
                                    <td>
                                        <span class="label bg-blue">
                                            To Do
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar bg-blue" role="progressbar" style="width: 40%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        Task C
                                    </td>
                                    <td>
                                        <span class="label bg-light-blue">
                                            On Hold
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress-bar bg-light-blue" role="progressbar" style="width: 72%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        Task D
                                    </td>
                                    <td>
                                        <span class="label bg-orange">
                                            Wait Approvel
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" class="progress-bar bg-orange" role="progressbar" style="width: 95%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        Task E
                                    </td>
                                    <td>
                                        <span class="label bg-red">
                                            Suspended
                                        </span>
                                    </td>
                                    <td>
                                        John Doe
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="87" class="progress-bar bg-red" role="progressbar" style="width: 87%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <h2>
                        BROWSER USAGE
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="dashboard-donut-chart" id="donut_chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Browser Usage -->
    </div>
</div>
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
<!--Fin del contenido que sera remplazado por las vistas hijas-->
@show
</section>
@stop
