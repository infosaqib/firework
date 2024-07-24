<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <style>
          * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

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

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

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

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  letter-spacing: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

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

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

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

.visible {
  visibility: visible;
}

.collapse {
  visibility: collapse;
}

.relative {
  position: relative;
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

.block {
  display: block;
}

.flex {
  display: flex;
}

.table {
  display: table;
}

.contents {
  display: contents;
}

.hidden {
  display: none;
}

.size-1 {
  width: 0.25rem;
  height: 0.25rem;
}

.size-12 {
  width: 3rem;
  height: 3rem;
}

.size-2 {
  width: 0.5rem;
  height: 0.5rem;
}

.size-20 {
  width: 5rem;
  height: 5rem;
}

.size-24 {
  width: 6rem;
  height: 6rem;
}

.size-3 {
  width: 0.75rem;
  height: 0.75rem;
}

.size-6 {
  width: 1.5rem;
  height: 1.5rem;
}

.h-16 {
  height: 4rem;
}

.w-1 {
  width: 0.25rem;
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

.w-2 {
  width: 0.5rem;
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

.border-collapse {
  border-collapse: collapse;
}

.translate-x-3 {
  --tw-translate-x: 0.75rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer {
  cursor: pointer;
}

.resize {
  resize: both;
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

.overflow-x-hidden {
  overflow-x: hidden;
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

.border-blue-700 {
  --tw-border-opacity: 1;
  border-color: rgb(29 78 216 / var(--tw-border-opacity));
}

.border-gray-400 {
  --tw-border-opacity: 1;
  border-color: rgb(156 163 175 / var(--tw-border-opacity));
}

.border-gray-600 {
  --tw-border-opacity: 1;
  border-color: rgb(75 85 99 / var(--tw-border-opacity));
}

.border-red-400 {
  --tw-border-opacity: 1;
  border-color: rgb(248 113 113 / var(--tw-border-opacity));
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

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
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

.underline {
  text-decoration-line: underline;
}

.line-through {
  text-decoration-line: line-through;
}

.outline {
  outline-style: solid;
}

.outline-0 {
  outline-width: 0px;
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
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
        <h1 class="text-white font-bold text-lg md:text-3xl w-2/3 tracking-wider text-center py-3">Check your order and
            enter Address with your active Whatsapp no for better communication</h1>
    </div>
    <div class="p-12 ">
        <h2 class="text-black font-bold text-lg md:text-xl md:w-2/3 tracking-wider text-center">Order Details [Minimum
            of ₹3000]</h2>
        <hr class="my-6">
        <div class="overflow-x-auto md:overflow-x-hidden">
            <div class="imgContent border-2">
                <table class="min-w-full  bg-white">
                    <thead class="bg-red-500 text-white">
                        <tr>
                            <th class="border w-1/6 p-2">Serial</th>
                            <th class="border w-1/6 p-2">Photo</th>
                            <th class="border w-1/6 p-2">Name</th>
                            <th class="border w-1/6 p-2">Price</th>
                            <th class="border w-1/6 p-2">Fill Quantity</th>
                            <th class="border w-1/6 p-2">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be populated by JavaScript -->
                    </tbody>
                    <tfoot class="bg-red-500">
                        <tr>
                            <td colspan="5" class="border px-4 py-2 text-center text-white font-semibold">Total</td>
                            <td colspan="1" class="border px-4 py-2 text-center text-white font-semibold">₹ 0</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Form for Shipping Address -->
    <form id="checkoutForm" action="">
        <div class="p-12">
            <h2 class="text-black font-bold text-xl w-2/3 tracking-wider text-center">Shipping Address</h2>
            <hr class="my-6">
            <div class="imgContent flex flex-col md:flex-row gap-8 border-2 ">
                <table class="w-full bg-white">
                    <tbody>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Full Name</td>
                            <td class="border px-4 py-2"><input type="text" id="name"
                                    class="w-full outline-0 p-2 border rounded-sm" class="font-semibold" required></td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Email Address</td>
                            <td class="border px-4 py-2"><input type="email" id="email"
                                    class="w-full outline-0 p-2 border rounded-sm" class="font-semibold" required></td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Phone Number</td>
                            <td class="border px-4 py-2"><input type="tel" id="phone" pattern="[0-9+]*"
                                 oninput="validatePhone(this);"   class="w-full outline-0 p-2 border rounded-sm" class="font-semibold" required></td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Address</td>
                            <td class="border px-4 py-2"><input type="text" id="address"
                                    class="w-full outline-0 p-2 border rounded-sm" class="font-semibold" required></td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Shipping Type</td>
                            <td class="border px-4 py-2">
                                <label class="font-semibold mx-4 cursor-pointer">
                                    <input type="radio" name="shipping" value="office" class="mr-2" onchange="toggleLocationRow()" required>Office Delivery
                                </label>
                                <label class="font-semibold mx-4 cursor-pointer">
                                    <input type="radio" name="shipping" value="door" class="mr-2" onchange="toggleLocationRow()" required>Door Delivery
                                </label>
                                
                            </td>
                        </tr>
                        <tr id="locationRow" class="bg-white hidden">
                            <td class="border px-4 py-2 font-semibold">State / City / Zip Code</td>
                            <td class="border px-4 py-2 flex flex-col gap-y-2">
                                <input class="w-full outline-0 p-2 border rounded-sm mr-2 cursor-pointer"
                                    placeholder="City" id="city">
                                <select class="w-full outline-0 p-2 border rounded-sm mr-2 cursor-pointer"
                                    placeholder="State" id="state">
                                    <option value="" disabled selected>State</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                                <input type="number" id="zip" max="7" class=" w-full outline-0 p-2 border rounded-sm"
                                    placeholder="Zip Code" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="w-full bg-white">
                    <tbody id="secondTbody">
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Subtotal</td>
                            <td id="subtotalPrice" class="border px-4 py-2">₹ 0</td> <!-- Add id for subtotal -->
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Shipping</td>
                            <td id="shippingPrice" class="border px-4 py-2">₹ 0</td> <!-- Add id for shipping -->
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Discount</td>
                            <td id="discountPrice" class="border px-4 py-2">₹ 0</td> <!-- Add id for discount -->
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Coupon(-)</td>
                            <td id="couponPrice" class="border px-4 py-2">₹ 0</td> <!-- Add id for coupon -->
                        </tr>
                        <tr class="bg-white">
                            <td class="border px-4 py-2 font-semibold">Total</td>
                            <td id="totalPrice" class="border px-4 py-2">₹ 0</td> <!-- Add id for total -->
                        </tr>

                    </tbody>
                </table>
            </div>


            <h3 class="text-sm text-red-500 font-semibold my-6 mx-2">Notes : COD Not Available, Card Payments Contact: 
                +91&nbsp;9988735678</h3>
        </div>
        <div class="flex flex-col justify-center items-center md:items-end md:pr-14 pb-6">
            <div class="flex flex-col justify-center items-center md:items-end md:pr-14 pb-6">
                <div class="flex flex-col justify-center items-center md:items-end md:pr-14 pb-6">
                    <div>
                        <a href="#" id="backToHome"><button
                                class="bg-red-500 py-2 m-3 px-6 text-white text-xl rounded-md text-center cursor-pointer">Back</button></a>
                        <input type="submit"
                            class="bg-red-500 py-2 m-3 px-6 text-white text-xl rounded-md text-center cursor-pointer"
                            value="Submit">
                    </div>
                </div>
                <input type="submit" id="sendBack"
                    class="bg-red-500 py-2 m-3 px-6 text-white text-xl rounded-md text-center cursor-pointer"
                    value="Continue Shopping ->">
            </div>
        </div>
    </form>
    <script>
      //------------------------------- Checkout Js File
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
    window.location.href = 'https://ssfireworks.in/product-list/'
})
document.getElementById('sendBack').addEventListener('click', (event) => {
    event.preventDefault();
    window.location.href = 'https://ssfireworks.in/product-list/'
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

//------------------------------MAIL JS FILE
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

    </script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>

















