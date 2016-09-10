<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?> - CakeFest App
	</title>
	<?php
		echo $this->Html->meta('icon');
	?>
	<?php //echo $this->Html->css('cake.generic') ?>
	<?php echo $this->Html->css('bootstrap/bootstrap.min.css') ?>
    <?php echo $this->Html->css('font-awesome/4.2.0/css/font-awesome.min.css') ?>
    <?php echo $this->Html->css('bootstrap/ace.min.css') ?>
    <?php echo $this->Html->css('fonts/fonts.googleapis.com.css') ?>
	<?php //echo $this->Html->css('cake.css') ?>

	<?php echo $this->fetch('meta') ?>
	<?php echo $this->fetch('css') ?>
    <?php echo $this->Html->script('common/jquery.2.1.1.min.js');?>
   <?php echo $this->Html->script('common/bootstrap.min.js');?>
	
	<?php echo $this->fetch('script') ?>
</head>
<body class="no-skin">
    <div class="main-container" id="main-container">
        <?php if ($this->AuthUser->id()) { ?>
            <?=$this->Element('top_nav')?>
            <?=$this->Element('left_nav')?>
        <?php } ?>
               
        <div id="content" class="main-content">
            <?php echo $this->Flash->flash(); ?>
			<?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
            <?=$this->Element('footer')?>
        </div>
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->Js->writeBuffer(['onDomReady' => false]); ?>
    </div>
<?php
$debug = Cake\Core\Configure::read('debug');
if ($debug > 0 && Cake\Core\Plugin::loaded('Setup')) {
	//$this->loadHelper('Setup.Debug', $debug);
	//echo $this->Debug->show();
}
?>
</body>
</html>
