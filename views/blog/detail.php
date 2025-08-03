<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 30 July 2019, 05:02 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
?>

<div class="blog-post blog-md date-style-1 blog-list-1 clearfix  m-b60 bg-white">
	<div class="wt-post-media wt-img-effect zoom-slow">
		<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/default/thum1.jpg" alt=""></a>
	</div>
	<div class="wt-post-info  bg-white">
		<div class="wt-post-meta ">
			<ul>
				<li class="post-category bg-primary">Ford News</li>
				<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
				<li class="post-date">March 9, 2019</li>
			</ul>
		</div>
		<div class="wt-post-title ">
			<h4 class="post-title">Can i Modify Once my request once its submitted</h4>
		</div>
		<div class="wt-post-text">
			<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit. Dicat harum posidonium cum cu. Ut quo atomorum petentium suscipiantur. Cu vel integre democritum suscipiantur. Nobis percipit pertinacia nam in. In alienum luptatum aliquando sit, fugit mentitum gubergren nam at, ad his illum nulla contentiones. Odio modo tritani te pro, vim ea eros animal. Ei lucilius expetendis cotidieque qui, duo at augue dictas suscipiantur.</p>
			<p>Facilisi perpetua at sed. Eam purto mollis eruditi te. Illud nulla tritani at usu, magna noster omnesque an per, an eos unum placerat. Est in scripta eruditi auto service shop wordpress theme. Ad posse homero perpetua mei, meis pertinax ut sit. Tibique inimicus imperdiet vix id, quod ornatus dissentias an pri. Pertinax iracundia temporibus nec at, sea id zril epicurei. Ea sint reformidans usu. Per munere definitiones ne.</p>
		</div>
		<blockquote>
			<i class="fa fa-quote-left font-20"></i>
			<p>Who do not know how to pursue pleasure rationally encounters consequences that are extremely painful nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
			</p>
			<div class="p-t15 text-uppercase">
				<strong>William Jomurray</strong>
				<span>Envato Author</span>
			</div>

		</blockquote>
		<h4>Check your car regularly and stay safe.</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<ul class="list-angle-right">
			<li>Wheel Alignments Check</li>
			<li>Fluid Level Checks</li>
			<li>Brake and Tyres Checks</li>
			<li>Genuine Spare Parts</li>
			<li>Safty checks</li>
			<li>interim services</li>
		</ul>
	</div>
</div>

<div class="clear" id="comment-list">
	<div class="comments-area" id="comments">
		<h2 class="comments-title">4 Comments</h2>
		<div class="p-tb30">
			<!-- COMMENT LIST START -->
			<ol class="comment-list">
				<li class="comment">
					<!-- COMMENT BLOCK -->
					<div class="comment-body bg-gray">
						<div class="comment-author vcard">
							<img class="avatar photo" src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
							<cite class="fn">Diego</cite>
							<span class="says">says:</span>
						</div>
						<div class="comment-meta">
							<a href="javascript:void(0);">20 March, 2019 at 7:15 am</a>
						</div>

						<p>Cras diam dolor, ultricies a feugiat ullamcorper, porttitor eu dolor. Curabitur viverra sem sed facilisis ullamcorper. Quisque quam dui, fringilla sed ex eleifend, laoreet lacinia metus. Donec vehicula nisi id finibus interdum. Nulla facilisi. Morbi sed cursus erat.</p>
						<div class="reply">
							<a href="javscript:;" class="comment-reply-link">Read More</a>
						</div>
					</div>
					<!-- SUB COMMENT BLOCK -->
					<ol class="children">
						<li class="comment odd parent">

							<div class="comment-body bg-gray">
								<div class="comment-author vcard">
									<img class="avatar photo" src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic3.jpg" alt="">
									<cite class="fn">Brayden</cite>
									<span class="says">says:</span>
								</div>
								<div class="comment-meta">
									<a href="javascript:void(0);">20 March, 2019 at 9:15 am</a>
								</div>
								<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p>
								<div class="reply">
									<a href="javscript:;" class="comment-reply-link">Read More</a>
								</div>

							</div>

							<ol class="children">
								<li class="comment odd parent">
									<div class="comment-body bg-gray">
										<div class="comment-author vcard">
											<img class="avatar photo" src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
											<cite class="fn">Diego</cite>
											<span class="says">says:</span>
										</div>
										<div class="comment-meta">
											<a href="javascript:void(0);">20 March, 2019 at 11:15 am</a>
										</div>
										<p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh..</p>
										<div class="reply">
											<a href="javscript:;" class="comment-reply-link">Read More</a>
										</div>

									</div>
								</li>
							</ol>

						</li>
					</ol>
				</li>
				<li class="comment">
					<!-- COMMENT BLOCK -->
					<div class="comment-body bg-gray">
						<div class="comment-author vcard">
							<img class="avatar photo" src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
							<cite class="fn">Stacy poe</cite>
							<span class="says">says:</span>
						</div>
						<div class="comment-meta">
							<a href="javascript:void(0);">20 March, 2019 at 7:15 am</a>
						</div>
						<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p>
						<div class="reply">
							<a href="javscript:;" class="comment-reply-link">Read More</a>
						</div>
					</div>
				</li>
			</ol>
			<!-- COMMENT LIST END -->

			<!-- LEAVE A REPLY START -->
			<div class="comment-respond m-t30 p-a20 bg-gray" id="respond">
				<h2 class="comment-reply-title" id="reply-title">Leave a Comments
					<small>
						<a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
					</small>
				</h2>

				<form class="comment-form" id="commentform" method="post">
					<p class="comment-form-author">
						<label for="author">Name <span class="required">*</span></label>
						<input class="form-control" type="text" value="" name="user-comment" placeholder="Author" id="author">
					</p>

					<p class="comment-form-email">
						<label for="email">Email <span class="required">*</span></label>
						<input class="form-control" type="text" value="" name="email" placeholder="Email" id="email">
					</p>

					<p class="comment-form-url">
						<label for="url">Website</label>
						<input class="form-control" type="text" value="" name="url" placeholder="Website" id="url">
					</p>

					<p class="comment-form-comment">
						<label for="comment">Comment</label>
						<textarea class="form-control" rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
					</p>

					<p class="form-submit">
						<button class="site-button site-btn-effect radius-no text-uppercase font-weight-600" type="button">Submit</button>
					</p>
				</form>
			</div>
			<!-- LEAVE A REPLY END -->
		</div>
	</div>
</div>