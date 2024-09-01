<?php
/**
 * Custom Header file for Group C (Bootstrap + Font Awesome)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="custom-header border-bottom bg-light py-4" style="background-color: #f8f9fa !important;">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Left: Logo + Home + Search -->
        <div class="d-flex align-items-center gap-4 flex-grow-1">

            <!-- Logo -->
            <div class="fw-bold" style="font-size: 1.8rem;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none text-dark">Group C</a>
            </div>

            <!-- Home -->
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary px-4 py-2" style="font-size: 1.1rem; font-weight: 500;">Home</a>
            </div>

            <!-- Search form -->
            <form role="search" method="get" class="d-flex ms-3" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" name="s" class="form-control" placeholder="Search" style="width: 200px; height: 45px; font-size: 1rem;" />
                <button type="submit" class="btn btn-outline-secondary ms-2 px-4" style="height: 45px; font-size: 1rem;">Submit</button>
            </form>
        </div>

        <!-- Center: Menu -->
        <nav class="mx-5">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'main-menu d-flex list-unstyled mb-0 gap-5',
                'container'      => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'link_before'    => '<span style="font-size: 1.2rem; font-weight: 500;">',
                'link_after'     => '</span>',
            ));
            ?>
        </nav>

        <!-- Right: Icons -->
        <div class="d-flex align-items-center gap-4">
            <!-- Menu -->
            <button class="btn btn-link text-dark d-flex flex-column align-items-center" style="padding: 8px 12px;">
                <i class="fa-solid fa-ellipsis" style="font-size: 1.5rem;"></i>
                <small style="font-size: 0.9rem; margin-top: 4px;">Menu</small>
            </button>

            <!-- Search -->
            <button class="btn btn-link text-dark d-flex flex-column align-items-center" style="padding: 8px 12px;">
                <i class="fa-solid fa-magnifying-glass" style="font-size: 1.5rem;"></i>
                <small style="font-size: 0.9rem; margin-top: 4px;">Search</small>
            </button>

            <!-- Account Dropdown -->
            <div class="dropdown">
                <button class="btn btn-link text-dark dropdown-toggle d-flex flex-column align-items-center" data-bs-toggle="dropdown" style="padding: 8px 12px;">
                    <i class="fa-solid fa-user-circle" style="font-size: 1.5rem;"></i>
                    <small style="font-size: 0.9rem; margin-top: 4px;">Account</small>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
