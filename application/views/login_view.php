<div class="ice-div ice-intro-big ice-center">
    <div class="ice-center-abs">    <!--ICECSS中绝对居中-->
        <form class="ice-form" action="<?=base_url().'index.php/login/signin'?>" method="post">
            <div class="ice-onerow">
                <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="ice-onerow">
                <input type="password" placeholder="Password" name="password"/>
            </div>
            <div class="ice-onerow">
                <input class="ice-button" type="submit" value="Sign in"/>
            </div>

        </form>

    </div>
</div>
<style>
    .ice-form input[type=text]{
        width: 250px;
    }
    .ice-form input[type=password]{
        width: 250px;
    }
    .ice-button{
        width: 250px;
    }
</style>