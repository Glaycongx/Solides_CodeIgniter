<?php
$this->session->unset_userdata('usuario');
header('Location: index.php');
exit();