
  // --- State ---
  let activeType = 'new';
  let showingAll = false;

  // --- Render single car card HTML ---
  function renderCarCard(car) {
    return `
      <div class="card col-2 text-center brand-card" data-name="${car.name}">
        <div class="card-body d-flex justify-content-center align-items-center">
          <img src="${car.imageURL}" alt="${car.name}" class="brand-img">
          <span class="mx-3 brand-span">${car.name}</span>
        </div>
      </div>
    `;
  }

  // --- Send deleted content to server log ---
  function logOldCards(oldContent) {
    if (!oldContent.trim()) return;
    fetch('log_deleted_cards.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ html: oldContent })
    }).catch(err => console.error('Logging failed:', err));
  }

  // --- Display cars in #carBrands ---
  function showCars(carArray) {
    const container = document.getElementById('carBrands');

    // Log old content before clearing
    logOldCards(container.innerHTML);

    // Render new content
    container.innerHTML = carArray.map(renderCarCard).join('');
  }

  function showInitialCars(carArray) { showCars(carArray); }

  function showAllCars(carArray) {
    const sorted = [...carArray].sort((a, b) => a.name.localeCompare(b.name));
    showCars(sorted);
  }

  // --- Toggle See More / See Less ---
  function toggleView() {
    if (!showingAll) {
      if (activeType === 'new') showAllCars(allCarsNew);
      else showAllCars(allCarsUsed);
      updateToggleBtnText('See less', 'up');
      showingAll = true;
    } else {
      if (activeType === 'new') showInitialCars(initialCarsNew);
      else showInitialCars(initialCarsUsed);
      updateToggleBtnText('See more', 'down');
      showingAll = false;
    }
  }

  function updateToggleBtnText(text, iconDir) {
    document.getElementById('seeMore').innerHTML = `<span>${text} <i class="bi bi-arrow-${iconDir}" aria-hidden="true"></i></span>`;
  }

  // --- Switch car type ---
  function selectCarType(type) {
    activeType = type;
    showingAll = false;

    document.getElementById('newCars').classList.toggle('active', type === 'new');
    document.getElementById('usedCars').classList.toggle('active', type === 'used');

    if (type === 'new') showInitialCars(initialCarsNew);
    else showInitialCars(initialCarsUsed);

    updateToggleBtnText('See more', 'down');
  }

  // --- Init ---
  document.addEventListener('DOMContentLoaded', () => {
    selectCarType('new');
  });

