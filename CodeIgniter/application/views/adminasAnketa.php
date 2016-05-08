<?php echo doctype('html5');?>
<html>
<head>
    <title>Rubinas adminas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"  href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>styles.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>animate.css">
</head>
<body class='container' id='adminA'>
    <article class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Anketa</h1>
                </div>
                <div class="">
                    <h2 class='anketa-h2'>Sveiki, čia jūsų anketos labai slaptas puslapis, į kurį gali patekti tik labai slapti adminai :o</h2>
                    <a id='atsijungti' href="<?php echo base_url();?>index.php/vartotojas/administratorius" class="btn btn-danger">Atsijungti</a>
                    <a id='puslapi' href="<?php echo base_url();?>index.php/site/pagrindinis" class="btn btn-success">Į puslapį</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Klientai</h1>
                </div>
                    <div class='read'>
                        <table class='usersInfo' align="center">
                            <?php if(isset($records)){
                                foreach ($records as $row) {
                                    echo "<tr><td>".$row->id.".<td/><td> ".$row->email."</td><td> ".anchor("index.php/CRUD/delete/$row->id","<button class='btn btn-danger'>X</button>")."</td></tr>";
                                    }
                                }
                                else{
                                    echo "<h2>Įrašų nėra</h2>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Atsiliepimai</h1>
                </div>
                    <div class='readr'>
                        <div id='err-info'><?php if (isset($aderr)) echo $aderr;?></div>
                        <table class='usersInfo' align='center' >
                            <?php if(isset($reviews)){
                                foreach ($reviews as $row) {
                                    echo "<tr><td>".$row->id.".<td/><td> ".$row->review."</td><td><button class='btn btn-success' onclick='btnEdit(\"$row->id\",\"$row->review\")'>EDIT</button></td><td> ".anchor("index.php/CRUD/deleteReview/$row->id","<button class='btn btn-danger'>X</button>")."</td></tr>";
                                    }
                                }
                                else{
                                    echo "<h2>Įrašų nėra</h2>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default " id='redaguoti'>
            <div class="panel-body">
                <div class="page-header">
                    <h1>Redaguoti atsiliepimą</h1>
                </div>
                <div>
                <?php 
                    echo form_open('index.php/CRUD/updateReview');

                    echo "<table align='center'>";


                    $data = array(
                        'name' => 'reviewText',
                        'id' => 'reviewText',
                        'rows' => '6',
                        'cols' => '70'
                    );

                    echo "<tr><td>";
                    echo form_textarea($data);
                    echo "</td></tr>";

                    $duom = array(
                        'name' => 'rewid',
                        'id' => 'rewid',
                    );

                    echo "<tr  ><td>";
                    echo form_textarea($duom);
                    echo "</td></tr>";

                    echo "<tr><td>";
                    echo form_submit('edit_submit','REDAGUOTI');
                    echo "</td></tr>";

                    echo "</table>";

                    echo form_close();
                ?>
            </div>
        </div>
    </article>
    <script src = "//code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src= '<?php echo base_url();?>animate.js' type="text/javascript"></script>
</body>
</html>
