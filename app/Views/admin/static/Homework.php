<?php include 'components/header.php' ?>
<script src="<?= base_url('public/assets/js/ck/ckeditor/ckeditor.js') ?>"></script>

<div class="main">
    <?php $firstname = "amit"; ?>
    <?php include 'components/topnav.php' ?>

    <main class="content">
        <div class="container-fluid p-0">
       
            <h1 class="h3 mb-3"><strong> Student Homework List</h1>

            <div class="row">
                <div class="card">
                   <div class="card-body">
                    <table class="table table-bordered" id="homework-details" style="width:100%!important">
                        <thead>
                            <td>Submission Id </td>
                            <td>Id</td>
                            <td>Assignment Id</td>
                            <td>Submission Date</td>
                            <td>File Path</td>
                            <td>Comments</td>
                        </thead>
                        <tbody>
                            <?php 
                            
                            foreach($homeworkDetails as $homework)
                            {
                                ?>
                                <tr>
                                    <td><?= $homework['submission_id'] ?></td>
                                    <td><?= $homework['id'] ?></td>
                                    <td><?= $homework['assignment_id'] ?></td>
                                    <td><?= $homework['submission_date'] ?></td>
                                    <td><?= $homework['file_path'] ?></td>
                                    <td><?= $homework['comments'] ?></td>
                                </tr>
                                <?php 
                            }

                            ?>
                        </tbody>
                    </table>
                   </div>
                </div>

            </div>
    </main>
</div>
<?php include 'components/footer.php' ?>
<script>
        CKEDITOR.replace('editor1');
        let homeworkDetails = new DataTable('#homework-details');
    </script>
