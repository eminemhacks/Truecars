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

function selectCarType(type) {
    const newBtn = document.getElementById('newCars');
    const usedBtn = document.getElementById('usedCars');

    // Remove active from both
    newBtn.classList.remove('active');
    usedBtn.classList.remove('active');

    // Add active to clicked one
    if (type === 'new') {
        newBtn.classList.add('active');
        // Load new cars
        showInitialCars(newCarBrands);
    } else if (type === 'used') {
        usedBtn.classList.add('active');
        // Load used cars
        showInitialCars(usedCarBrands);
    }
}
