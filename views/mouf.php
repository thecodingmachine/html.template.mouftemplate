<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php 
		/* @var $this \Mouf\Html\Template\MoufTemplate\MoufTemplate */
		if ($this->favIconUrl) { ?>
		<link rel="icon" type="image/png" href="<?php echo ROOT_URL.$this->favIconUrl; ?>" />
		<?php } ?>
		<link href="<?php echo ROOT_URL.self::TEMPLATE_ROOT_URL ?>css/style.css" rel="stylesheet" type="text/css" />
		<title><?php echo $this->getTitle() ?></title>
		<?php 
		$webLibraryManager = $this->getWebLibraryManager();
		if ($webLibraryManager) {
			$this->getWebLibraryManager()->toHtml();
		} ?>
	</head>
	<?php
	$class = ''; 
	if ($this->left != null) {
		ob_start();
		$this->left->toHtml();
		$leftHtml = ob_get_flush();
		
		if ($leftHtml) {
			$class .= 'sidebar-left-body';
		}
	}
	if ($this->right != null) {
		ob_start();
		$this->right->toHtml();
		$rightHtml = ob_get_flush();
		
		
		if ($rightHtml) {
			if($class)
				$class .= ' ';
			$class .= 'sidebar-right-body';
		}
	}
	?>
	<body class="<?php echo $class ?>">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="<?php echo ROOT_URL ?>">
						<img src="<?php echo ROOT_URL.$this->logoUrl ?>" alt="" />
					</a>
				</div>
			</div>
			<?php if ($this->header != null) { ?>
				<?php $this->header->toHtml();?>
			<?php } ?>
			<?php if ($leftHtml != null) { ?>
				<div id="sidebar-left" class="sidebar">
					<?php echo $leftHtml;?>
				</div>
			<?php } ?>
			<?php if ($rightHtml != null) { ?>
				<div id="sidebar-right" class="sidebar">
						<?php echo $rightHtml;?>
				</div>
			<?php } ?>
				
			<div id="content">
				<?php 
				if ($this->content != null) {
					$this->content->toHtml();
				}
				?>
			</div>
			<div style="height: 10px;"></div>
		</div>
	</body>
</html>