<div class="py-5">
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center display-3 text-primary"><?php echo $articles->article_title; ?>
                        <br>
                    </h1>
                    <p class=""><b><?php echo $articles->article_summary; ?></b></p>
                    <p><?php echo $articles->article_text; ?></p>
                    <div class="blockquote">
                        <i class="fa fa-angle-double-left" style="font-size:24px"></i><a href="/dtt"> Back to articles</a>
                        <div class="blockquote-footer"><?php echo $articles->creation_date; ?></div>
                    </div>
                </div>
            </div>
    </div>
</div>