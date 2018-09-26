<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1 text-center">Article archive</h1>
            </div>
            <?php
        foreach($articles as $article){
          ?>
                <div class="col-sm-3">
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
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination pagination-sm">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span>«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span>»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>