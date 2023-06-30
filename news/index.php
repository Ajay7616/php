<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/news/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/news/function.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/news/header.php");

    if(isset($_POST["submit"]))
    {
        insertion($_POST);
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label"><h6>Title</h6></label>
							<input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label"><h6>Content</h6></label>
							<textarea type="text" class="form-control" id="content" name="content" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><h6>Image</h6></label>
							<input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary fw-bold" id="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/news/footer.php");
?>