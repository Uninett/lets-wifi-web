<?php $this->layout('menu', ['title' => 'Apps'])?>
<?php $this->start('content') ?>
<main>
	<h1>geteduroam<small>– eduroam authentication made easy</small></h1>
	<p>For most users, the easiest way to use geteduroam is to use one of the official apps.</p>
	<ul class="apps buttons">
<?php foreach($apps as $id => $app): ?>
		<li><a class="btn btn-default" href="<?=$this->e($app['url'])?>"><?=$this->e($app['name'])?></a></li>
<?php endforeach; ?>
	</ul>
	<!-- this section isn't pretty, but can be removed once the macOS App is release -->
	<p>For macOS, the current option is to install a .mobileconfig profile.</p>
	<ul class="apps buttons devices">
	<form method="get" action="/profiles/new/get.php">
		<li><button type="submit" name="device" value="apple-mobileconfig" class="btn btn-default">macOS</button></li>
	</form>
	</ul>
	<!-- end of to be removed section -->
	<hr>
	<details>
		<summary>Options for other platforms and professional users</summary>
		<p class="apps"><a href="<?=$this->e($manual['url'])?>" class="btn btn-default">Generate a certificate for manual use</a></p>
	</details>
</main>
<?php $this->stop('content') ?>
