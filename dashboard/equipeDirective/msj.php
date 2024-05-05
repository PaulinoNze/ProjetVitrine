
<?php
/**Msj sc: sesion iniciada correctamente ***/
if(isset($_REQUEST['sc'])){ ?>
<div class="row sc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      <strong>Félicitations !</strong>
         Vous vous êtes connecté avec succès.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj csc: msj de cerrar sesion correctamente***/
if(isset($_REQUEST['csc'])){ ?>
<div class="row csc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      <strong>Félicitations !</strong>
         La session a été fermée avec succès.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


























<!----msj nuevo servicio agregado correctamente --->
<?php if(isset($_REQUEST['cr'])){ ?>
<div class="row cr" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      <strong>Félicitations !</strong>
         Il a été inscrit avec succès.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!---curso borrado existosamente --->
<?php if(isset($_REQUEST['cbe'])){ ?>
<div class="row cbe" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      <strong>Félicitations !</strong>
         Le service a été supprimé avec succès.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>