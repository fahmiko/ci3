<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style-navbar.css'?>">
</head>
<body>
<div id="wrapper" class="active">
  <div id="sidebar-wrapper">
    <ul id="sidebar_menu" class="sidebar-nav">
        <li class="sidebar-brand"><a id="menu-toggle" href="#">Fahmiko | CI<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
    </ul>
    <ul class="sidebar-nav" id="sidebar">     
      <li><a href="<?php echo site_url().'blogger'?>">Home<span class="sub_icon glyphicon glyphicon-home"></span></a></li>
      <li><a href="<?php echo site_url().'kategori'?>">Kategori<span class="sub_icon glyphicon glyphicon-list"></span></a></li>
      <li><a href="<?php echo site_url().'blogger/create'?>">Tambah Artikel<span class="sub_icon glyphicon glyphicon-list-alt"></span></a></li>
      <li><a href="<?php echo site_url().'blogger/view_datatable'?>">Datatable<span class="sub_icon glyphicon glyphicon glyphicon-book"></span></a></li>
      <li><a href="<?php echo site_url().'personal'?>">Kontak<span class="sub_icon glyphicon glyphicon glyphicon-user"></span></a></li>
      
    </ul>
  </div>    
<div id="page-content-wrapper">
<!-- Keep all page content within the page-content inset div! -->
<div class="page-content inset">
<div class="row">
<div class="col-md-12">