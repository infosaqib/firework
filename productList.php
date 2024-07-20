<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaRs.et="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/util.css">
    <title>Products List</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

html,
body {
    height: 100%;
    width: 100%;
    scroll-behavior: smooth;
    overflow-x: hidden;
    font-family: Arial, Helvetica, sans-serif;
}
#hero {
    position: relative;
    height: 30vh;
    width: 100%;
    background-color: #000000;
    background-image: url("../images/banner_cart.gif");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}


html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}


body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}


h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}


a {
  color: inherit;
  text-decoration: inherit;
}


b,
strong {
  font-weight: bolder;
}


code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-feature-settings: normal;
  font-variation-settings: normal;
  font-size: 1em;
}


small {
  font-size: 80%;
}


sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}


table {
  text-indent: 0;
  border-color: inherit;
  border-collapse: collapse;
}

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-feature-settings: inherit;
  font-variation-settings: inherit;
  font-size: 100%;
  font-weight: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  color: inherit;
  margin: 0;
  padding: 0;
}

button,
select {
  text-transform: none;
}


button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button;
  background-color: transparent;
  background-image: none;
}


:-moz-focusring {
  outline: auto;
}


:-moz-ui-invalid {
  box-shadow: none;
}


progress {
  vertical-align: baseline;
}


::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}


[type='search'] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}


::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}


summary {
  display: list-item;
}


blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}


dialog {
  padding: 0;
}


textarea {
  resize: vertical;
}


input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  color: #9ca3af;
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  color: #9ca3af;
}

button,
[role="button"] {
  cursor: pointer;
}


:disabled {
  cursor: default;
}


img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  vertical-align: middle;
}

img,
video {
  max-width: 100%;
  height: auto;
}


[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

.sticky {
  position: sticky;
}

.top-0 {
  top: 0px;
}

.m-3 {
  margin: 0.75rem;
}

.mx-2 {
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}

.mx-4 {
  margin-left: 1rem;
  margin-right: 1rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-6 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.my-8 {
  margin-top: 2rem;
  margin-bottom: 2rem;
}

.mr-2 {
  margin-right: 0.5rem;
}

.flex {
  display: flex;
}

.table {
  display: table;
}

.hidden {
  display: none;
}

.size-6 {
  width: 1.5rem;
  height: 1.5rem;
}

.size-1 {
  width: 0.25rem;
  height: 0.25rem;
}

.size-2 {
  width: 0.5rem;
  height: 0.5rem;
}

.size-3 {
  width: 0.75rem;
  height: 0.75rem;
}

.size-12 {
  width: 3rem;
  height: 3rem;
}

.size-20 {
  width: 5rem;
  height: 5rem;
}

.size-24 {
  width: 6rem;
  height: 6rem;
}

.h-16 {
  height: 4rem;
}

.w-1\/3 {
  width: 33.333333%;
}

.w-1\/6 {
  width: 16.666667%;
}

.w-12 {
  width: 3rem;
}

.w-16 {
  width: 4rem;
}

.w-2\/3 {
  width: 66.666667%;
}

.w-full {
  width: 100%;
}

.min-w-full {
  min-width: 100%;
}

.translate-x-3 {
  --tw-translate-x: 0.75rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer {
  cursor: pointer;
}

.flex-row {
  flex-direction: row;
}

.flex-col {
  flex-direction: column;
}

.items-end {
  align-items: flex-end;
}

.items-center {
  align-items: center;
}

.justify-end {
  justify-content: flex-end;
}

.justify-center {
  justify-content: center;
}

.gap-2 {
  gap: 0.5rem;
}

.gap-8 {
  gap: 2rem;
}

.gap-x-4 {
  -moz-column-gap: 1rem;
       column-gap: 1rem;
}

.gap-y-2 {
  row-gap: 0.5rem;
}

.overflow-x-auto {
  overflow-x: auto;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.rounded-sm {
  border-radius: 0.125rem;
}

.border {
  border-width: 1px;
}

.border-2 {
  border-width: 2px;
}

.border-gray-400 {
  --tw-border-opacity: 1;
  border-color: rgb(156 163 175 / var(--tw-border-opacity));
}

.border-gray-600 {
  --tw-border-opacity: 1;
  border-color: rgb(75 85 99 / var(--tw-border-opacity));
}

.border-red-600 {
  --tw-border-opacity: 1;
  border-color: rgb(220 38 38 / var(--tw-border-opacity));
}

.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-red-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.bg-red-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-yellow-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(250 204 21 / var(--tw-bg-opacity));
}

.p-1 {
  padding: 0.25rem;
}

.p-12 {
  padding: 3rem;
}

.p-2 {
  padding: 0.5rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-8 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.pb-6 {
  padding-bottom: 1.5rem;
}

.pr-14 {
  padding-right: 3.5rem;
}

.text-center {
  text-align: center;
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.font-bold {
  font-weight: 700;
}

.font-semibold {
  font-weight: 600;
}

.uppercase {
  text-transform: uppercase;
}

.tracking-wider {
  letter-spacing: 0.05em;
}

.text-black {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
}

.text-red-500 {
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.line-through {
  text-decoration-line: line-through;
}

.outline-0 {
  outline-width: 0px;
}

.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.hover\:bg-yellow-500:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(234 179 8 / var(--tw-bg-opacity));
}

.hover\:text-black:hover {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
}

.focus\:border-yellow-500:focus {
  --tw-border-opacity: 1;
  border-color: rgb(234 179 8 / var(--tw-border-opacity));
}

@media (min-width: 768px) {
  .md\:size-24 {
    width: 6rem;
    height: 6rem;
  }

  .md\:w-2\/3 {
    width: 66.666667%;
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:items-end {
    align-items: flex-end;
  }

  .md\:overflow-x-hidden {
    overflow-x: hidden;
  }

  .md\:p-2 {
    padding: 0.5rem;
  }

  .md\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .md\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .md\:pr-14 {
    padding-right: 3.5rem;
  }

  .md\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .md\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

    </style>
</head>

<body>
    <div id="hero" class="flex justify-center items-center">
        <h1 class="text-white font-bold text-2xl md:text-4xl tracking-wider text-center">List of Products</h1>
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center gap-2 bg-yellow-400 py-2 sticky top-0">
        <div class="flex flex-row items-center justify-center gap-x-4">
            <label for="product" class="text-black text-lg font-semibold">Products</label>
            <input id="totalProducts" type="number" name="product" readonly value="0"
                class="text-center w-1/3 text-black text-lg font-semibold bg-white outline-0 border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-row items-center justify-center gap-x-4"><label for="total" class="text-black text-lg font-semibold">Total Price</label>
            <input id="totalCheck" type="number" name="total" readonly value="0"
                class="text-center w-1/3 text-black text-lg font-semibold bg-white outline-0 border-2 border-gray-400 rounded p-1">
        </div>
    </div>
    <div class=" mx-auto my-8">
        <div class="overflow-x-auto md:overflow-x-hidden">
            <table class="min-w-full bg-white">
                <thead class="bg-red-600 text-white">
                    <tr>
                        <th class="border w-1/7 p-2">Photo</th>
                        <th class="border w-1/7 p-2">Name</th>
                        <th class="border w-1/7 p-2">Content</th>
                        <th class="border w-1/7 p-2">Actual Price</th>
                        <th class="border w-1/7 p-2">Discount Price</th>
                        <th class="border w-1/7 p-2">Quantity</th>
                        <th class="border w-1/7 p-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-yellow-400">
                        <td class="text-center py-2 uppercase text-lg translate-x-3 font-semibold" colspan="7">Sparklers
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="border px-2 md:px-4 py-2 flex items-center justify-center"><img class="size-12 md:size-24" src="./images/product-featured-26.jpg" alt="Sparkler" class="w-16 h-16"></td>
                        <td class="border px-2 md:px-4 py-2 text-center">Sparkler A</td>
                        <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                        <td class="border px-2 md:px-4 py-2 text-center strike-through">Rs. <span class="line-through">100</span></td>
                        <td class="border px-2 md:px-4 py-2 text-center">Rs. 80 </td>
                        <td class="border px-2 text-center"><input type="number"
                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12  mx-auto"
                                value="0" min="0" oninput="updateTotal(this);updateProduct(this)"></td>
                        <td class="border px-2 text-center "><input type="number"
                                class="text-center  border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                value="0" readonly></td>
                    </tr>


                    <tr class="bg-white">
                        <td class="border px-2 md:px-4 py-2 flex items-center justify-center"><img class="size-12 md:size-24" src="./images/product-featured-111.jpg" alt="Sparkler" class="w-16 h-16"></td>
                        <td class="border px-2 md:px-4 py-2 text-center">Sparkler C</td>
                        <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                        <td class="border px-2 md:px-4 py-2 text-center strike-through">Rs. <span class="line-through">200</span></td>
                        <td class="border px-2 md:px-4 py-2 text-center">Rs. 160 </td>
                        <td class="border px-2 text-center"><input type="number"
                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                value="0" min="0" oninput="updateTotal(this);updateProduct(this)"></td>
                        <td class="border px-2 text-center"><input type="number"
                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                value="0" readonly></td>
                    </tr>
                    <tr class="bg-white">
                        <td class="border px-2 md:px-4 py-2 flex items-center justify-center"><img class="size-12 md:size-24" src="./images/product-featured-26.jpg" alt="Sparkler" class="w-16 h-16"></td>
                        <td class="border px-2 md:px-4 py-2 text-center">Sparkler B</td>
                        <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                        <td class="border px-2 md:px-4 py-2 text-center strike-through">Rs. <span class="line-through">150</span></td>
                        <td class="border px-2 md:px-4 py-2 text-center">Rs. 120 </td>
                        <td class="border px-2 text-center"><input type="number"
                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                value="0" min="0" oninput="updateTotal(this);updateProduct(this)"></td>
                        <td class="border px-2 text-center"><input type="number"
                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                value="0" readonly></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-end items-end pr-14 py-8">
            <a href="check.html" onclick="alertAmount()"> <button
                    class="bg-red-500 hover:bg-yellow-500 transition py-2 m-3 px-4 md:px-6 text-white text-xl rounded-md text-center cursor-pointer">Proceed to
                    Checkout</button>
            </a>
        </div>
    </div>
    <script>function updateTotal(element) {
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
</script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>