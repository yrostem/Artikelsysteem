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
        </div>
    </div>
</div>
<div class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit article</h1>
                <form method="POST" action="/dtt/editarticle/save/<?= $articles->id ?>">
                    <div class="form-group">
                        <label for="InputName">Article title</label>
                        <input type="text" class="form-control" name="article_title" value="<?= $articles->article_title; ?>"> </div>
                    <div class="form-group">
                        <label for="InputEmail1">Article summary</label>
                        <input type="text" class="form-control" name="article_summary" value="<?= $articles->article_summary; ?>"> </div>
                    <div class="form-group">
                        <label for="Textarea">Article content</label>
                        <textarea class="form-control h-75 form-control-sm" rows="3" name="article_text">
                            <?= $articles->article_text; ?>
                        </textarea>
                    </div>

                <div class="form-group">
                    <label for="InputEmail1">Publication date</label>
                    <input type="text" class="form-control" name="creation_date" readonly="readonly" value="<?php echo $articles->creation_date; ?>"> </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-success" type="submit" href="">Save Changes</button>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-success" href="/dtt/admin">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>