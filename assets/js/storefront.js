(() => {
  const search = document.querySelector("#catalogSearch");
  const productCards = Array.from(document.querySelectorAll(".catalog-product"));

  if (search && productCards.length) {
    const category = document.querySelector("#categoryFilter");
    const occasion = document.querySelector("#occasionFilter");
    const minPrice = document.querySelector("#minPrice");
    const maxPrice = document.querySelector("#maxPrice");
    const availability = document.querySelector("#availabilityFilter");
    const resultCount = document.querySelector("#resultCount");
    const emptyState = document.querySelector("#emptyState");

    const applyFilters = () => {
      const searchTerm = search.value.trim().toLocaleLowerCase();
      const categoryValue = category.value;
      const occasionValue = occasion.value;
      const minValue = minPrice.value === "" ? null : Number(minPrice.value);
      const maxValue = maxPrice.value === "" ? null : Number(maxPrice.value);
      const availabilityValue = availability.value;
      let visibleCount = 0;

      productCards.forEach((card) => {
        const price = Number(card.dataset.price);
        const matches =
          card.dataset.name.includes(searchTerm) &&
          (!categoryValue || card.dataset.category === categoryValue) &&
          (!occasionValue || card.dataset.occasion === occasionValue) &&
          (minValue === null || price >= minValue) &&
          (maxValue === null || price <= maxValue) &&
          (!availabilityValue || card.dataset.availability === availabilityValue);

        card.classList.toggle("d-none", !matches);
        if (matches) visibleCount += 1;
      });

      resultCount.textContent = `${visibleCount} sample ${visibleCount === 1 ? "piece" : "pieces"}`;
      emptyState.classList.toggle("d-none", visibleCount !== 0);
    };

    [search, category, occasion, minPrice, maxPrice, availability].forEach((control) => {
      control.addEventListener("input", applyFilters);
      control.addEventListener("change", applyFilters);
    });

    document.querySelectorAll("[data-filter-reset]").forEach((button) => {
      button.addEventListener("click", () => {
        search.value = "";
        category.value = "";
        occasion.value = "";
        minPrice.value = "";
        maxPrice.value = "";
        availability.value = "";
        applyFilters();
        search.focus();
      });
    });

    applyFilters();
  }

  const quantity = document.querySelector("#quantity");
  if (quantity) {
    document.querySelectorAll("[data-quantity-change]").forEach((button) => {
      button.addEventListener("click", () => {
        const min = Number(quantity.min) || 1;
        const max = Number(quantity.max) || Number.MAX_SAFE_INTEGER;
        const change = Number(button.dataset.quantityChange);
        const current = Number(quantity.value) || min;
        quantity.value = String(Math.min(max, Math.max(min, current + change)));
      });
    });

    quantity.addEventListener("change", () => {
      const min = Number(quantity.min) || 1;
      const max = Number(quantity.max) || Number.MAX_SAFE_INTEGER;
      const value = Number(quantity.value);
      quantity.value = String(Math.min(max, Math.max(min, Number.isFinite(value) ? value : min)));
    });
  }
})();
