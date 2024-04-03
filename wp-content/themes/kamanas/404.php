<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kamanas
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title text-center mt-100 mb-100"><?php esc_html_e( 'Упс! страница не найдена, возможно адрес страницы не верный', 'kamanas' ); ?></h1>
			</header><!-- .page-header -->

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
