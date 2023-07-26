<footer class="footer footer-transparent d-print-none">
	<div class="container">
		<div class="row text-center align-items-center flex-row-reverse">
			<div class="col-lg-auto ms-lg-auto">
				<ul class="list-inline list-inline-dots mb-0">
					<li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
					<li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
					<li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
					<li class="list-inline-item">
						<a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
							<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
							<svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
							Sponsor
						</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-lg-auto mt-3 mt-lg-0">
				<ul class="list-inline list-inline-dots mb-0">
					<li class="list-inline-item">
						Copyright © 2021
						<a href="." class="link-secondary">Tabler</a>.
						All rights reserved.
					</li>
					<li class="list-inline-item">
						<a href="./changelog.html" class="link-secondary" rel="noopener">v1.0.0-beta3</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- 在他人复制内容的时候添加页面原始链接 -->
<script>
	function addLink() {
		//Get the selected text and append the extra info
		var selection = window.getSelection(),
			pagelink = '<br /><br /> 原始链接: ' + document.location.href,
			copytext = selection + pagelink,
			newdiv = document.createElement('div');
		//hide the newly created container
		newdiv.style.position = 'absolute';
		newdiv.style.left = '-99999px';
		//insert the container, fill it with the extended text, and define the new selection
		document.body.appendChild(newdiv);
		newdiv.innerHTML = copytext;
		selection.selectAllChildren(newdiv);
		window.setTimeout(function() {
			document.body.removeChild(newdiv);
		}, 100);
}
document.addEventListener('copy', addLink); 
</script>

<?php wp_footer(); ?>

</div>
</div>

</body>
</html>