<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/news/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/news/function.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/news/header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <?php if($contents = get_content()): ?>
                <?php
                    foreach($contents as $content):
                ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title"><h1><?php echo $content["title"]; ?></h1></div>
                        <img class="col-md-4 offset-md-4" src="<?php echo $content["img"]; ?>" alt="">
                        <div class="card-text">
                            <?php echo $content["content"]; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/news/footer.php");
?>