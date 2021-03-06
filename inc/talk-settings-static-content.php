<?php
/**
 * Prints static content for Talk Settings page
 *
 * @package Talk_Plugin
 */

?>
<p>
	<?php printf(
		esc_html__( 'You can find out how to install and manage Coral %shere%s.', 'coral-project-talk' ),
		'<a href="https://docs.coralproject.net/talk/">',
		'</a>'
	); ?>
</p>
<p>
	<?php printf(
		esc_html__( 'Coral is an open source product brought to you by The Coral Project. Find out more about Coral and the tools we build %shere%s.', 'coral-project-talk' ),
		'<a href="https://coralproject.net">',
		'</a>'
	); ?>
</p>

<h2><?php esc_html_e( 'Coral Settings', 'coral-project-talk' ); ?></h2>
<p>
	<?php printf(
		esc_html__( 'Questions/feedback? Reach out to us on %sTwitter%s or join our %sCommunity%s.', 'coral-project-talk' ),
		'<a href="https://twitter.com/coralproject">',
		'</a>',
		'<a href="https://community.coralproject.net/">',
		'</a>'
	); ?>
</p>
<p>
	<?php printf(
		esc_html__( 'You are using version %s of the Coral WordPress Plugin. View the code, documentation, and latest releases %shere%s.', 'coral-project-talk' ),
		esc_html( get_plugin_data( CORAL_PROJECT_TALK_DIR . '/talk.php' )['Version'] ),
		'<a href="https://github.com/coralproject/talk-wp-plugin">',
		'</a>'
	); ?>
</p>
