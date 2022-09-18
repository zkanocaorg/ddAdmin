<?php $formOzellikleri = array('id' => 'login_form', 'class' => 'user'); ?>
<?php echo form_open('/login/doLogin', $formOzellikleri); ?>
<div class="form-group">
	<label for="username">Kullanıcı adı</label>
	<input type="text" class="form-control bg-light " placeholder="Kullanıcı adı" name="username"
		   aria-label="Kullanıcı Adı" aria-describedby="basic-addon2" required>
	<?php echo form_error('username'); ?>
</div>
<div class="form-group">
	<label for="password">Parola</label>
	<input type="password" class="form-control bg-light " placeholder="Parola" aria-label="Parola" name="password"
		   aria-describedby="basic-addon2" required>
	<?php echo form_error('password'); ?>
</div>
<button type="submit" class="btn btn-primary">Oturum Aç</button>

<?php form_close(); ?>
<hr>
<p class="text-danger">
	<?php echo $this->session->flashdata('login_error'); ?>
</p>


