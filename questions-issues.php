<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Questions/Issues - Summit Community</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta property="og:image" content="http://mtu.summitcommunity.edu/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="213">
		<meta property="og:image:height" content="78">
		<meta name="viewport" content="width=1112" />
		<link rel="icon" href="favicon.png?12-0-9-30-636158869573686053" type="image/png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css?12-0-9-30" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?12-0-9-30" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?12-0-9-30" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?12-0-9-30" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?12-0-9-30" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css?12-0-9-30" media="screen" /><![endif]-->
		<link rel="stylesheet" type="text/css" href="pcss/questions-issues.css?12-0-9-30-636158869573695767" media="screen" />
		
		<script type="text/javascript" src="res/jquery.js?12-0-9-30"></script>
		<script type="text/javascript" src="res/x5engine.js?12-0-9-30" data-files-version="12-0-9-30"></script>
		
		
		
		<script type="text/javascript">
			x5engine.boot.push(function () { x5engine.bgStretch('style/bg.jpg', true, 0); });
		</script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Questions/Issues - Summit Community</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Home Page</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="summit-adventures.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Summit Adventures</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode5" class=" imPage">
						<a href="weather-in-houghton.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Weather in Houghton</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode4" class="imPage imMnMnCurrent">
						<a href="questions-issues.php">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Questions/Issues</span></span>
							</span>
						</a>
					</li></ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<div id="imGroup_1" class="imVGroup">
				<div id="imCell_1"><div id="imCellStyleGraphics_1"></div><div id="imCellStyle_1"><div id="imTextObject_1">
					<div class="text-tab-content"  id="imTextObject_1_tab0" style="">
						<div class="text-inner">
							<span class="fs14 cf1">Have a suggestion? Please leave one bellow!</span>
						</div>
					</div>
				
				</div>
				</div></div><div id="imCell_2"><div id="imCellStyleGraphics_2"></div><div id="imCellStyle_2"><div id="GuestBookObject_42" style="height: 650px; overflow-y: auto; overflow-x: hidden;">
				<?php
				$gb = new ImTopic('x5gb42');
				$gb->setCommentsPerPage(10);
				$gb->setTitle('Questions/Issues');
				$gb->loadXML(pathCombine(array($imSettings['general']['public_folder'], '')));
				$gb->showSummary(false);
				$gb->showForm(false, false, false, '', 'guestbook', $imSettings['general']['url'] . 'admin/guestbook.php?id=x5gb42');
				$gb->showComments(false, 'desc', true);
				?>
				<script type="text/javascript">x5engine.boot.push('x5engine.topic({ target: \'#GuestBookObject_42\', scrollbar: true})', false, 6);</script>
				</div>
				</div></div>
				</div>
				<div id="imFooPad" style="height: 0px; float: left;">&nbsp;</div><div id="imBtMn"><a href="index.html">Home Page</a> | <a href="summit-adventures.html">Summit Adventures</a> | <a href="weather-in-houghton.html">Weather in Houghton</a> | <a href="questions-issues.php">Questions/Issues</a> | <a href="imsitemap.html">General Site Map</a></div>
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Remain on this page">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
