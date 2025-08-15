// JavaScript to make switch control the collapse
document.getElementById('switchCheckChecked').addEventListener('change', function () {
    var tradeInContent = document.getElementById('tradeInContent');
    var collapseInstance = bootstrap.Collapse.getOrCreateInstance(tradeInContent);
    if (this.checked) {
        collapseInstance.show();
    } else {
        collapseInstance.hide();
    }
});



