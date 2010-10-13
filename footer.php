
			<div class="h6e-simple-footer">

				<div class="search">
					<?php search_form(); ?>
				</div>

				<div id="footer">
					<p><?php printf(__('%1$s is proudly powered by <a href="%2$s">bbPress</a>.'), bb_option('name'), "http://bbpress.org") ?></p>
				</div>

			</div>

		</div>

		<!--
			If you like showing off the fact that your server rocks,
			<h3><?php bb_timer_stop(1); ?> - <?php echo $bbdb->num_queries; ?> queries</h3>
		-->

	</div>

	<?php do_action('bb_foot'); ?>

</body>
</html>
