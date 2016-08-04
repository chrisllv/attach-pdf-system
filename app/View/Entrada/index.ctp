<?php echo $this->Form->create('Admin', array('url'=>'/entrada/index/login', 'class'=>'login-form')); ?>
<div class="login-wrap">
    <p class="login-img"><i class="icon_lock_alt"></i></p>
    <div id="error"><?if(isset($msg)){echo $msg;}?></div>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_profile"></i></span>
      <input type="text" class="form-control" placeholder="Username" autofocus name="data[usuario]">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
        <input type="password" class="form-control" placeholder="Password" name="data[clave]" >
    </div>
    <label class="checkbox">
        <span class="pull-right"> <a href="#"> Olvidaste la contraseña?</a></span>
    </label>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
</div>
</form>
