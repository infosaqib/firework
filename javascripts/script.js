function updateTotal(element) {
    const quantity = element.value;
    const row = element.closest('tr');
    const discountPrice = parseFloat(row.children[4].innerText.replace('Rs. ', '').replace(',', ''));
    const totalCell = row.children[6].children[0];
    totalCell.value = (quantity * discountPrice);

    updateGrandTotal();
    saveProductDetails(row, quantity);
}

let totalCheck = document.getElementById('totalCheck');
function updateGrandTotal() {
    const totals = document.querySelectorAll('tbody tr input[readonly]');
    let grandTotal = 0;
    totals.forEach(total => {
        grandTotal += parseFloat(total.value) || 0;
    });
    totalCheck.value = grandTotal;
}

function updateProduct(element) {
    const totalProducts = document.getElementById('totalProducts');
    const quantity = parseInt(element.value);
    const alreadyCounted = element.getAttribute('data-counted') === 'true';

    if (quantity > 0 && !alreadyCounted) {
        totalProducts.value = parseInt(totalProducts.value) + 1;
        element.setAttribute('data-counted', 'true');
    } else if (quantity <= 0 && alreadyCounted) {
        totalProducts.value = parseInt(totalProducts.value) - 1;
        element.setAttribute('data-counted', 'false');
    }
}

function alertAmount() {
    if (totalCheck.value == 0) {
        alert("Add item here");
    } else if (totalCheck.value < 3000) {
        alert('Minimum purchase amount ₹3000')
    }
}

function saveProductDetails(row, quantity) {
    const product = {
        photo: row.children[0].innerHTML,
        name: row.children[1].innerText,
        price: parseFloat(row.children[4].innerText.replace('Rs. ', '').replace(',', '')),
        actualPrice: parseFloat(row.children[3].innerText.replace('Rs. ', '').replace(',', '')),
        quantity: quantity,
        total: row.children[6].children[0].value
    };
    let products = JSON.parse(localStorage.getItem('products')) || [];
    products = products.filter(p => p.name !== product.name); // Remove existing entry
    if (quantity > 0) {
        products.push(product); // Add updated entry
    }
    localStorage.setItem('products', JSON.stringify(products));
}

// Call this function on page load to clear local storage
function clearLocalStorage() {
    localStorage.removeItem('products');
}

document.addEventListener('DOMContentLoaded', clearLocalStorage);
