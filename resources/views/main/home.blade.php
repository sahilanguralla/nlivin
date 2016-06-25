@extends('layouts.default')
@section('title')
Home
@endsection
@section('content')
<div class="v-spacer-2">&nbsp;</div>
<div class="ui centered grid">
	<div class="fifteen wide computer only twelve wide tablet only column">
		<div class="ui secondary menu">
		  <div class="right menu">
		    <div class="item">
		      <div class="ui icon input">
		        <input placeholder="Search..." type="text">
		        <i class="search link icon"></i>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="twelve wide mobile only column">
		<div class="ui secondary menu wd-100pc">
		  <div class="menu wd-100pc">
		    <div class="item wd-100pc">
		      <div class="ui icon input wd-100pc">
		        <input class="wd-100pc" placeholder="Search..." type="text">
		        <i class="search link icon"></i>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	@foreach($quotes as $quote)
	<div id="quote-{{ $quote->id }}" class="five wide computer six wide tablet twelve wide mobile column" data-picture="{{ URL::to('assets/images/avatars/'. ($quote->author->avatar)) }}" data-author="{{ $quote->author->name }}" data-desc="{{ $quote->message }}" data-link="{{ URL::route('home')}}">
		<div class="ui card wd-100pc {{ array("red", "orange", "yellow", "olive", "green", "teal", "blue", "violet", "purple", "pink", "brown", "grey", "black")[rand(0, 12)] }}">
			<div class="content">
				<div class="ui small feed">
					<div class="v-spacer-0-25"></div>
					<div class="event">
						<div class="content">
							<div class="font-1-2 min-ht-gt-mobile-100px">
								{{ $quote->message }}
							</div>
						</div>
					</div>
					<div class="event">
						<div class="content">
							<div class="summary right aligned">
								- {{ $quote->author->name }}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<button class="circular ui icon button">
				  <i class="heart icon"></i>
				</button>
				<button class="ui circular facebook icon button fb-share-button" data-target="#quote-{{ $quote->id }}">
				  <i class="facebook icon"></i>
				</button>
				<a class="ui circular green icon button whatsapp-share-button" href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share" data-target="#quote-{{ $quote->id }}">
				  <i class="whatsapp icon"></i>
				</a>
				<img class="right floated mini ui image" src="{{ URL::to('assets/images/avatars/'. ($quote->author->avatar)) }}">
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection
@section('body-scripts')
	<script type="text/javascript" src="{{ URL::to('assets/js/home.js') }}"></script>	
@endsection