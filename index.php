<html>
	
	<?php 

	$bookmarklet_url = $_GET['url']
	$bookmarklet_name = $_GET['name']


	?>

	<head>
	
		<style type="text/css">
			.bookmarklet {
				min-height: 100px;
				min-weight: 100px;
				padding: 10px 10px;
				background-color: white;
				color: black;
				font-size: bolder;
				font-color: #3B2E2E;
				border-radius: 30px;
			}
			
			.button {
				background-color: #DAECF6;
				border-color: #C4DDEF;
				border-style: solid;
				height: 100px;
				width: auto;
				margin: 20px 10px 20px 20px;
				padding: 20px 10px 20px 20px;
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
		<div class="button">
			<a class="bookmarklet" href="javascript:var script = document.createElement('script');
					 script.src = '<?php echo $_GET['url'] ?>';
					 script.type = 'text/javascript';
					 document.getElementsByTagName('head')[0].appendChild(script);
					 void(0);"><?php echo $_GET['name'] ?>BOOKMARKLET</a>
			<span> &lt;-------- DRAG THIS LINK AND MOVE IT TO YOUR BOOKMARK BAR </span>
			<div>
				<?php if(empty($bookmarklet_url)): ?>
					Note: This bookmarklet inject in your page script from <?php echo $_GET['url'] ?>
				<?php else: ?>
					Create inject bookmarklet link from this url:
					<form action='get'>
						Url of script to be injected by click on bookmarklet: <input type='text' name='url'>
						Bookmarklet name (optional) : <input type='text' name='name'>
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