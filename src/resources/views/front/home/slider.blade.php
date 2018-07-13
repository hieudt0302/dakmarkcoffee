<!-- Revolution slider area-->
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="homepage" data-source="gallery" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;">
	<!-- START REVOLUTION SLIDER 5.3.0.1 fullwidth mode -->
	<div id="rev_slider_1_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;" data-version="5.3.0.1">
		<ul>
			@foreach($sliders as $slider)
			<!-- SLIDE  -->
			<li data-index="rs-1{{$slider->id}}" data-transition="random" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="{{asset('/storage/'.$slider->image) }}" alt="" title="Tay-Nguyen" width="1800" height="1149" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 -->
				<div class="tp-caption verylargetext-x   tp-resizeme" id="slide-{{$slider->id}}-layer-1"  data-x="center" data-hoffset="1" data-y="450" data-width="auto" data-height="auto" data-type="text" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['','','','']" style="z-index: 5; white-space: nowrap; color: rgba(255, 255, 255, 1.00);text-transform:left;border-color:rgba(255, 255, 255, 1.00);">
					<table style="border-color: #ffffff;" border="2px" cellpadding="5px">
						<tbody>
						<tr>
							<td>
								<h2><span style="boder-radius: 2px; font-size: 32pt; font-weight: 300; color: #fff;">{{$slider->translation->description}}</span></h2>
							</td>
						</tr>
						</tbody>
					</table>
				</div>			
			</li>
			@endforeach
		</ul>
		<div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>
	</div>
</div>