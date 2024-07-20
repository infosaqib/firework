// Initialize EmailJS
emailjs.init('hj0ktJGt8eMelJAtC');

// Add event listener to the form submit button
document.getElementById('checkoutForm').addEventListener('submit', function (event) {
    event.preventDefault();

    //Collect product details
    const products = JSON.parse(localStorage.getItem('products')) || [];
    let pname = [];
    let pquantity = [];
    let pPrice = [];
    ptotal = []

    products.forEach(event => {
        pname.push(event.name);
        pquantity.push(event.quantity);
        pPrice.push(event.price);
        ptotal.push(event.total);
    });

    console.log(pname, pquantity, pPrice);

    // Collect customer data
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let contact = document.getElementById('phone').value;
    let address = document.getElementById('address').value;
    let shippingType = document.getElementById('shipping').value;
    let city = document.getElementById('city').value;
    let state = document.getElementById('state').value;
    let zipCode = document.getElementById('zip').value;
    //Collect checkout details
    let subtotal = document.getElementById('subtotalPrice').innerText;
    let shippingfee = document.getElementById('shippingPrice').innerText;
    let discount = document.getElementById('discountPrice').innerText;
    let coupon = document.getElementById('couponPrice').innerText;
    let totalprice = document.getElementById('totalPrice').innerText;

    // Prepare template parameters
    const templateParams = {
        //Products
        pname: pname.join('\n\n'),
        pquantity: pquantity.join('\n\n'),
        pPrice: pPrice.join('\n\n'),
        ptotal: ptotal.join('\n\n'),
        //checkout
        subtotal: subtotal,
        shippingfee: shippingfee,
        discount: discount,
        coupon: coupon,
        totalPrice: totalprice,
        //customer
        name: name,
        email: email,
        phone: contact,
        address: address,
        shippingType: shippingType,
        city: city,
        state: state,
        zipCode: zipCode
    };
console.log(templateParams);

    // Send email using EmailJS
    emailjs.send('service_92xlg96', 'template_paxvf8o', templateParams)
        .then(res => {
            console.log('Email sent successfully!', res.status, res.text);
            console.log(templateParams);

            document.forms['checkoutForm'].reset()
            alert('Email sent successfully!')

        })
        .catch( error => {
            console.error('Failed to send email.', error);
            alert('Something went wrong')
        });
});
