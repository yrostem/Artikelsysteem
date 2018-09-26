<div class="p-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="">Widget Admin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="">You are logged in as: Admin | <?= $this->tag->linkTo("logout", "Log Out") ?> </p>
            </div>
        </div>
    </div>
</div>
<?php
$article = new AddArticleController();
$article->createAction();
?>

<div class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add article</h1>
                <form method="POST">
                    <div class="form-group">
                        <label for="article_title">Article title</label>
                        <input type="text" class="form-control" name="article_title"  placeholder="Article name"> </div>
                    <div class="form-group">
                        <label for="article_summary">Article summary</label>
                        <input type="text" name="article_summary" class="form-control"  placeholder="summary"> </div>
                    <div class="form-group">
                        <label for="Textarea">Article content</label>
                        <textarea class="form-control h-75 form-control-sm"  rows="10" placeholder="Type here" name="article_text"></textarea>
                    </div>

                    <label for="creation_date">Publication date</label>
                    <input type="text" name="creation_date" readonly="readonly" class="form-control"  value="<?php echo date("Y-m-d"); ?>"> </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <input type="submit" class="btn btn-success" name="addarticle" value="Add Article">
            </div>
            <div class="col-md-2">
                <a class="btn btn-success" href="/dtt/admin">Cancel</a>
            </div>
        </div>
        </form>
    </div>
</div>