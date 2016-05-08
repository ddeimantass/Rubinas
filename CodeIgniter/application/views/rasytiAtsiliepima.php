    <article class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Klientų atsiliepimai</h1>
                </div>
                <div class='readr'>
                    <table class='usersInfo' align='center'>
                        <?php if(isset($records)){
                            foreach ($records as $row) {
                                echo "<tr><td>".$row->review."</td></tr>";
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
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Rašyti atsiliepimą</h1>
                </div>
                <div>
                    <div class='rasyti_ats'>
                    <?php echo form_open('index.php/CRUD/create');?>
                    <p>
                        <textarea id='review' name="review" placeholder="Atsiliepimo tekstas"></textarea>
                    </p>
                    <p>
                        <input type='submit' value='ATSILIEPTI'/>
                    </p>
                    <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </article>