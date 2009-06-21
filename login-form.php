<div class="user-info">
		<?php
		printf(
			__('<a href="%1$s">Register</a> | <a href="%2$s">Sign In</a>'),
			bb_get_uri('register.php', null, BB_URI_CONTEXT_A_HREF + BB_URI_CONTEXT_BB_USER_FORMS),
			bb_get_uri('bb-login.php', null, BB_URI_CONTEXT_FORM_ACTION + BB_URI_CONTEXT_BB_USER_FORMS)
		); ?>
</div>
