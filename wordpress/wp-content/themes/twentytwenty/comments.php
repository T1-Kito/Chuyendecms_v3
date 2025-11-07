<?php
/**
 * Custom Comment Template (Group C)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/* Nếu bài viết có mật khẩu mà chưa nhập thì không hiển thị comment */
if (post_password_required()) {
    return;
}
?>

<style>
/* ===============================
   CUSTOM COMMENT AREA - CARD STYLE
   =============================== */
.comment-area {
    background: #f5f5f5 !important;
    max-width: 900px !important;
    margin: 60px auto !important;
    padding: 30px !important;
    font-family: "Segoe UI", sans-serif !important;
}

.comment-area h3 {
    font-size: 20px !important;
    font-weight: 600 !important;
    color: #333 !important;
    margin-bottom: 25px !important;
}

.comment-form textarea {
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

.comment-form textarea:focus {
    background: #fff !important;
    border-color: #007bff !important;
    outline: none !important;
}

.comment-form input[type="submit"] {
    background-color: #007bff !important;
    color: #fff !important;
    border: none !important;
    padding: 10px 25px !important;
    border-radius: 6px !important;
    font-size: 15px !important;
    cursor: pointer !important;
    margin-top: 10px !important;
}

.comment-form input[type="submit"]:hover {
    background-color: #0056b3 !important;
}

/* Nếu chưa đăng nhập */
.comment-login-message {
    text-align: center !important;
    font-size: 16px !important;
    color: #777 !important;
    padding: 40px !important;
    background: #fafafa !important;
    border-radius: 8px !important;
    margin: 40px auto !important;
    border: 1px dashed #ccc !important;
}

/* Danh sách bình luận - Card Style */
.comment-list {
    list-style: none !important;
    padding: 0 !important;
    margin-top: 30px !important;
}

.comment-list li {
    margin-bottom: 20px !important;
    padding: 0 !important;
}

/* Card container cho mỗi comment */
.comment-area .comment-body,
.comment-area li .comment-body {
    background: #f0f0f0 !important;
    border-radius: 8px !important;
    padding: 15px 20px !important;
    margin-bottom: 15px !important;
    display: block !important;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1) !important;
    position: relative !important;
}

/* Comment meta - chứa avatar và tên */
.comment-area .comment-meta,
.comment-area li .comment-meta {
    display: block !important;
    margin-bottom: 8px !important;
    padding-left: 65px !important;
    min-height: 50px !important;
    position: relative !important;
    line-height: 1.4 !important;
}

/* Avatar bên trái */
.comment-area .comment-author .avatar,
.comment-area .comment-meta .avatar,
.comment-area li .comment-author .avatar,
.comment-area li .comment-meta .avatar {
    width: 50px !important;
    height: 50px !important;
    border-radius: 4px !important;
    position: absolute !important;
    left: 0 !important;
    top: 0 !important;
    display: block !important;
    margin: 0 !important;
}

/* Comment author - chỉ hiển thị tên */
.comment-area .comment-author,
.comment-area li .comment-author {
    font-weight: 700 !important;
    font-size: 15px !important;
    color: #333 !important;
    margin-bottom: 0 !important;
    display: block !important;
    line-height: 1.4 !important;
    position: relative !important;
}

.comment-area .comment-author .fn,
.comment-area li .comment-author .fn {
    font-weight: 700 !important;
    color: #333 !important;
    display: inline !important;
}

.comment-area .comment-author .says,
.comment-area li .comment-author .says {
    display: none !important;
}

.comment-area .comment-author a,
.comment-area li .comment-author a {
    text-decoration: none !important;
    color: #333 !important;
}

.comment-area .comment-author a:hover,
.comment-area .comment-author a:focus,
.comment-area li .comment-author a:hover,
.comment-area li .comment-author a:focus {
    text-decoration: none !important;
}

/* Ẩn metadata (timestamp, edit) */
.comment-area .comment-metadata,
.comment-area li .comment-metadata {
    display: none !important;
}

/* Nội dung comment */
.comment-area .comment-content,
.comment-area li .comment-content {
    font-size: 14px !important;
    color: #555 !important;
    line-height: 1.6 !important;
    margin-top: 0 !important;
    padding-left: 65px !important;
    padding-top: 0 !important;
}

.comment-area .comment-content p,
.comment-area li .comment-content p {
    margin: 0 0 8px 0 !important;
}

.comment-area .comment-content p:last-child,
.comment-area li .comment-content p:last-child {
    margin-bottom: 0 !important;
}

/* Ẩn footer (reply button) */
.comment-area .comment-footer-meta,
.comment-area li .comment-footer-meta {
    display: none !important;
}

/* Ẩn nút Reply màu đỏ */
.comment-area .comment-reply-link,
.comment-area .comment-reply,
.comment-area a.comment-reply-link,
.comment-area li .comment-reply-link,
.comment-area li .comment-reply,
.comment-area .comment-body .comment-reply-link,
.comment-area .comment-body .comment-reply,
.comment-area .comment-body a.comment-reply-link,
.comment-area li .comment-body .comment-reply-link,
.comment-area li .comment-body .comment-reply,
.comment-area .comment-footer-meta .comment-reply-link,
.comment-area .comment-footer-meta .comment-reply,
.comment-area .comment-footer-meta a.comment-reply-link {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
    height: 0 !important;
    width: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
}

/* Responsive */
@media (max-width: 768px) {
    .comment-area {
        padding: 20px !important;
    }
    
    .comment-area .comment-body {
        padding: 12px 15px !important;
    }
    
    .comment-area .comment-meta .avatar {
        width: 40px !important;
        height: 40px !important;
    }
}
</style>

<div class="comment-area">
    <?php if (have_comments()) : ?>
        <h3><?php echo get_comments_number(); ?> Comments</h3>
        <ul class="comment-list">
            <?php
            wp_list_comments([
                'style' => 'ul',
                'avatar_size' => 50,
                'short_ping' => true,
            ]);
            ?>
        </ul>
    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <?php if (is_user_logged_in()) : ?>
            <h3>Make a Post</h3>
            <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" class="comment-form">
                <textarea name="comment" placeholder="What are you thinking..."></textarea>
                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                <input type="submit" name="submit" value="Share">
            </form>
        <?php else : ?>
            <div class="comment-login-message">
                🚫 You must <a href="<?php echo wp_login_url(get_permalink()); ?>">log in</a> to post a comment.
            </div>
        <?php endif; ?>
    <?php else : ?>
        <div class="comment-login-message">
            Comments are closed.
        </div>
    <?php endif; ?>
</div>
