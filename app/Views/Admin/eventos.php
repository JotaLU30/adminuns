

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="<?= base_url('assets/css/dashboard.css')?>" rel="stylesheet">
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body>
  
<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-20 shadow">
<div>
<!-- <center> -->
&nbsp;&nbsp;&nbsp;<img  src="<?= base_url('assets/img/logo_rojo.png')?>" width="15%" height="10%">
<!-- </center> -->
</div>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<br> <input class="form-control form-control-dark w-100" width="10%" type="text" placeholder="Buscar" aria-label="Search">
<ul class="navbar-nav px-3">
<li class="nav-item text-nowrap">
  <a class="nav-link" href="#">Cerrar Sesion</a>
</li>
</ul>

</header>

<div class="container-fluid">
<div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-danger sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= base_url('admin/principal')?>" style="color:white">
          <br>
          <img  src="<?= base_url('assets/img/ico/inicio.png')?>" width="28" height="28">&nbsp;
          Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= base_url('admin/eventos')?>" style="color:white">
          <img  src="<?= base_url('assets/img/ico/calendario.png')?>" width="28" height="28">&nbsp;
          Eventos
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/noticias')?>" style="color:white">
          <img  src="<?= base_url('assets/img/ico/sumario.png')?>" width="28" height="28">&nbsp;
          Noticias
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/alertas')?>" style="color:white">
          <img  src="<?= base_url('assets/img/ico/alertas.png')?>" width="28" height="28">&nbsp;
          alertas
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/usuarios')?>#" style="color:white">
        <img  src="<?= base_url('assets/img/ico/usuarios.png')?>" width="28" height="28">&nbsp;
          Usuarios
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/reportes')?>" style="color:white">
        <img  src="<?= base_url('assets/img/ico/reportes.png')?>" width="28" height="28">&nbsp;
          Reportes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/perfiles')?>#" style="color:white">
        <img  src="<?= base_url('assets/img/ico/perfiles.png')?>" width="28" height="28">&nbsp;
          Perfiles
        </a>
      </li>
    </ul>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span style="color:white">Reportes de Eventos</span>
      <a class="link-secondary" href="#" aria-label="Add a new report" style="color:white">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white">
        <img  src="<?= base_url('assets/img/ico/reportes.png')?>" width="28" height="28">&nbsp;
          Este Mes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white">
        <img  src="<?= base_url('assets/img/ico/reportes.png')?>" width="28" height="28">&nbsp;
          Esta quincena
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white">
        <img  src="<?= base_url('assets/img/ico/reportes.png')?>" width="28" height="28">&nbsp;
          Dia de Hoy
        </a>
      </li>
    </ul>
  </div>
</nav>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Bienvenido  Marcelo Escalante Valdivia</h3>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        Semanal
      </button>
    </div>
  </div>
<center>
<h2 class="h2">Modulo de Eventos</h2>
</center>
  <br>
  <small><h4 class="h2">Ultimos Eventos</h4></small> &nbsp;&nbsp;&nbsp;<button type="button" class="btn-uns" data-toggle="modal" data-target="#nuevaalerta">Agregar Nuevo</button>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Titulo del Evento</th>
          <th>Descripcion</th>
          <th>Creado por </th>
          <th>Fecha de Creacion</th>
        </tr>
      </thead>
      <tbody>
       
      </tbody>
    </table>
  </div>
</main>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  

</body>