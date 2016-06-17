@extends('layouts.default')
@section('title')
Home
@endsection
@section('content')
<div class="v-spacer-2">&nbsp;</div>
<div class="ui one column grid">
	<div class="ui right aligned secondary menu wd-100pc">
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
<div class="ui centered grid">
	@foreach($quotes as $quote)
	<div class="four wide computer six wide tablet twelve wide mobile column">
		<div class="ui card wd-100pc {{ array("red", "orange", "yellow", "olive", "green", "teal", "blue", "violet", "purple", "pink", "brown", "grey", "black")[rand(0, 12)] }}">
			<div class="content">
				<div class="ui small feed">
					<div class="v-spacer-0-25"></div>
					<div class="event">
						<div class="content">
							<div class="font-1-2 min-ht-100px">
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