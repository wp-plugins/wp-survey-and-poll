<?php
$surveys_count = $this->wpdb->get_var("SELECT SUM( `count` ) FROM ".$this->wpdb->prefix."wp_sap_answers");
if ( ! isset( $_COOKIE[ 'wpsurveypollfeedback' ] ) && $surveys_count > 10 ) {
	print('
	<div class="pop-up-screen">
		 <div class="pop-up-content">
			<h3>CONGRATULATIONS!</h3>
			<p>You just reached 100 votes with your surveys. If you like the plugin, please help us and leave 5 stars rating. High ratings makes us motivated to release new features and updates. Thank you in advance. <br>If you have any issues or questions, <a target="_blank" href="https://wordpress.org/support/plugin/wp-survey-and-poll">visit the support forum.</a></p>
			<a class="close_inf button button-default" href="#">Hide this Notice</a>
			<a target="_blank" class="close_inf button button-primary" href="https://wordpress.org/support/view/plugin-reviews/wp-survey-and-poll?rate=5#postform">Leave Rating</a>
		 </div>
	</div>
	<div class="overlay"></div>
	');
}
else {
	print('
	<div class="pop-up-screen">
		 <div class="pop-up-content">
			<h3>Thank you...</h3>
			<p>for downloading this plugin. WP Survey and Poll is a limited version, even you can reach many of custom features. If you really would like to get much more customization options, <br>purchase the <a target="_blank" href="http://pantherius.com/modal-survey">PRO version</a> for only a one-time fee: $27</p>
			<h4>Pro Version Features</h4>
			<ul>
				<li>- Add score or mark answers as correct to <strong>create Quiz</strong>, add <strong>images</strong> to the questions and answers</li>
				<li>- <strong>Unlimited</strong> Questions and Answers, Use <strong>Multiple Instances</strong> on the same page, <strong>Open Text</strong> Answers</li>
				<li>- Display the Results with <strong>Plain Text</strong>, <strong>Progress Bar</strong>, <strong>Line Bar</strong>, <strong>Pie Chart</strong>, <strong>Bar Chart</strong>, <strong>Doughnut Chart</strong>, <strong>Line Chart</strong>, <strong>Polar Chart</strong> and <strong>Radar Chart</strong></li>
				<li>- Export the survey to <strong>PDF</strong>, <strong>XML</strong>, <strong>CSV</strong>, <strong>XLS</strong> and <strong>JSON</strong></li>
				<li>- <strong>Import Survey</strong>, <strong>Duplicate</strong> Survey, Offer link at the end</li>
				<li>- Allows <strong>Multiple Choices</strong> (required and choosable number of answers), Restrict to Logged-in users only</li>
				<li>- Integrated <strong>Shortcode Manager</strong>, add survey or results shortcodes to text <strong>widget</strong></li>
				<li>- <strong>MultiSite Support</strong>, Localizable, Premium <strong>Support and Updates</strong></li>
			</ul>
			<a class="close button button-default" href="#">Use Free Version</a>
			<a class="close button button-primary" href="http://codecanyon.net/item/modal-survey-wordpress-poll-survey-quiz-plugin/6533863?ref=pantherius">Purchase PRO Version - $27</a>
		 </div>
	</div>
	<div class="overlay"></div>
	');
}
?>