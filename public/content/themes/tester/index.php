<?php get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main" style="max-width: 1040px; margin: 0 auto; padding: 50px 0; overflow:hidden; ">
			
			<style>
				.col {
					float: left;
					width: 30%;
					margin-right: 5%;
				}
				.col.end {
					margin-right: 0;
				}
				.col img {
					width: 100%;
					height: auto;
					display: block;
					margin-bottom: 0;
					border: 5px solid #ccc;
				}
				.col h2 {
					margin: 8px 0;
				}
			</style>

			<h1 style="margin: -30px 0 10px;">Hiker Profiles</h1>

			<div class="col">
				<img src="/images/alien-1.jpg" />
				<h2>Zorbox Ferbenciiy</h2>
				<p>If you're headed to Alpha Quadrant-9, there's almost no better guide than Zorbox. And nobody pulls off the silver suit better, either.</p>
			</div>

			<div class="col">
				<img src="/images/trillian.jpg" />
				<h2>Trillian</h2>
				<p>Looking for a space co-adventurer who knows how to operate an infinite improbability drive? Look no further than the Earthling formerly known as Tricia MacMillain.</p>
			</div>

			<div class="col end">
				<img src="/images/alf.jpg" />
				<h2>A.L.F.</h2>
				<p>Up with laughs, down with cats, this wacky alien life form will make any long trip a blast. Ha! He'll KILL you!</p>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>