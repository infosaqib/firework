

function updateTotal(element) {
    const quantity = element.value;
    const discountPrice = element.closest('tr').children[4].innerText.replace('Rs. ', '').replace(',', '');
    const totalCell = element.closest('tr').children[6].children[0];
    totalCell.value = (quantity * discountPrice);
    updateGrandTotal()
}


function updateGrandTotal() {
    let totalCheck = document.getElementById('totalCheck');
    const totals = document.querySelectorAll('tbody tr input[readonly]');
    let grandTotal = 0;
    totals.forEach(total => {
        grandTotal += parseFloat(total.value) || 0;
    });
    totalCheck.value = grandTotal
}

function updateProduct(element) {
    const totalProducts = document.getElementById('totalProducts');
    const quantity = parseInt(element.value);
    const alreadyCounted = element.getAttribute('data-counted') === 'true';

    if (quantity > 0 && !alreadyCounted) {
        totalProducts.value = parseInt(totalProducts.value) + 1;
        element.setAttribute('data-counted', 'true');
    }
    else if (quantity <= 0 && alreadyCounted) {
        totalProducts.value = parseInt(totalProducts.value) - 1;
        element.setAttribute('data-counted', 'false');
    }

}