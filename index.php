<html>
	
	<head>
	
		<style type="text/css">
			.button {
				min-height: 100px;
				min-weight: 100px;
				padding: 10px 10px;
				background-color: white;
				color: black;
				font-size: bolder;
				font-color: #3B2E2E;
				border-radius: 30px;
			}
			
			.content {
				background-color: #DAECF6;
				border-color: #C4DDEF;
				border-style: solid;
				height: 100px;
				width: auto;
				margin: 20px 10px 20px 20px;
				padding: 20px 10px 20px 20px;
			}
			
			.bookmarklet {
				margin-bottom: 20px;
			}
			
			a:visited {
				font-color: #3B2E2E;
				text-decoration: none;
			}
			
			a {
				font-color: #3B2E2E;
				text-decoration: none;
			}
		</style>
	
	</head>

	<body>
		<div class="content">
			<?php if(isset($_GET['url'])): ?>
				<div class="bookmarklet">
					<a class="button" href="javascript:var script = document.createElement('script');
							 script.src = '<?php echo $_GET['url'] ?>';
							 script.type = 'text/javascript';
							 document.getElementsByTagName('head')[0].appendChild(script);
							 void(0);"><?php if (isset($_GET['name'])) echo $_GET['name']; else echo $_GET['name']; ?></a>
					<span> &lt;-------- DRAG THIS LINK AND MOVE IT TO YOUR BOOKMARK BAR </span>
				</div>
			<?php endif; ?>
			<div>
				<?php if(isset($_GET['url'])): ?>
					Note: This bookmarklet inject in your page script from <?php echo $_GET['url'] ?>
				<?php else: ?>
					Use this form to create injecting bookmarklet
					<form id="form" method='get'>
						<div>Url of script to be injected by click on bookmarklet: <input id='urlRawText' name='url' type='text'></div>
						<div>Bookmarklet name (optional) : <input type='text' name='name'></div>
						<div><input id="submitButton" type="submit" value="bookmarklet it!"></div>
					</form>
				<?php endif; ?>
			</div>
		</div>
		
		<div>
			<h2><a href="http://en.wikipedia.org/wiki/Bookmarklet">What is bookmarklet?</a></b>
		</div>
		
		<p>
			TODO: browser sensitive help (as in modern days browser the bookmark bar is invisible by default
		</p>
		
		<p>
			TODO: animovany obrazek nebo youtube video s ukazkou pretazeni a kliknuti
		</p>
		
		
	</body>

</htm>