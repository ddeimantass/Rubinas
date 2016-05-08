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
                    <h2>Atsiliepimu gali palikti tik registruoti vartotojai</h2>
                </div>
            </div>
        </div>
    </article>