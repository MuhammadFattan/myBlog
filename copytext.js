document.getElementById("copyButtonBA").addEventListener("click", function() {
    var numberToCopy = "AYVBWNGY";

    navigator.clipboard.writeText(numberToCopy).then(function() {
        alert("text berhasil disalin");
    }, function(err) {
        console.error("gagal menyalim text: ", err);
    });
});