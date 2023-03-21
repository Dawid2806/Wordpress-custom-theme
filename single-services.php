<?php get_header() ?>

<?php
// pobieramy tytuł bieżącego posta
$post_title = get_the_title();

// wyświetlamy tytuł posta i zawartość opisową w divie o klasie "service-content"
echo '<div class="service-content">';
echo '<h2>' . $post_title . '</h2>';
echo '<p>' . get_the_content() . '</p>';
echo '</div>';
?>

<?php get_footer() ?>