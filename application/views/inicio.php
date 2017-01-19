
<html>

    <script>var BASE_URL ="<?php echo base_url(); ?>"</script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>



    <br>
    <div class="container-fluid">
        <ul class="nav nav-tabs" id="tabs">
            <li class="active trigger"><a href="#listado" data-toggle="tab">Listado</a></li>
            <li class="trigger"><a href="#gestion" data-toggle="tab">Gestion</a></li>
        </ul>
        <div class="tab-content row-container">
            <div class="tab-pane active" id="listado">
                <?php
                $this->load->view("consulta");
                ?>
            </div>
            <div class="tab-pane" id="gestion">
                <?php
                $this->load->view("informacion");
                ?>

            </div>                
        </div>
    </div>
    <script src="<?php echo base_url(); ?>public/js/crud.js"></script>
</html>