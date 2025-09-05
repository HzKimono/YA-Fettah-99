<?php
/**
 * Admin sidebar template.
 *
 * @package BlitzDock
 * @since 0.3.0
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$tabs = array(
    'dashboard' => __( 'Dashboard', 'blitz-dock' ),
    'channels'  => __( 'Channels', 'blitz-dock' ),
    'analytics' => __( 'Analytics', 'blitz-dock' ),
);
?>
<nav class="blitz-dock-nav" aria-label="<?php esc_attr_e( 'Blitz Dock navigation', 'blitz-dock' ); ?>">
    <ul>
        <?php foreach ( $tabs as $slug => $label ) :
            $url    = admin_url( 'admin.php?page=' . \BlitzDock\Core\Plugin::SLUG . '&tab=' . $slug );
            $active = ( $slug === $active_tab );
            ?>
            <li>
                <a href="<?php echo esc_url( $url ); ?>"<?php echo $active ? ' class="active" aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>