<section class="comments">
    <?php
    $comment_form_args = array(
        'title_reply' => 'コメント投稿フォーム',
    );
    comment_form($comment_form_args);

    if (have_comments()) :
    ?>
        <p><?php comments_number(); ?></p>
        <ol class="commentlist">
            <?php wp_list_comments(); ?>
        </ol>
    <?php
        paginate_comments_links();
    endif;
    ?>
</section>