function abrirAdm() {
	var adminWindow = window.open(
		"admin.php",
		"_self",
		"toolbar=0,location=0,menubar=0"
	);
	adminWindow.moveTo(0, 0);
	adminWindow.resizeTo(screen.width, screen.height);
}
function fecharPag() {
	window.close();
}
