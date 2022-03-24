<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog Site Template</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/logo.png">

	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Theme CSS -->
	<?php
    wp_head()
    ?>

</head>

<body>
	<div class="main">
		<header class="page-title theme-bg-light text-center gradient py-5">
        <img src="wp-content/themes/thema_wesselvandenijssel/assets/images/Header.png">
		</header>
		<article class="content px-3 py-5 p-md-5">
			<div class="container">
				<header class="content-header">
					<div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="tag"><i class='fa fa-tag'></i> tag</span><span class="tag"><i class='fa fa-tag'></i> category</span><span class="comment"><a href="#comments"><i class='fa fa-comment'></i> 3 comments</a></span></div>
				</header>

				<div class="content-body">
					<figure class="blog-banner">
						<a href="#"><img class="img-fluid" src="images/blog-post-banner.jpg" alt="image"></a>
						<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="#" target="_blank">URL
								Here</a></figcaption>
					</figure>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
						quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
						rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
						Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
						tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>


					<h3 class="mt-5 mb-3">Typography</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus.</p>
					<h5 class="my-3">Bullet Points:</h5>
					<ul class="mb-5">
						<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
						<li class="mb-2">Aenean commodo ligula eget dolor.</li>
						<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
					</ul>
					<ol class="mb-5">
						<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
						<li class="mb-2">Aenean commodo ligula eget dolor.</li>
						<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
					</ol>
					<h5 class="my-3">Quote Example:</h5>
					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-2">You might not think that programmers are artists, but programming is an
							extremely creative profession. It's logic-based creativity.</p>
						<footer class="blockquote-footer">John Romero</footer>
					</blockquote>

					<h5 class="my-3">Table Example:</h5>
					<table class="table table-striped my-5">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>


					<h3 class="mt-5 mb-3">Video Example</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
						quis enim. </p>

					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/SPFDLHNm5KQ" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>

				</div>

				<nav class="blog-nav nav nav-justified my-5">
					<a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i
							class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					<a class="nav-link-next nav-item nav-link rounded-right" href="page.html">Next<i
							class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				<hr>
				<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
								3 replies on “Hello world!” </h2><!-- .comments-title -->

						</div><!-- .comments-header -->

						<div class="comments-inner">

							<div id="comment-1" class="comment even thread-even depth-1 parent">
								<article id="div-comment-1" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<a href="https://wordpress.org/" rel="external nofollow" class="url"><img
													alt=""
													src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;d=mm&amp;r=g"
													class="avatar avatar-120 photo" height="120" width="120"><span
													class="fn">A WordPress Commenter</span><span
													class="says sr-only">says:</span></a> </div>
										<!-- .comment-author -->

										<div class="comment-metadata">
											<a href="http://wordpress.mac/?p=1#comment-1">
												<time datetime="2020-03-25T20:07:51+00:00"
													title="March 25, 2020 at 8:07 pm">
													March 25, 2020 at 8:07 pm </time>
											</a>
											
										</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

									<div class="comment-content entry-content">

										<p>Hi, this is a comment.<br>
											To get started with moderating, editing, and deleting comments, please visit
											the Comments screen in the dashboard.<br>
											Commenter avatars come from <a href="https://gravatar.com">Gravatar</a>.</p>

									</div><!-- .comment-content -->


									<footer class="comment-footer-meta">

										<span class="comment-reply"><a rel="nofollow"
												class="do-not-scroll comment-reply-link"
												href="http://wordpress.mac/?p=1&amp;replytocom=1#respond"
												data-commentid="1" data-postid="1" data-belowelement="div-comment-1"
												data-respondelement="respond"
												aria-label="Reply to A WordPress Commenter">Reply</a></span>
									</footer>


								</article><!-- .comment-body -->

								<div id="comment-2"
									class="comment byuser comment-author-andrew bypostauthor odd alt depth-2">
									<article id="div-comment-2" class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img alt=""
													src="http://2.gravatar.com/avatar/e297925dbb035adc0b67aa14da4dcc0a?s=120&amp;d=mm&amp;r=g"
													class="avatar avatar-120 photo" height="120" width="120"><span
													class="fn">andrew</span><span
													class="says sr-only">says:</span> </div>
											<!-- .comment-author -->

											<div class="comment-metadata">
												<a href="http://wordpress.mac/?p=1#comment-2">
													<time datetime="2020-03-25T20:08:58+00:00"
														title="March 25, 2020 at 8:08 pm">
														March 25, 2020 at 8:08 pm </time>
												</a>												
											</div><!-- .comment-metadata -->

										</footer><!-- .comment-meta -->

										<div class="comment-content entry-content">

											<p>test reply</p>

										</div><!-- .comment-content -->


										<footer class="comment-footer-meta">

											<span class="comment-reply"><a rel="nofollow"
													class="do-not-scroll comment-reply-link"
													href="http://wordpress.mac/?p=1&amp;replytocom=2#respond"
													data-commentid="2" data-postid="1" data-belowelement="div-comment-2"
													data-respondelement="respond"
													aria-label="Reply to andrew">Reply</a></span><span
												class="by-post-author">By Post Author</span>
										</footer>


									</article><!-- .comment-body -->

								</div><!-- #comment-## -->
							</div><!-- #comment-## -->
							<div id="comment-3"
								class="comment byuser comment-author-andrew bypostauthor even thread-odd thread-alt depth-1">
								<article id="div-comment-3" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<img alt=""
												src="http://2.gravatar.com/avatar/e297925dbb035adc0b67aa14da4dcc0a?s=120&amp;d=mm&amp;r=g"
												class="avatar avatar-120 photo" height="120" width="120"><span
												class="fn">andrew</span><span
												class="says sr-only">says:</span> </div>
										<!-- .comment-author -->

										<div class="comment-metadata">
											<a href="http://wordpress.mac/?p=1#comment-3">
												<time datetime="2020-03-25T20:09:31+00:00"
													title="March 25, 2020 at 8:09 pm">
													March 25, 2020 at 8:09 pm </time>
											</a>
											<span aria-hidden="true">•</span>
										</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

									<div class="comment-content entry-content">

										<p>Comment</p>

									</div><!-- .comment-content -->


									<footer class="comment-footer-meta">

										<span class="comment-reply"><a rel="nofollow"
												class="do-not-scroll comment-reply-link"
												href="http://wordpress.mac/?p=1&amp;replytocom=3#respond"
												data-commentid="3" data-postid="1" data-belowelement="div-comment-3"
												data-respondelement="respond"
												aria-label="Reply to andrew">Reply</a></span><span
											class="by-post-author">By Post Author</span>
									</footer>


								</article><!-- .comment-body -->

							</div><!-- #comment-## -->

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
					<div id="respond" class="comment-respond">
						<h2 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
									id="cancel-comment-reply-link" href="/?p=1#respond" style="display:none;">Cancel
									reply</a></small></h2>
					</div><!-- #respond -->

				</div>

			</div>
			<!--//container-->
		</article>




		<footer class="footer text-center py-2 theme-bg-dark">

			<p class="copyright"><a href="https://youtube.com/FollowAndrew">FollowAndrew</a></p>

		</footer>

	</div>
	<!--//main-wrapper-->


	<!-- Bootstrap Javascript -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script src="js/main.js"></script>

</body>

</html>