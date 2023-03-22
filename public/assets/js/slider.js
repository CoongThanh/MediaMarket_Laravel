// Best Selling Products
new Splide('#splide-best-selling', {
  type: "loop",
    classes: {
        arrows: "control-arrows",
        arrow: "splide__arrow control-arrow",
        prev  : 'splide__arrow--prev your-class-prev',
        next  : 'splide__arrow--next your-class-next',
    },
  }).mount();

//Deal Of The Month
new Splide('#splide-deal-month', {
  type: 'loop',
  classes: {
    arrows: "control-arrows",
    arrow: "splide__arrow control-arrow",
    prev: "splide__arrow--prev control-arrow--prev",
    next: "splide__arrow--next control-arrow--next",
  },
}).mount();

new Splide('#list-splide-deal-month', {
  pagination: true,
  lazyLoad: true,
  // type: 'loop',
  classes: {
    arrows: "control-arrows",
    arrow: "splide__arrow control-arrow",
    prev: "splide__arrow--prev control-arrow--prev",
    next: "splide__arrow--next control-arrow--next",
  },
}).mount();

// Best Sellers Products
new Splide('#splide-best-seller', {
  type: "loop",
  classes: {
    arrows: "control-arrows",
    arrow: "splide__arrow control-arrow",
    prev: "splide__arrow--prev control-arrow--prev",
    next: "splide__arrow--next control-arrow--next",
  },
}).mount();

// new Splide('#splide-today-details', {
//   type: "loop",
//   classes: {
//       arrows: "control-arrows",
//       arrow: "splide__arrow control-arrow",
//       prev  : 'splide__arrow--prev your-class-prev',
//       next  : 'splide__arrow--next your-class-next',
//   },
// } );

// new Splide('#splide-hot-new-arrivals', {
//   type: "loop",
//   classes: {
//       arrows: "control-arrows",
//       arrow: "splide__arrow control-arrow",
//       prev  : 'splide__arrow--prev your-class-prev',
//       next  : 'splide__arrow--next your-class-next',
//   },
// } );

// Recently Viewed Products
new Splide('#splide-recently-viewed', {
    type: "loop",
    classes: {
        arrows: "control-arrows",
        arrow: "splide__arrow control-arrow",
        prev  : 'splide__arrow--prev your-class-prev',
        next  : 'splide__arrow--next your-class-next',
    },
  }).mount();

  // Related Products
new Splide('#splide-related-product', {
    type: "loop",
    classes: {
        arrows: "control-arrows",
        arrow: "splide__arrow control-arrow",
        prev  : 'splide__arrow--prev your-class-prev',
        next  : 'splide__arrow--next your-class-next',
    },
  }).mount();
