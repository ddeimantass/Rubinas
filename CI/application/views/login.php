<article class="container">
    <div id='reg-info'><?php if (isset($reg)) echo $reg;?></div>
    <div class="row">
        <div class='col-sm-6'>
            <div class="panel panel-default prisijungimas">
                <div class="panel-body">
                    <div class="page-header">
                        <h1>Prisijungimas</h1>
                    </div>
                
                    <?php
                        echo form_open("http://localhost:8888/CodeIgniter/index.php/vartotojas/prisijungti");
                    ?>
                        <div id='err-info'><?php if (isset($prierr)) echo $prierr;?></div>
                    <?php
                        echo "<h5> El. paštas:";
                        echo form_input('email',$this->input->post('email'));
                        echo "<h5>";

                        echo "<h5> Slaptažodis:";
                        echo form_password("password");
                        echo "<h5>";


                        echo "<h5>";
                        echo form_submit('login_submit','Prisijungti');
                        echo "<h5>";

                        echo form_close();
                    ?>
                </div>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <h1>Registracija</h1>
                    </div>
                    <?php
                        echo form_open("http://localhost:8888/CodeIgniter/index.php/vartotojas/registruotis");

                    ?>
                        <div id='err-info'><?php if (isset($regerr)) echo $regerr;?></div>
                    <?php

                        echo "<h5> El. paštas:";
                        echo form_input('email', $this->input->post('email'));
                        echo "<h5>";

                        echo "<h5> Slaptažodis:";
                        echo form_password("password");
                        echo "<h5>";

                        echo "<h5> Slaptažodžio patvirtinimas:";
                        echo form_password("cpassword");
                        echo "<h5>";


                        echo "<h5>";
                        echo form_submit('signup_submit','Registruotis');
                        echo "<h5>";

                        echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>