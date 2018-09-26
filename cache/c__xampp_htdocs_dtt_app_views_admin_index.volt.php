<div class="p-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="">Widget Admin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="">You are logged in as: Yad | <?= $this->tag->linkTo("logout", "Log Out") ?> </p>
            </div>
            <div class="col-md-12">
                <p class="">Create an article | <?= $this->tag->linkTo("admin/add-article", "Create") ?> </p>
            </div>
        </div>
    </div>
</div>
<div class="p-3">
    <div class="container">
        <div class="row">
            <?php
            foreach ($articles as $article){


            ?>
            <div class="col-md-2">
                <p class="lead"><?php echo $article->creation_date; ?> </p>
            </div>
            <div class="col-md-10">
                <h5 class=""><?php  echo $article->article_title; ?></h5>
                <?= $this->tag->linkTo("editarticle/$article->id", "Edit Article | ") ?>
                <?= $this->tag->linkTo("delete/$article->id", "DELETE Article") ?>
                <hr>
            </div>
            <?php

            }
            ?>
        </div>
    </div>
</div>
