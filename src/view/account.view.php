<section class="container pad-top">
    <div class="row">
        <div class="card col s6 offset-s3 center">
            <h1 class="blue-text text-darken-4" >Cadastrar</h1>
            <form class="row" action="login" method="POST">
                <div class="input-field col s8 offset-s2">
                    <input id="username" type="text" class="validate"/>
                    <label for="username" >Username</label>
                </div>
                <div class="input-field col s8 offset-s2" autocomplete="off">
                    <input id="email" type="email" class="validate"/>
                    <label for="email" >Email</label>
                </div>
                <div class="input-field col s8 offset-s2" autocomplete="off">
                    <input id="confirmEmail" type="email" class="validate"/>
                    <label for="confirmEmail" >Confirme Email</label>
                </div>
                <div class="input-field col s8 offset-s2">
                    <input id="password" type="password" class="validate"/>
                    <label for="password" >Password</label>
                </div>
                <div class="input-field col s8 offset-s2">
                    <input id="confirmPassword" type="password" class="validate"/>
                    <label for="confirmPassword" >Password</label>
                </div>
                <button class="btn waves-effect waves-light col s8 offset-s2" type="submit" name="action">
                    Cadastrar
                </button>
            </form>
            <div class="row">
                <a href="<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '#' ; ?>" > Voltar</a>
            </div>
        </div>
    </div>
</section>