<h2 class="form-signin-heading"><?php echo $label ?></h2>
<?php echo $this->Form->create('User', array('type' => 'file'));?>
	<?php echo $this->Form->input('username',array(
		'label' => __('Username'),
		'value' => !empty( $user['username'] ) ? $user['username'] : ''));?>

	<?php echo $this->Form->input('email', array(
		'label' => __('Email'),
		'value' => !empty( $user['email'] ) ? $user['email'] : ''));?>

	<?php echo $this->Form->input('password',array(
		'label' => __('Password'),
		'value' => false));?>

	<?php echo $this->Form->input('role', array(
		'label' => __('Role'),
		'options' => array('admin' => __('Admin'), 'author' => __('Author'), 'visitor' => __('Visitor')),
		'selected' => !empty( $user['role'] ) ? $user['role'] : ''));?>

        <?php echo $this->Form->input('avatar_file', array(
		'label' => __('Votre avatar(jpg ou png)'),
		'type' => 'file'));?>

<?php echo $this->Form->end(__("Submit"));?>
