<div class="col-lg-4 col-lg-offset-4">
		<?php echo $this->Form->create('User',array(
												'url' => array(
													'controller' => 'users',
													'action' => 'login'
												)));?>
    <div class="center">
        <h2><?php echo Configure::read('Application.name') ?></h2>
    </div>

    <hr>
		  <?php echo $this->Form->input('email', array('label' => __('Email')));?>
		  <?php echo $this->Form->input('password', array('label' => __('Password')));?>
    <div class="form-group">
			<?php echo $this->Html->link(__('Create a new account'),array('controller' => 'users','action' => 'add')) ?></br>
		  	<?php echo $this->Html->link(__('Forgot your password?'),array('controller' => 'users','action' => 'remember_password')) ?>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="data[User][remember_me]" value="S"> <?php echo __('Remember me')?>
        </label>
    </div>
    <button type="submit" class="btn btn-default"><?php echo __('Login')?></button>
</form>
		<?php echo $this->Form->create('User',array(
												'url' => array(
													'controller' => 'users',
													'action' => 'login'
												)));?>
<hr>
		  <?php echo $this->Form->hidden('email', array('value' => 'visiteur@gmail.com'));?>
		  <?php echo $this->Form->hidden('password', array('value' => '123'));?>
<button type="submit" class="btn btn-default"><?php echo __('Browse as a guest')?></button>
</form>


</div>
