<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/202-config/connect.php'); 

AUTH::require_user();

header('location: /tracking202/setup/ppc_accounts.php');