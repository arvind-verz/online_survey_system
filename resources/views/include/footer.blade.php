<div class="clear"></div>
<!-- Footer -->
<footer class="footer-wrapper">
	<div class="container">
		<div class="inner-container">
			<div class="bottom-steps fleft">
				<div class="step st1 @if($page->slug=='web-design') st-selected @endif @if(Session::get('mydata.web-design') || $page->slug=='thank-you') st-complete @endif"><span>Web Design</span></div>
				<div class="step st2 @if($page->slug=='web-programming') st-selected @endif @if(Session::get('mydata.web-programming') || $page->slug=='thank-you') st-complete @endif"><span>Web<br>
				Programming</span></div>
				<div class="step st3 @if($page->slug=='project-management') st-selected @endif @if(Session::get('mydata.project-management') || $page->slug=='thank-you') st-complete @endif"><span>Project<br>
				Management</span></div>
				<div class="step st4 @if($page->slug=='feedback') st-selected @endif @if(Session::get('mydata.feedback') || $page->slug=='thank-you') st-complete @endif"><span>Feedback</span></div>
			</div>
			<div class="bottom-logo fright"><img src="{{ asset('images/verz-logo.png') }}" alt="Verz Design" /></div>
			<div class="clear"></div>
		</div>
	</div>
</footer>
<script type="text/javascript">
	$(document).ready(function() {
		$("div.area-buttons button").on("click", function() {
			$("div.comment-box textarea").text($(this).text());
		});

		$("button.not_applicable").on("click", function() {
			$("input[name='r1']").attr("checked", false);
		});

		var slug = '{{ $page->slug }}';
		var survey_id = '{{ $survey_id }}';
		var slug_array = ['web-design', 'web-programming', 'project-management', 'feedback', 'thank-you'];
		slug_array.reverse();
		$("button.back_window_load").on("click", function(e) {
			if(slug==slug_array[slug_array.length-1]) {
				e.preventDefault();
			}
			else {
				window.location.href = '<?php echo url('/'); ?>/'+survey_id+'/'+(slug_array[slug_array.indexOf(slug)+1]);
			}
		});

		var myscore = '{{ Session::get('mydata.' . $page->slug)['score'] }}';
		var mycomment = '{{ Session::get('mydata.' . $page->slug)['comment'] }}';

		$("input[id='r"+myscore+"']").attr("checked", true);
		$("body div.comment-box textarea").text(mycomment);
	});
	
</script>