<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ECOLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
   
<link href="<?php echo base_url('assets/main.css');?>" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                     </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?php  echo base_url('assets/images/avatars/1.jpg');?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Ecole-admin
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Aujourdhui
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                   
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading"><b><h4><?php echo $nombreInscrits;?> eleves inscrits</h4></b>
                                                </div>
                                                <div class="widget-subheading">le Nombre de paiement est de <?php echo $nombrePaiements;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        
                    </div>
                     <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="<?php echo site_url();?>" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Tableau de bord
                                    </a>
                                </li>
                                
                                    
                                </li>
                                
                                <li class="app-sidebar__heading">Actions</li>
                                
                                <li>
                                    <a href="<?php echo site_url('welcome/inscription');?>">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Inscrire eleve
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('welcome/paiement');?>">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Paiement
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('welcome/enOrdre');?>">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Eleve en ordre
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('welcome/tous');?>">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>liste eleve
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('welcome/parClasse');?>">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Par classe
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div> 
