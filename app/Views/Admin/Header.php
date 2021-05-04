<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Tipes: Tiket Pesawat</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>

      body {
        font-family: "Varela Round", sans-serif;
      }
      .form-control {
        box-shadow: none;
        font-weight: normal;
        font-size: 13px;
      }
      .navbar {
        background: #fff;
        padding-left: 16px;
        padding-right: 16px;
        border-bottom: 1px solid #dfe3e8;
        border-radius: 0;
      }
      .nav-link img {
        border-radius: 50%;
        width: 36px;
        height: 36px;
        margin: -8px 0;
        float: left;
        margin-right: 10px;
      }
      .navbar .navbar-brand {
        padding-left: 0;
        font-size: 20px;
        padding-right: 50px;
      }
      .navbar .navbar-brand b {
        color: #2a0dca;
      }
      .navbar .form-inline {
        display: inline-block;
      }
      .navbar a {
        color: #888;
        font-size: 15px;
      }
      .navbar .sign-up-btn {
        min-width: 110px;
        max-height: 36px;
      }
      .navbar .dropdown-menu {
        color: #999;
        font-weight: normal;
        border-radius: 1px;
        border-color: #e5e5e5;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      }
      .navbar a,
      .navbar a:active {
        color: #888;
        padding: 8px 20px;
        background: transparent;
        line-height: normal;
      }
      .navbar .navbar-form {
        border: none;
      }
      .navbar .action-form {
        width: 280px;
        padding: 20px;
        left: auto;
        right: 0;
        font-size: 14px;
      }
      .navbar .action-form a {
        color: #33cabb;
        padding: 0 !important;
        font-size: 14px;
      }
      .navbar .action-form .hint-text {
        text-align: center;
        margin-bottom: 15px;
        font-size: 13px;
      }
      .navbar .btn-primary,
      .navbar .btn-primary:active {
        color: #fff;
        background: #2a0dca !important;
        border: none;
      }
      .navbar .btn-primary:hover,
      .navbar .btn-primary:focus {
        color: #fff;
        background: #2a0dca !important;
      }
      .navbar .action-buttons .dropdown-toggle::after {
        display: none;
      }
      .form-check-label input {
        position: relative;
        top: 1px;
      }
      @media (min-width: 1200px) {
        .form-inline .input-group {
          width: 300px;
          margin-left: 30px;
        }
      }
      @media (max-width: 768px) {
        .navbar .dropdown-menu.action-form {
          width: 100%;
          padding: 10px 15px;
          background: transparent;
          border: none;
        }
        .navbar .form-inline {
          display: block;
        }
        .navbar .input-group {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="<?= base_url('Admin/Home'); ?>" class="navbar-brand"><b>Tipes:</b> ADMIN</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
          <a href="<?= base_url('Admin/Home'); ?>" class="nav-item nav-link">Home</a>
          <a href="<?= base_url('Admin/Registrasi'); ?>" class="nav-item nav-link">Tambah Admin</a>
          <a href="#" class="nav-item nav-link">Tambah Maskapai</a>
        </div>
      </div>
    </nav>