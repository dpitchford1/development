<?php
/* Template Name: Player Card Templates */
?>
<?php
$display_sidebar = get_post_meta( get_the_ID(), 'sn_display_sidebar', true );
$divclass = $display_sidebar['sn_display_sidebar'] == 1 ? 'row_two_column_with_fixed' : 'row_one_column';

?>
<?php get_header(); ?>

<div class="container body-content">

	<div class="<?php echo $divclass; ?>">
		<!-- BEGIN: Static code -->
		<div class="column">

			<h1><?php the_title() ?></h1>

				
			<div class="card-wrapper nhl-phi">
	
			    <span class="bgcolor card-team-img ico nhl-phi--170x170"></span>
			    <span class="card-player-photo"><img alt="player name" src="http://www.sportsnet.ca/wp-content/uploads/players/nhl/a/anze-kopitar.png"></span>
				
			    <h3 class="card-heading"><span class="card-name">Pierre-Luc Letourneau-Leblond</span></h3>
			    <table class="card-table card-season-stats" summary="Player Season Stats">
			        <thead><th colspan="8">Season stats</th></thead>
			        <tbody class="card-stats-body">
			            <tr class="bgcolor">
			                <th scope="col">Age</th>
			                <th scope="col" title="Position">Pos</th>
			                <th scope="col" title="Games Played">GP</th>
			                <th scope="col" title="Goals">G</th>
			                <th scope="col" title="Assists">A</th>
			                <th scope="col" title="Points">PTS</th>
			                <th scope="col" title="Penalty Minutes">PM</th>
			                <th scope="col" title="Plus Minus">+/-</th>
			            </tr>
			            <tr>
			                <td>27</td>
			                <td>D</td>
			                <td>82</td>
			                <td>4</td>
			                <td>24</td>
			                <td>28</td>
			                <td>50</td>
			                <td>-22</td>
			            </tr>
			        </tbody>
			    </table>
			    
			    <table class="card-table card-salary-stats" summary="Player Salary Summary">
			        <tr>
			            <th scope="row">Contract Length</th>
			            <td>2 Years</td>
			        </tr>
			        <tr>
			            <th scope="row">Type</th>
			            <td>Contract Extension</td>
			        </tr>
			        <tr>
			            <th scope="row">Total</th>
			            <td>$5 Million</td>
			        </tr>
			        <tr>
			            <th scope="row">Salary Cap Hit</th>
			            <td>$2.5 Million</td>
			        </tr>
			        <tr>
			            <th scope="row">Previous Salary</th>
			            <td>$2 Million</td>
			        </tr>
			        <tr>
			            <th scope="row">Raise / Paycut</th>
			            <td><span class="card-payraise" title="Pay Raise">+25%</span> &nbsp; <span class="card-paycut" title="Pay Cut">-15%</span></td>
			        </tr>
			    </table>
			    
			    <div class="card-analysis">
			    	<h4 class="card-heading card-analysis-head">Instant Analysis</h4>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur fringilla velit eget varius. Aliquam vel ornare massa. Nullam sem leo posuere sit amet arcu at, adipiscing fringilla nibh. Duis convallis dolor sed consequat ornare. Duis a diam ultrices, aliquet velit elementum, ornare elit. Aliquam ut convallis eros, quis vehicula orci.</p>

			    	<p class="card-analysis-foot">
			    		<span class="is--staff" rel="author">Nick Kypreos</span> <a class="has--twitter" href="" target="_blank" rel="nofollow external" title="Follow Nick Kypreos on Twitter">@RealKyper</a>
			    	</p>
			    	<p><a href="123">Complete signing details</a></p>

			    </div>
			    
			    <div class="card-ratings">


			    	Ratings here

			    </div>
			                

			</div>
			

		</div><!-- /.column -->
		<!-- END Static code -->

		<?php if ( $display_sidebar['sn_display_sidebar'] == 1 ) : ?>

			<?php get_sidebar( $sidebar ) ?>

		<?php else : ?>

			<div class="clear"></div>

		<?php endif ?>

	</div><!-- <?php echo $divclass; ?> -->
</div><!-- container body-content -->

<?php get_footer(); ?>