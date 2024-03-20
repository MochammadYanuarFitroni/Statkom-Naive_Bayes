<?php
require '../../function.php';

$Id = $_GET["Id"];

if (hapus($Id) > 0){
	echo "
		<script>
			alert('data berhasil dihapus');
			document.location.href = 'tampilan_datalatih.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus');
			document.location.href = 'tampilan_datalatih.php';
		</script>
	";
}
?>