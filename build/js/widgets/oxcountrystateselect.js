(function () {
    const reinitStateSelect = function (countrySelect) {
        const parentDiv = countrySelect.closest('#addressForm, #shippingAddress, #registerAdrressForm');
        const oSelect = parentDiv.querySelector('.stateselect');
        const countryId = allCountryIds[countrySelect.value];
        const aStates = allStates[countryId];
        const stateSelectSpan = oSelect.closest('div');

        // clear state select
        oSelect.querySelectorAll('option').forEach((stateOption) => {
            if (stateOption.value !== '') stateOption.remove();
        });

        // hide if country has no states
        stateSelectSpan.style.display = (aStates && aStates.length) ? 'block' : 'none';

        // populate state select options
        if (aStates && aStates.length) {
            aStates.forEach((state, index) => {
                const stateOption = document.createElement('option');
                stateOption.value = allStateIds[countryId][index];
                stateOption.text = aStates[index];
                stateOption.selected = stateOption.value === oSelect.dataset.selectedstateid;

                oSelect.add(stateOption);
            });
        }
    };

    const aCountrySelects = document.querySelectorAll('#invCountrySelect, #delCountrySelect');

    if (aCountrySelects) {
        aCountrySelects.forEach((countrySelect) => {
            countrySelect.addEventListener('change', (item) => {
                reinitStateSelect(countrySelect);
            });

            reinitStateSelect(countrySelect);
        })
    }
})();