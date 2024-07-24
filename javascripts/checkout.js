let totalPrice = document.getElementById('totalPrice')
let subTotalPrice = document.getElementById('subtotalPrice')
let shippingPrice = document.getElementById('shippingPrice')
function totalCheckoutPrice() {
totalPrice.innerText = `₹ ${parseFloat(subTotalPrice.innerText.replace('₹ ', '')) + parseFloat(shippingPrice.innerText.replace('₹ ', ''))}`
}
function toggleLocationRow() {
    const locationRow = document.getElementById('locationRow');
    locationRow.classList.remove('hidden');
}


document.getElementById('backToHome').addEventListener('click', (event) => {
    event.preventDefault();
    window.location.href = 'index.html'
})

//Dynamic Checkout
document.addEventListener('DOMContentLoaded', function () {
    loadProductDetails();
});


function loadProductDetails() {
    let totalDiscount = 0;
    const products = JSON.parse(localStorage.getItem('products')) || [];
    
    
    const tbody = document.querySelector('table tbody');
    tbody.innerHTML = ''; // Clear existing rows

    products.forEach((product, index) => {
        const tr = document.createElement('tr');
        tr.className = index % 2 === 0 ? 'bg-gray-100' : 'bg-white';

        tr.innerHTML = `
            <td class="border px-4 py-2 text-center">${index + 1}</td>
            <td class="border px-4 py-2">${product.photo}</td>
            <td class="border px-4 py-2 text-center">${product.name}</td>
            <td class="border px-4 py-2 text-center">₹ ${product.price}</td>
            <td class="border px-4 py-2 text-center">${product.quantity}</td>
            <td class="border px-4 py-2 text-center">₹ ${product.total}</td>
        `;
        totalDiscount +=  (product.actualPrice - product.price) * product.quantity;
        document.getElementById('discountPrice').innerText = `₹ ${totalDiscount}`;
        totalCheckoutPrice()
        tbody.appendChild(tr);
    });

    updateFooterTotal();
}

function updateFooterTotal() {
    const totalCells = document.querySelectorAll('tbody tr td:last-child');
    let grandTotal = 0;
    totalCells.forEach(cell => {
        grandTotal += parseFloat(cell.innerText.replace('₹ ', '').replace(',', '')) || 0;
    });

    const totalFooter = document.querySelector('tfoot td:last-child');
    totalFooter.innerText = `₹ ${grandTotal}`;
    document.getElementById('subtotalPrice').innerText = `₹ ${grandTotal}`;
    totalCheckoutPrice()

}

function toggleLocationRow() {
    const locationRow = document.getElementById('locationRow');
    locationRow.classList.remove('hidden');
}


//Dynamic Receipt
// Handle shipping price based on city selection
const shippingSelect = document.querySelector('input[placeholder="City"]');
shippingSelect.addEventListener('input', () => {
    const selectedCity = shippingSelect.value;
    const shippingPrice = selectedCity ? 200 : 0;
    document.getElementById('shippingPrice').innerText = `₹ ${shippingPrice}`;
    totalCheckoutPrice()
});

//VALIDATION

function validatePhone(input) {
    input.value = input.value.replace(/[^0-9+]/g, '');
}