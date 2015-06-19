<div class="row col-condensed">
	<div class="col-xs-12">
		<div id="ntubs-slides" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#_slide-ntubs" data-slide-to="0" class="active"></li>
				<li data-target="#_slide-ntubs" data-slide-to="1"></li>
				<li data-target="#_slide-ntubs" data-slide-to="2"></li>
				<li data-target="#_slide-ntubs" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/slideshow.jpg" alt="Chania" />
					<!--<div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>-->
				</div>

				<div class="item">
					<img src="img/slideshow.jpg" alt="Chania" />
					<!--<div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>-->
				</div>

				<div class="item">
					<img src="img/slideshow.jpg" alt="Flower" />
					<!--<div class="carousel-caption">
						<h3>Flowers</h3>
						<p>Beatiful flowers in Kolymbari, Crete.</p>
					</div>-->
				</div>

				<div class="item">
					<img src="img/slideshow.jpg" alt="Flower">
					<!--<div class="carousel-caption">
						<h3>Flowers</h3>
						<p>Beatiful flowers in Kolymbari, Crete.</p>
					</div>-->
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#_slide-ntubs" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#_slide-ntubs" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<h2 class='border-bottom text-center'>Upcoming Events</h2>
	</div>
</div>
<div id="event-list-container" class="row">
<?php

while($event = $events -> fetch_assoc()) {
?>
	<div class="col-sm-4">
		<a class="link-img" href="">
			<div class="link-img-holder">
				<img class="img-responsive center-block" src="<?=$event['img_path']?>" />
				<div class="link-img-popup">
					<button>Read more</button>
				</div>
			</div>
			<div class="link-img-title"><?=$event['title']?></div>
			<div class="link-img-desc"><?=$event['content']?></div>
		</a>
	</div>
<?php
}

?>
<!--
	<div class="col-sm-4">
		<a class="link-img" href="">
			<div class="link-img-holder">
				<img class="img-responsive center-block" src="img/event3.jpg" />
				<div class="link-img-popup">
					<button>Read more</button>
				</div>
			</div>
			<div class="link-img-title">Buddhism Awareness Week 2015</div>
			<div class="link-img-desc">Hi NTU!</div>
		</a>
	</div>
	<div class="col-sm-4">
		<a class="link-img" href="">
			<div class="link-img-holder">
				<img class="img-responsive center-block" src="img/event2.jpg" />
				<div class="link-img-popup">
					<button>Read more</button>
				</div>
			</div>
			<div class="link-img-title">NTUBS Meditation Class I: "Basic Meditation"</div>
			<div class="link-img-desc">Hi NTU!</div>
		</a>
	</div>
-->
</div>
<div class="row">
	<div id="recent-post" class="col-sm-4">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="border-bottom">Recent Post</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">List of recent posts.</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="border-bottom">About NTU Buddhist Society</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p>Nanyang Technological University Buddhist Society is a non-sectarian Buddhist society which provides various Dhamma learning experience suitable for NTU community.It envisions propagating the Dhamma and at the same time encouraging spiritual development.</p>
				<p>Walk the journey together with us to learn the noble knowledge, to practice the wholesome actions, to realize the potential and to share the benefits with all beings.</p>
				<p>Explore it by yourself. Enhance your campus life with Buddhism today.</p>
			</div>
		</div>
	</div>
</div>
