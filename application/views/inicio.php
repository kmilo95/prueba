
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->



<div class="container-fluid">
    <ul class="nav nav-tabs" id="tabs">
        <li class="active trigger"><a href="#listado" data-toggle="tab">Listado</a></li>
        <li class="trigger"><a href="#gestion" data-toggle="tab">Gestion</a></li>
    </ul>
    <div class="tab-content row-container">
        <div class="tab-pane active triger" id="listado">
            <div class="table-responsive table-responsive-lx" align="center">
                <?php
                    $this->load->view("informacion");
                ?>
            </div>
        </div>
        <div class="tab-pane table-responsive-lx" id="gestion">
            <div class="container">
                <?php
                    $this->load->view("consulta");
                ?>
            </div>
        </div>                
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/formulario.js'; ?>"></script>