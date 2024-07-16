let totalPrice = document.getElementById('totalPrice')
let subTotalPrice = document.getElementById('subtotalPrice')
let shippingPrice = document.getElementById('shippingPrice')
function totalCheckoutPrice() {
totalPrice.innerText = `Rs ${parseFloat(subTotalPrice.innerText.replace('Rs ', '')) + parseFloat(shippingPrice.innerText.replace('Rs ', ''))}`
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
            <td class="border px-4 py-2 text-center">Rs. ${product.price}</td>
            <td class="border px-4 py-2 text-center">${product.quantity}</td>
            <td class="border px-4 py-2 text-center">Rs. ${product.total}</td>
        `;
        totalDiscount +=  (product.actualPrice - product.price) * product.quantity;
        document.getElementById('discountPrice').innerText = `Rs ${totalDiscount}`;
        totalCheckoutPrice()
        tbody.appendChild(tr);
    });

    updateFooterTotal();
}

function updateFooterTotal() {
    const totalCells = document.querySelectorAll('tbody tr td:last-child');
    let grandTotal = 0;
    totalCells.forEach(cell => {
        grandTotal += parseFloat(cell.innerText.replace('Rs. ', '').replace(',', '')) || 0;
    });

    const totalFooter = document.querySelector('tfoot td:last-child');
    totalFooter.innerText = `Rs. ${grandTotal}`;
    document.getElementById('subtotalPrice').innerText = `Rs ${grandTotal}`;
    totalCheckoutPrice()

}

function toggleLocationRow() {
    const locationRow = document.getElementById('locationRow');
    locationRow.classList.toggle('hidden');
}


//Dynamic Receipt
// Handle shipping price based on city selection
const shippingSelect = document.querySelector('select[placeholder="Select City"]');
shippingSelect.addEventListener('change', () => {
    const selectedCity = shippingSelect.value;
    const shippingPrice = selectedCity ? 200 : 0;
    document.getElementById('shippingPrice').innerText = `Rs ${shippingPrice}`;
    totalCheckoutPrice()
});



/*document.addEventListener('DOMContentLoaded', () => {
    const productList = JSON.parse(localStorage.getItem('productList')) || [];
    const checkoutTableBody = document.querySelector('table tbody');
    let subtotal = 0;
    let discount = 0;

    productList.forEach((product, index) => {
        if (product.quantity > 0) {
            const row = document.createElement('tr');
            row.className = index % 2 === 0 ? 'bg-gray-100' : 'bg-white';

            row.innerHTML = `
                <td class="border px-4 py-2 text-center">${index + 1}</td>
                <td class="border px-4 py-2">
                    <img src="${product.photo}" alt="${product.name}" class="w-16 h-16 mx-auto">
                </td>
                <td class="border px-4 py-2 text-center">${product.name}</td>
                <td class="border px-4 py-2 text-center">Rs. ${product.price}</td>
                <td class="border px-4 py-2 text-center">${product.quantity}</td>
                <td class="border px-4 py-2 text-center">Rs. ${product.quantity * product.price}</td>
            `;

            checkoutTableBody.appendChild(row);

            // Calculate subtotal and discount
            subtotal += product.quantity * product.price;
            discount += product.discount * product.quantity;
        }
    });

    // Update subtotal, discount, and coupon in the summary table
    document.getElementById('subtotalPrice').innerText = `Rs ${subtotal}`;
    document.getElementById('discountPrice').innerText = `Rs ${discount}`;
    document.getElementById('couponPrice').innerText = `Rs 0`;

   

    // Calculate and update total price
    function updateTotal() {
        const shippingPrice = parseFloat(document.getElementById('shippingPrice').innerText.replace('Rs ', '')) || 0;
        const total = subtotal + shippingPrice - discount;
        document.getElementById('totalPrice').innerText = `Rs ${total}`;
    }

    // Initial total calculation
    updateTotal();
});
*/