<div id="navbar" class="col-md-3 col-sm-3  ">
	<ul >
		
		<li id="widget-destaques">
			<h3>Destaques</h3>
			<?php query_posts('showposts=3&cat=24');?>
			<?php $i = 0; if(have_posts()): while(have_posts()): the_post(); $i++;?>
			
			<ul>
				<li class="row">
					<div class="col-md-4 col-sm-4 col-xs-4"><span ><?php the_post_thumbnail(); ?></span></div> 					
					<a class="col-md-8 col-sm-8 col-xs-8" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					
					
				</li>
			</ul>
			<?php endwhile; ?>
			<?php endif; ?>
		</li>
		<li id="widget-recentes">
			<h3>Recentes</h3>
			<?php query_posts('showposts=3');?>
			<?php $i = 0; if(have_posts()): while(have_posts()): the_post(); $i++;?>
			
			<ul>
				<li class="row">
					<div class="col-md-4 col-sm-4 col-xs-4"><span ><?php the_post_thumbnail(); ?></span></div> 					
					<a class="col-md-8 col-sm-8 col-xs-8" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					
					
				</li>
			</ul>
			<?php endwhile; ?>
			<?php endif; ?>
		</li>
	</ul>
	

	<?php if(is_active_sidebar('calltoactions')): ?>
	<ul>
		<?php dynamic_sidebar('calltoactions'); ?>
	</ul>
	<?php endif; ?>	 

	
</div>