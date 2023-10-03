<?php
$request = service('request');
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item<?php if ($request->uri->getSegment(1) == 'dashboard') echo ' active'; ?>">
        <a class="nav-link" href="<?= base_url('/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item<?php if ($request->uri->getSegment(1) == 'components') echo ' active'; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse<?php if ($request->uri->getSegment(1) == 'components') echo ' show'; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item<?php if ($request->uri->getSegment(1) == 'components' && $request->uri->getSegment(2) == 'buttons') echo ' active'; ?>" href="<?= base_url('/components/buttons') ?>" href="buttons.html">Buttons</a>
                <a class="collapse-item<?php if ($request->uri->getSegment(1) == 'components' && $request->uri->getSegment(2) == 'cards') echo ' active'; ?>" href="<?= base_url('/components/cards') ?>" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item<?php if ($request->uri->getSegment(1) == 'utilities') echo ' active'; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse<?php if ($request->uri->getSegment(1) == 'utilities') echo ' show'; ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item<?php if ($request->uri->getSegment(2) == 'colors') echo ' active'; ?>" href="<?= base_url('/utilities/colors') ?>">Colors</a>
                <a class="collapse-item<?php if ($request->uri->getSegment(2) == 'borders') echo ' active'; ?>" href="<?= base_url('/utilities/borders') ?>">Borders</a>
                <a class="collapse-item<?php if ($request->uri->getSegment(2) == 'animations') echo ' active'; ?>" href="<?= base_url('/utilities/animations') ?>">Animations</a>
                <a class="collapse-item<?php if ($request->uri->getSegment(2) == 'others') echo ' active'; ?>" href="<?= base_url('/utilities/others') ?>">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item<?php if ($request->uri->getSegment(1) == 'pages') echo ' active'; ?>">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse<?php if ($request->uri->getSegment(1) == 'pages') echo ' show'; ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="<?= base_url('/pages/login') ?>">Login</a>
                <a class="collapse-item" href="<?= base_url('/pages/register') ?>">Register</a>
                <a class="collapse-item" href="<?= base_url('/pages/forgot-password') ?>">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item<?php if ($request->uri->getSegment(1) == 'pages' && $request->uri->getSegment(2) == '404') echo ' active'; ?>" href="<?= base_url('/pages/404') ?>">404 Page</a>
                <a class="collapse-item<?php if ($request->uri->getSegment(1) == 'pages' && $request->uri->getSegment(2) == 'blank') echo ' active'; ?>" href="<?= base_url('/pages/blank') ?>">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item<?php if ($request->uri->getSegment(1) == 'charts') echo ' active'; ?>">
        <a class="nav-link" href="<?= base_url('/charts') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item<?php if ($request->uri->getSegment(1) == 'tables') echo ' active'; ?>">
        <a class="nav-link" href="<?= base_url('/tables') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>