<?php
// logout.php - Update file logout Anda
session_start();
// Hapus semua data session
session_unset();
// Destroy session
session_destroy();
// Clear session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}
// Redirect ke login
header("Location: ../index.php");
exit();
?>