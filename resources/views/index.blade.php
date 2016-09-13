@include ('_header')

<div id="wrapper">
	<header id="header" class="alt">
		<a href="/" class="logo"><strong><span class="icon-maymax_logo"></span> Maymax Studio</strong></a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>
	<nav id="menu">
		<ul class="links">
			<li><a href="/">Home</a></li>
			<li><a href="https://play.google.com/store/apps/details?id=com.maymaxstudio.hundredjumps">Hundred Jumps</a></li>
		</ul>
		<ul class="actions vertical">
			<li><a href="#contact" class="button special fit">Contact us</a></li>
			<li><a href="/about" class="button fit">About us</a></li>
		</ul>
	</nav>
	<section id="banner" class="major">
		<div class="inner">
			<header class="major">
				<h1>We are Maymax Studio</h1>
			</header>
			<div class="content">
				<p>An independent studio dedicated to develop and produce<br>
                outstanding digital content services.</p>
				<ul class="actions">
					<li><a href="#one" class="button next scrolly">See projects</a></li>
				</ul>
			</div>
		</div>
	</section>
	<div id="main">
		<section id="one" class="tiles">
			<article>
				<span class="image">
	                <img src="/img/one.png" alt="Hundred Jumps">
				</span>
				<header class="major">
					<h3><a href="https://play.google.com/store/apps/details?id=com.maymaxstudio.hundredjumps" class="link">Hundred Jumps</a></h3>
					<p>"Just a hundred jumps.. easy, right?"</p>
				</header>
			</article>
			<article>
				<span class="image">
	                <img src="/img/two.jpg" alt="Soon">
				</span>
				<header class="major">
					<h3><a href="#" class="link">Soon</a></h3>
					<p>...</p>
				</header>
			</article>
			<article>
				<span class="image">
	                <img src="/img/three.jpg" alt="Soon">
				</span>
				<header class="major">
					<h3><a href="#" class="link">Soon</a></h3>
					<p>...</p>
				</header>
			</article>
			<article>
				<span class="image">
	                <img src="/img/four.jpg" alt="Soon">
				</span>
				<header class="major">
					<h3><a href="#" class="link">Soon</a></h3>
					<p>...</p>
				</header>
			</article>
		</section>
	</div>
	<section id="contact">
		<div class="inner">
			<section>
				<form method="post" action="https://formspree.io/info@maymaxstudio.com">
                    <input type="text" name="_gotcha" style="display:none">
                    <input type="hidden" name="_next" value="https://maymaxstudio.com/?sent" />
					<div class="field half first">
						<label for="name">Name</label>
						<input type="text" name="name" id="name">
					</div>
					<div class="field half">
						<label for="email">Email</label>
						<input type="email" name="_replyto" id="email">
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="6"></textarea>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" class="special"></li>
						<li><input type="reset" value="Clear"></li>
					</ul>
				</form>
			</section>
		</div>
	</section>
	<footer id="footer">
		<div class="inner">
			<ul class="icons">
				<li><a href="https://twitter.com/maymaxstudio" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://facebook.com/maymaxstudio" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="https://instagram.com/maymaxstudio" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://github.com/maymaxstudio" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
			</ul>
			<ul class="copyright">
				<li>Copyright &copy; 2016 Maymax Studio</li>
			</ul>
		</div>
	</footer>
</div>

@include ('_footer')
