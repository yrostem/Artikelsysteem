<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1 text-center">Recente 5 artikelen</h1>
            </div>
            <?php
        foreach($articles as $article){
          ?>
            <div class="col-sm-4">
                <h1 class="text-heading display-6 text-primary"><?php echo $article->article_title;  ?></h1>
                <p class=""><b><?php echo $article->article_summary;  ?></b></p>
                <p class=""><?= $this->tag->linkTo("articles/$article->id", "Lees verder") ?> </p>
                <div class="col-md-12">
                    <div class="blockquote">
                        <p class="mb-0"></p>
                        <div class="blockquote-footer"><?php echo $article->creation_date; ?></div>
                    </div>
                </div>
            </div>

            <?php
        }
?>


        </div>
    </div>
</div>