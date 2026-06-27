# FlipTrips India - WordPress Travel Theme

A modern, feature-rich WordPress theme designed specifically for travel and tourism businesses in India. Perfect for tour operators, travel agencies, and hospitality providers.

## Features

### Core Features
- **Responsive Design**: Fully responsive and mobile-optimized
- **Modern UI/UX**: Clean, professional design with smooth animations
- **Multiple Post Types**: Tours, Destinations, Fleet, Testimonials
- **Custom Taxonomies**: Tour Categories, Destination Regions
- **Theme Customizer**: Easy-to-use customization panel
- **Color Customization**: Customizable primary, secondary, and accent colors
- **SEO Optimized**: Built-in SEO best practices

### Content Sections
- **Hero Slider**: Dynamic carousel of featured tours
- **Destinations**: Grid display of travel destinations
- **Tour Packages**: Showcase of available tour packages
- **Fleet Showcase**: Display of available vehicles
- **Testimonials**: Customer reviews and feedback
- **Blog Section**: Travel tips and articles
- **Call-to-Action**: Prominent booking and contact sections

### Interactive Features
- **WhatsApp Integration**: Floating WhatsApp button for direct communication
- **Social Media Links**: Integration with major social platforms
- **Contact Information**: Display business details and contact info
- **Booking Forms**: Customizable booking functionality
- **Filtering System**: Filter tours by category and destinations by region

### Technical Features
- **Bootstrap 5 Integration**: Responsive grid and components
- **Swiper.js**: Touch-friendly sliders and carousels
- **Bootstrap Icons**: Icon library for beautiful visuals
- **Lazy Loading**: Optimized image loading
- **AJAX Functionality**: Smooth filtering without page reloads
- **Mobile Menu**: Responsive navigation
- **Smooth Scrolling**: Enhanced user experience
- **Animations**: Intersection observer-based animations

## Installation

1. Download the theme files
2. Upload to `/wp-content/themes/fliptrips-india/`
3. Activate the theme from WordPress admin
4. Go to Customize > FlipTrips Settings to configure

## Theme Setup

### Initial Configuration

1. **Site Identity**
   - Set your site title and tagline
   - Upload a logo or site icon
   - Write your site description

2. **Color Settings**
   - Customize primary color (default: #FF6B6B)
   - Customize secondary color (default: #4ECDC4)
   - Customize accent color (default: #FFE66D)

3. **Contact Information**
   - Add phone number
   - Add email address
   - Add physical address
   - Add WhatsApp number

4. **Social Media**
   - Add Facebook URL
   - Add Instagram URL
   - Add Twitter URL
   - Add YouTube URL
   - Add LinkedIn URL

## Creating Content

### Adding Tours
1. Go to Tours > Add New
2. Fill in tour details:
   - Title
   - Description
   - Featured image
   - Category
   - Duration
   - Price
3. Publish

### Adding Destinations
1. Go to Destinations > Add New
2. Fill in destination details:
   - Title
   - Description
   - Featured image
   - Region
3. Publish

### Adding Fleet
1. Go to Fleet > Add New
2. Fill in vehicle details:
   - Title
   - Description
   - Featured image
3. Publish

## Customization

### Theme Customizer
Access customization options through:
Appearance > Customize

### Available Options
- **Site Identity**: Logo, title, colors
- **Colors**: Primary, secondary, accent colors
- **Contact Info**: Business contact details
- **Social Media**: Social network links
- **Theme Settings**: Additional theme options

## Widget Areas

The theme includes the following widget areas:
- **Primary Sidebar**: Main sidebar for pages
- **Footer Area 1-4**: Four footer widget columns
- **Footer Bottom**: Footer bottom widget area

## Hooks & Filters

### Available Hooks
```php
// Before header
do_action( 'fliptrips_before_header' );

// After header
do_action( 'fliptrips_after_header' );

// Before footer
do_action( 'fliptrips_before_footer' );

// After footer
do_action( 'fliptrips_after_footer' );
```

### Available Filters
```php
// Filter primary color
apply_filters( 'fliptrips_primary_color', '#FF6B6B' );

// Filter secondary color
apply_filters( 'fliptrips_secondary_color', '#4ECDC4' );
```

## Required Plugins

For optimal functionality, consider installing:
- [Elementor](https://wordpress.org/plugins/elementor/) - Page builder
- [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) - SEO optimization
- [Wordfence](https://wordpress.org/plugins/wordfence/) - Security
- [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) - Caching

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## File Structure

```
fliptrips-india/
├── template-parts/
│   ├── hero.php
│   ├── destinations.php
│   ├── packages.php
│   ├── fleet.php
│   ├── testimonials.php
│   ├── blog.php
│   ├── cta.php
│   └── whatsapp.php
├── inc/
│   ├── class-custom-post-types.php
│   ├── class-customizer.php
│   ├── helpers.php
│   ├── helpers-output.php
│   └── ajax-handlers.php
├── assets/
│   ├── css/
│   │   ├── main.css
│   │   ├── responsive.css
│   │   ├── animations.css
│   │   └── admin.css
│   └── js/
│       ├── main.js
│       ├── slider.js
│       ├── booking.js
│       └── admin.js
├── index.php
├── style.css
├── functions.php
├── header.php
├── footer.php
└── README.md
```

## Changelog

### Version 1.0.0
- Initial release
- Core theme features
- Custom post types
- Customizer settings
- Responsive design
- Animation effects
- Social media integration

## Credits

- Built with [Bootstrap 5](https://getbootstrap.com/)
- Icons by [Bootstrap Icons](https://icons.getbootstrap.com/)
- Sliders by [Swiper.js](https://swiperjs.com/)

## License

GNU General Public License v2 or later
This theme is free software. You can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

## Support

For support and inquiries, contact: abhishekray7896@gmail.com

## Author

**Abhishek Ray**
- Email: abhishekray7896@gmail.com
- GitHub: abhishekray7896-cloud

---

Thank you for using FlipTrips India! We hope this theme helps you create an amazing travel experience for your customers.
