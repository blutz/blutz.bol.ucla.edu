<script type="text/javascript">
$(document).ready(function() {
	$("img.portfolio_image").each(function() {
		$(this).after("<div class='portfolio_link'>"+$(this).attr('title')+"</div>").next().css("opacity",0);
	});
	$("img.portfolio_image").hover(function(){
		$(this).next().animate({opacity:1},100);
	}, function(){
		$(this).next().animate({opacity:0},50);
	});
});
</script>

<section>
	<h2>Portfolio</h2><hr />
	<article>
	<!-- Dance Marathon -->
		<div class="col3">
			<a href="http://dailybruin.com/dance-marathon" target="_blank" class="clean">
				<img src="/img/portfolio/dm2013_thumb.jpg" class="portfolio_image" title="Dance Marathon 2013"></img>
			</a>
			<p class="portfolio_tech">
			HTML/CSS/jQuery, Bootstrap, WordPress
			</p>
			<p class="portfolio_desc">Online coverage for UCLA's Dance Marathon 2013.</p>
		</div>
	<!-- DailyBruin.com -->
		<div class="col3">
			<a href="http://dailybruin.com/" target="_blank" class="clean">
				<img src="/img/portfolio/dailybruin_thumb.jpg" class="portfolio_image" title="DailyBruin.com"></img>
			</a>
			<p class="portfolio_tech">
			PHP, jQuery, Photoshop, HTML/CSS, Bootstrap, apache2/mysql, etc.
			</p>
			<p class="portfolio_desc">Daily Bruin's website</p>
		</div>
	<!-- Elections 2012 -->
		<div class="col3">
			<a href="http://elections.dailybruin.com/" target="_blank" class="clean">
				<img src="/img/portfolio/elections_thumb.jpg" class="portfolio_image" title="Elections 2012"></img>
			</a>
			<p class="portfolio_tech">
			Django, HTML/CSS/jQuery, Bootstrap, Google Charts
			</p>
			<p class="portfolio_desc">A live website for Daily Bruin elections 2012 coverage.</p>
		</div>
	<!-- Depth Chart -->
		<div class="col3">
			<a href="http://graphics.dailybruin.com/football2012" target="_blank" class="clean">
				<img src="/img/portfolio/depthchart_thumb.jpg" class="portfolio_image" title="Football Depth Chart"></img>
			</a>
			<p class="portfolio_tech">
			jQuery Mobile
			</p>
			<p class="portfolio_desc">A mobile depth chart for Daily Bruin Football.</p>
		</div>
	<!-- Grad 2012 -->
		<div class="col3">
			<a href="http://graphics.dailybruin.com/grad2012" target="_blank" class="clean">
				<img src="/img/portfolio/grad_thumb.jpg" class="portfolio_image" title="Graduation 2012"></img>
			</a>
			<p class="portfolio_tech">
			jQuery, HTML, CSS
			</p>
			<p class="portfolio_desc">A set of projects for the graduation issue.</p>
		</div>
	<!-- Biff-"E"-Breeze -->
		<div class="col3">
			<a href="http://biffebreeze.com" target="_blank" class="clean">
				<img src="/img/portfolio/biffebreeze_thumb.jpg" class="portfolio_image" title="Biff-&ldquo;E&rdquo;-Breeze"></img>
			</a>
			<p class="portfolio_tech">
			Wordpress, Javascript, HTML, CSS, Photoshop
			</p>
			<p class="portfolio_desc">UCLA UniCamp blog/magazine I designed/developed.</p>
		</div>
	<!-- LA Marathon -->
		<div class="col3">
			<a href="http://graphics.dailybruin.com/marathon" target="_blank" class="clean">
				<img src="/img/portfolio/marathon_thumb.jpg" class="portfolio_image" title="Miles of Memories"></img>
			</a>
			<p class="portfolio_tech">
			jQuery, Javascript, HTML, CSS, Photoshop
			</p>
			<p class="portfolio_desc">An interactive audio slideshow I designed and made for the Daily Bruin.</p>
		</div>
	
	<!-- Mojo -->
		<div class="col3">
			<a href="http://mojo.dailybruin.com/" target="_blank" class="clean">
				<img src="/img/portfolio/mojo_thumb.jpg" class="portfolio_image" title="Mojo"></img>
			</a>
			<p class="portfolio_tech">
			Wordpress, PHP, Photoshop, HTML5, CSS3, jQuery, Apache, Responsive Design
			</p>
			<p class="portfolio_desc">A blog I built for the Daily Bruin that focuses on less formal, constantly updated news. I am also a contributor.</p>
		</div>
	
	<!-- Vietnam -->
		<div class="col3">
			<a href="http://vietnam.dailybruin.com/" target="_blank" class="clean">
				<img src="/img/portfolio/vietnam_thumb.jpg" class="portfolio_image" title="Heart of the Problem"></img>
			</a>
			<p class="portfolio_tech">
			HTML, CSS, Javascript, jQuery, Apache
			</p>
			<p class="portfolio_desc">Flat page created for the 2011 <a href="http://www.rememberingbridget.com/">Bridget O'Brien</a> Project for the Daily Bruin. A reporter and photographer traveled to Vietnam.</p>
		</div>
	
	<!-- International Recruitment -->
		<div class="col3">
			<a href="http://graphics.dailybruin.com/international/" target="_blank" class="clean">
				<img src="/img/portfolio/international_thumb.jpg" class="portfolio_image" title="International"></img>
			</a>
			<p class="portfolio_tech">
			HTML, CSS, Apache
			</p>
			<p class="portfolio_desc">An interactive map <a href="http://www.dailybruin.com/index.php/staff/kelly_zhou">Kelly Zhou</a> and I created. I configured the server and made the site template.</p>
		</div>

	<!-- Sigrist -->
		<div class="col3">
			<a href="http://sigristhomes.com" target="_blank" class="clean">
				<img src="/img/portfolio/sigrist_thumb.jpg" class="portfolio_image" title="Sigrist Homes"></img>
			</a>
			<p class="portfolio_tech">
			Wordpress, PHP, HTML5, CSS3, Photoshop
			</p>
			<p class="portfolio_desc">Series of three websites for a company in Rocklin, CA that I designed and coded.</p>
		</div>

	<!-- Linebreak -->
		<div class="col3">
			<a href="?p=linebreak" target="_blank" class="clean">
				<img src="/img/portfolio/linebreak_thumb.jpg" class="portfolio_image" title="Linebreak"></img>
			</a>
			<p class="portfolio_tech">
			Javascript
			</p>
			<p class="portfolio_desc">An application to add extra lines between paragraphs. Developed for the Daily Bruin.</p>
		</div>

	<!-- Market Fresh -->
		<div class="col3">
			<a href="/img/portfolio/marketfresh.pdf" target="_blank" class="clean">
				<img src="/img/portfolio/marketfresh_thumb.jpg" class="portfolio_image" title="View PDF"></img>
			</a>
			<p class="portfolio_tech">
			InDesign, Illustrator
			</p>
			<p class="portfolio_desc">A page I designed in the Daily Bruin's registration issue. It introduces booths from the local farmers market.</p>
		</div>
		
	<!-- Raiders' Arrow -->	
		<div class="col3">
			<a href="/img/portfolio/RaidersArrow.pdf" target="_blank" class="clean">
				<img src="/img/portfolio/RaidersArrow_thumb.jpg" class="portfolio_image" title="View PDF"></img>
			</a>
			<p class="portfolio_tech">
			InDesign
			</p>
			<p class="portfolio_desc">A sample issue of my high school newspaper, the Raiders&rsquo; Arrow. I was the editor-in-chief for two years and created this design.</p>
		</div>
		
	<!-- Dillon Shop -->
		<div class="col3">
			<a href="http://dillonshop.com" target="_blank" class="clean">
				<img src="/img/portfolio/dillonshop_thumb.jpg" class="portfolio_image" title="One-Stop Dillon Shop"></img>
			</a>
			<p class="portfolio_tech">
			Wordpress, Vanilla Forum, PHP, CSS, HTML
			</p>
			<p class="portfolio_desc">A site I set up for a high school teacher. It includes a private forum for out-of-class discussions, a calendar, and a blog.</p>
		</div>
	</article>
</section>
