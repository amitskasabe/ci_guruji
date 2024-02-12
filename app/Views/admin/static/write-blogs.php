<?php include 'components/header.php' ?>
<script src="<?= base_url('public/assets/js/ck/ckeditor/ckeditor.js') ?>"></script>

<div class="main">
    <?php $firstname = "amit"; ?>
    <?php include 'components/topnav.php' ?>

    <main class="content">
        <div class="container-fluid p-0">
       
            <h1 class="h3 mb-3"><strong>Write Blogs</strong> Dashboard</h1>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                    <h1> <?php if (session()->has('message')): ?>
                <div class="alert alert-success text-success <?= session('message_type') ?? 'info' ?>">
                    <?= session('message') ?>
                </div>
        <?php endif; ?> </h1>
                        <form action="add-blog" method="post">
                            <div class="form-group">
                                <label for="" class="mt-2"> Select Category </label>
                                <select name="cat" id="" class="form-control mt-2">
                                    <?php
                                    foreach ($categories as $category) {
                                        ?>
                                                   <option value="<?php echo $category['category_id'] ?>"><?php print_r($category['category_name']) ?></option>
                                               <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="mt-2"> Blog Title </label>
                                <input type="text" name="title" class="form-control mt-2">
                            </div>
                            <div class="form-group">
                                <label for="" class="mt-2"> Blog Desciption </label>
                            <textarea name="content" id="editor1" cols="30" rows="10" class="form-control">
                                
                                </textarea>
                            </div>
                            <input type="submit" value="Post" class="btn btn-success form-control mt-2">
                        </form>

                    </div>
                </div>

            </div>
    </main>
</div>
<?php include 'components/footer.php' ?>
<script>
        CKEDITOR.replace('editor1');
    </script>