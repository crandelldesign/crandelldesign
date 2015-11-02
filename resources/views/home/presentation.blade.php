@extends('master.templates.simple', array('var1'=>'', 'var2'=>''))
@section('body')
<div class="wallpaper-slideshow">
	<div style="{{isset($special_wallpaper1)?'background-image:url('.$special_wallpaper1.')':''}}"></div>
	<div style="{{isset($special_wallpaper2)?'background-image:url('.$special_wallpaper2.')':''}}"></div>
	<div style="{{isset($special_wallpaper3)?'background-image:url('.$special_wallpaper3.')':''}}"></div>
</div>
<div id="presentation" class="presentation-container">
	<div class="page">
		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner" role="listbox">
				<?php $i = 0; ?>
                @foreach($assets as $asset)
					<div class="item {{($i++ == 0)?'active':''}}">
                       <img @if($asset->path_2x) srcset="{{url('/').$asset->path_2x}} 2x" @endif src="{{url('/').$asset->path}}" alt="{{$asset->short_description}}" class="img-responsive center-block" />
                    </div>
				@endforeach
            </div>
		</div>
	</div>
</div>
@stop