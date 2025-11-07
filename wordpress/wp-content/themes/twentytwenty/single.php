<?php
/**
 * Custom Single Post Template (Group C)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */

get_header();
?>

<style>
/* ===============================
   CUSTOM SINGLE POST PAGE
   =============================== */
.single-layout {
    background-color: #f9f9f9;
    padding: 60px 0;
    font-family: "Segoe UI", sans-serif;
}
.post-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    padding: 30px;
}

/* ===============================
   LEFT SIDEBAR (CATEGORIES)
   =============================== */
.sidebar-left {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    padding: 20px;
}
.sidebar-left h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
}

/* ===============================
   RIGHT SIDEBAR (RECENT POSTS)
   =============================== */
.sidebar-right {
    background: #44b8ac;
    border-radius: 10px;
    color: #fff;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-right h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
}
.sidebar-right a {
    color: #fff;
    text-decoration: none;
}
.sidebar-right a:hover {
    text-decoration: underline;
}

/* ===============================
   POST DETAIL
   =============================== */
.post-title {
    font-size: 28px;
    font-weight: bold;
    color: #222;
    margin-bottom: 10px;
}
.post-meta {
    color: #777;
    font-size: 14px;
    margin-bottom: 20px;
}
.post-content {
    font-size: 17px;
    color: #444;
    line-height: 1.7;
}

/* ===============================
   PREV / NEXT POSTS (mẫu thầy)
   =============================== */
.custom-prev-next {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.date-box {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    width: 55px;
    height: 55px;
    text-align: center;
    line-height: 1.2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-weight: bold;
    font-size: 15px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.date-box span {
    font-size: 11px;
    color: #888;
}
.title-link {
    text-decoration: none;
    font-size: 16px;
    color: #222;
    font-weight: 500;
}
.title-link:hover {
    color: #007bff;
    text-decoration: underline;
}
.custom-prev-next .d-flex:hover {
    background: #f8f9fa;
    transition: 0.3s ease;
    border-radius: 5px;
    padding-left: 5px;
}

/* ===============================
   COMMENT SECTION
   =============================== */
.comment-section {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.comment-section h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}

/* ===============================
   CUSTOM COMMENT AREA - CARD STYLE
   =============================== */
.comment-section .comment-area {
    background: #f5f5f5 !important;
    max-width: 100% !important;
    margin: 0 auto !important;
    padding: 30px !important;
    font-family: "Segoe UI", sans-serif !important;
    border-radius: 10px !important;
}

.comment-section .comment-area h3 {
    font-size: 20px !important;
    font-weight: 600 !important;
    color: #333 !important;
    margin-bottom: 25px !important;
}

.comment-section .comment-list {
    list-style: none !important;
    padding: 0 !important;
    margin-top: 30px !important;
}

.comment-section .comment-list li {
    margin-bottom: 20px !important;
    padding: 0 !important;
}

.comment-section .comment-body,
.comment-section li .comment-body {
    background: #f0f0f0 !important;
    border-radius: 8px !important;
    padding: 15px 20px !important;
    margin-bottom: 15px !important;
    display: block !important;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1) !important;
    position: relative !important;
}

.comment-section .comment-meta,
.comment-section li .comment-meta {
    display: block !important;
    margin-bottom: 8px !important;
    padding-left: 65px !important;
    min-height: 50px !important;
    position: relative !important;
    line-height: 1.4 !important;
}

.comment-section .comment-author .avatar,
.comment-section .comment-meta .avatar,
.comment-section li .comment-author .avatar,
.comment-section li .comment-meta .avatar {
    width: 50px !important;
    height: 50px !important;
    border-radius: 4px !important;
    position: absolute !important;
    left: 0 !important;
    top: 0 !important;
    display: block !important;
    margin: 0 !important;
}

.comment-section .comment-author,
.comment-section li .comment-author {
    font-weight: 700 !important;
    font-size: 15px !important;
    color: #333 !important;
    margin-bottom: 0 !important;
    display: block !important;
    line-height: 1.4 !important;
    position: relative !important;
}

.comment-section .comment-author .fn,
.comment-section li .comment-author .fn {
    font-weight: 700 !important;
    color: #333 !important;
    display: inline !important;
}

.comment-section .comment-author .says,
.comment-section li .comment-author .says {
    display: none !important;
}

.comment-section .comment-metadata,
.comment-section li .comment-metadata {
    display: none !important;
}

.comment-section .comment-content,
.comment-section li .comment-content {
    font-size: 14px !important;
    color: #555 !important;
    line-height: 1.6 !important;
    margin-top: 0 !important;
    padding-left: 65px !important;
    padding-top: 0 !important;
}

.comment-section .comment-footer-meta,
.comment-section li .comment-footer-meta {
    display: none !important;
}

/* Ẩn nút Reply màu đỏ */
.comment-section .comment-reply-link,
.comment-section .comment-reply,
.comment-section a.comment-reply-link,
.comment-section li .comment-reply-link,
.comment-section li .comment-reply,
.comment-section .comment-body .comment-reply-link,
.comment-section .comment-body .comment-reply,
.comment-section .comment-body a.comment-reply-link,
.comment-section li .comment-body .comment-reply-link,
.comment-section li .comment-body .comment-reply,
.comment-section .comment-footer-meta .comment-reply-link,
.comment-section .comment-footer-meta .comment-reply,
.comment-section .comment-footer-meta a.comment-reply-link {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
    height: 0 !important;
    width: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
}

.comment-section .comment-form textarea {
    width: 100% !important;
    border: 1px solid #ccc !important;
    border-radius: 6px !important;
    padding: 12px !important;
    font-size: 15px !important;
    resize: none !important;
    height: 120px !important;
    background: #fafafa !important;
    transition: all 0.2s ease !important;
}

.comment-section .comment-form textarea:focus {
    background: #fff !important;
    border-color: #007bff !important;
    outline: none !important;
}

.comment-section .comment-form input[type="submit"] {
    background-color: #007bff !important;
    color: #fff !important;
    border: none !important;
    padding: 10px 25px !important;
    border-radius: 6px !important;
    font-size: 15px !important;
    cursor: pointer !important;
    margin-top: 10px !important;
}

.comment-section .comment-form input[type="submit"]:hover {
    background-color: #0056b3 !important;
}
</style>

<section class="single-layout">
    <div class="container">
        <div class="row gy-4">
            
            <!-- ==========================
                 LEFT SIDEBAR - Categories
                 ========================== -->
            <div class="col-md-3">
                <div class="sidebar-left">
                    <h5>Categories</h5>
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    <?php else : ?>
                        <p class="text-muted">No categories available.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- ==========================
                 MAIN CONTENT - Detail Post
                 ========================== -->
            <div class="col-md-6">
                <div class="post-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <div class="post-meta">
                            Đăng ngày: <?php echo get_the_date('d/m/Y'); ?> | Tác giả: <?php the_author(); ?>
                        </div>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>

                        <!-- ==========================
                             PREV / NEXT POSTS (Mẫu thầy)
                             ========================== -->
                        <div class="custom-prev-next">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>

                            <?php if ($prev_post): ?>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $prev_post); ?></strong>
                                        <span><?php echo get_the_date('m', $prev_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="title-link">
                                        <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($next_post): ?>
                                <div class="d-flex align-items-center">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $next_post); ?></strong>
                                        <span><?php echo get_the_date('m', $next_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="title-link">
                                        <?php echo get_the_title($next_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- COMMENTS -->
                        <div class="comment-section">
                            <?php comments_template(); ?>
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>

            <!-- ==========================
                 RIGHT SIDEBAR - Recent Posts
                 ========================== -->
            <div class="col-md-3">
                <div class="sidebar-right">
                    <h5>Recent Posts</h5>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3,
                        'post_status' => 'publish'
                    ));
                    if ( !empty($recent_posts) ) :
                        foreach ( $recent_posts as $post ) : ?>
                            <div class="d-flex align-items-start mb-3">
                                <div class="recent-date text-center me-3 bg-white text-dark rounded px-2 py-1" style="min-width: 50px; font-size: 12px; line-height: 1.2;">
                                    <strong><?php echo get_the_date('d', $post['ID']); ?></strong><br>
                                    <span style="font-size: 10px;">/ <?php echo get_the_date('y', $post['ID']); ?> <?php echo get_the_date('m', $post['ID']); ?></span>
                                </div>
                                <a href="<?php echo get_permalink($post['ID']); ?>" class="flex-grow-1 text-white text-decoration-none" style="font-size: 14px; line-height: 1.4;">
                                    <?php echo esc_html($post['post_title']); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-4">
                            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-light text-uppercase fw-bold" style="background-color: #2a9d8f; border: none; color: white; padding: 10px 20px; font-size: 14px;">
                                XEM TẤT CẢ TIN TỨC
                            </a>
                        </div>
                    <?php else : ?>
                        <p>Chưa có bài viết nào.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
