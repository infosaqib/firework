<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products List</title>
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
                <h1 class="text-white font-bold text-2xl md:text-4xl tracking-wider text-center">List of Products</h1>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-2 bg-yellow-400 py-2 sticky top-0">
                <div class="flex flex-row items-center justify-center gap-x-4">
                        <label for="product" class="text-black text-lg font-semibold">Products</label>
                        <input id="totalProducts" type="number" name="product" readonly value="0"
                                class="text-center w-1/3 text-black text-lg font-semibold bg-white outline-0 border-2 border-gray-400 rounded p-1">
                </div>
                <div class="flex flex-row items-center justify-center gap-x-4"><label for="total"
                                class="text-black text-lg font-semibold">Total Price</label>
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
                                                <td class="text-center py-2 uppercase text-lg translate-x-3 font-semibold"
                                                        colspan="7">Sparklers
                                                </td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-26.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">BOBY GOLD SPARKLERS
                                                        7CM(10pcs)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">40</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 20 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12  mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center "><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>


                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-111.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">BOBBY CRACKLINGS
                                                        SPARKLERS 7CM(10PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">50</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 25 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-295.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">12CM 4 COLOUR SPARKLERS
                                                        (10PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">100</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 50 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-112.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">GOLD SPARKLERS
                                                        15CM(10PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">150</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 75 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-114.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">GOLD SPARKLERS
                                                        30CM(5PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">150</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 75 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-119.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">RED SPARKLERS
                                                        15CM(10PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">160</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 80 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-122.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">LEMON TREE SPARKLERS
                                                        15CM(10PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">160</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 80 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                        <tr class="bg-white">
                                                <td class="border px-2 md:px-4 py-2 flex items-center justify-center">
                                                        <img class="size-12 md:size-24"
                                                                src="https://standardcrackers.com/assets/uploads/product-featured-113.jpg"
                                                                alt="Sparkler" class="w-16 h-16"></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">CRACKLING SPARKLERS
                                                        15CM(10PCS)</td>
                                                <td class="border px-2 md:px-4 py-2 text-center">1 BOX</td>
                                                <td class="border px-2 md:px-4 py-2 text-center strike-through">₹ <span
                                                                class="line-through">170</span></td>
                                                <td class="border px-2 md:px-4 py-2 text-center">₹ 85 </td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-red-600 focus:border-yellow-500 outline-0 w-12 mx-auto"
                                                                value="0" min="0"
                                                                oninput="updateTotal(this);updateProduct(this)"></td>
                                                <td class="border px-2 text-center"><input type="number" style="max-width: 6em"
                                                                class="text-center text-lg font-semibold border-2 rounded-sm py-2 border-gray-600 outline-0  w-12 mx-auto"
                                                                value="0" readonly></td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
                <div class="flex justify-end items-end pr-14 py-8">
                        <a href="#" onclick="alertAmount()"> <button
                                        class="bg-red-500 hover:bg-yellow-500 transition py-2 m-3 px-4 md:px-6 text-white text-xl rounded-md text-center cursor-pointer">Proceed
                                        to
                                        Checkout</button>
                        </a>
                </div>
        </div>
        <script>
          function updateTotal(element) {
    const quantity = element.value;
    const row = element.closest('tr');
    const discountPrice = parseFloat(row.children[4].innerText.replace('₹ ', '').replace(',', ''));
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

function alertAmount(event) {
    if (totalCheck.value == 0) {
        alert("Add item here");
    } else if (totalCheck.value < 3000) {
        alert('Minimum purchase amount ₹3000')
    } else{
        window.location.href = 'https://ssfireworks.in/check-out/'
    }
}

function saveProductDetails(row, quantity) {
    const product = {
        photo: row.children[0].innerHTML,
        name: row.children[1].innerText,
        price: parseFloat(row.children[4].innerText.replace('₹ ', '').replace(',', '')),
        actualPrice: parseFloat(row.children[3].innerText.replace('₹ ', '').replace(',', '')),
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