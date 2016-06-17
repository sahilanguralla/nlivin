<header class="shadow-1dp bg-white">
	<div class="ui container">
		<div class="ui grid">
			<div class="four wide column">
				<img class="wd-100px wd-mobile-70px" src="{{ URL::to("assets/images/title.png") }}" alt="Nliv.in">
			</div>
			<div class="four wide computer only six wide tablet only column right floated">
				<div class="v-spacer-2"></div>
				<div class="column">
					<div class="ui secondary pointing menu">
						<a class="item active">Home</a>
						<a class="item">Contact Us</a>
						<a class="item">About Us</a>
					</div>
				</div>
			</div>
			<div class="eight wide column right floated right aligned mobile only">
				<div class="v-spacer-1"></div>
				<button data-target="#header-menu" class="ui icon basic button sidebar-toggle">
				  <i class="sidebar icon"></i>
				</button>
			</div>
		</div>
	</div>
</header>
<div class="v-spacer-2"></div>
<div id="header-menu" class="ui vertical right sidebar menu">
  <a class="item active">Home</a>
	<a class="item">Contact Us</a>
	<a class="item">About Us</a>
</div>