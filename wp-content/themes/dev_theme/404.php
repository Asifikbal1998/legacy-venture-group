<?php  get_header();  

?>



<div class="container not-found">
    <div class="row"> 
        <div class="col-md-12">
			<div class="not_found_404">
				<h1>Page Not Found <span> !Server Error</span></h1><br>
			</div>
			<div class="searchform">
				<h4> Search anything else</h4>
				<form action="<?php echo home_url(); ?>" id="search-form" method="get">
					<input type="text" name="s" id="s" value="type your search" onblur="if(this.value=='')this.value='type your search'"
					onfocus="if(this.value=='type your search')this.value=''" />
					<input class="sbt" type="submit"  value="submit" />
				</form>
			</div>
        </div>
    </div>
</div>  




<?php  get_footer();   ?>