<footer class="clear">
	<p>
		<span><?php esc_attr_e('Copyright ©', 'preference-lite'); ?> <?php esc_attr_e(date('Y')); ?> <a href="//www.yiqiread.com"><?php echo bloginfo('name') ?></a> <?php esc_attr_e(' All rights reserved.', 'preference-lite'); ?></span>
	</p>
	<p>
		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502001275">
			<img src="https://imgservices-1252317822.image.myqcloud.com/image/20191223/o5lajshfcw.png">
			<span>沪公网安备 31011502001275号</span>
		</a>
		<span>增值电信业务经营许可证：沪B2-20080046 互联网ICP备案号：</span>
		<a href="http://beian.miit.gov.cn" target="_blank">沪B2-20080046-1</a>
		<span>&nbsp;出版经营许可证：新出发沪批字第 U3718 号</span>
	</p>
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

</body>
</html>