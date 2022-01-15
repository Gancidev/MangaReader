function ricalcola(){
    var volume = document.getElementById("volume_manga").value;
    var capitolo = document.getElementById("capitolo_manga").value;
    window.location="manga.php?nome_manga=Bleach&volume_manga="+volume+"&capitolo_manga="+capitolo;
}
function ricalcola_volume(){
    var volume = document.getElementById("volume_manga").value;
    window.location="manga.php?nome_manga=Bleach&volume_manga="+volume;
}