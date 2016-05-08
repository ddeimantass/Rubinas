<article class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Krepšelis</h1>
                </div>
                <div id='turinys'>
                    <?php if($_SESSION["krepselis"]){echo $_SESSION["krepselis"];}else{echo 'tuščias';}?>
                </div>
            </div>
        </div>
    </article>
    