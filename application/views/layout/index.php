



<?php $this->view('layout/fragments/header') ?>


<?php $this->view('layout/fragments/navbar') ?>
<?php $this->view('layout/fragments/slider') ?>
<?php //$this->view('layout/fragments/template') ?>
<?php include 'pages/'.$page_title.'.php';?>

<?php $this->view('layout/fragments/footer') ?>