# FlipTripsIndia WordPress Theme

## Overview

FlipTripsIndia is a modern, production-ready WordPress theme designed specifically for travel agencies, tour operators, and cab booking services in India. Built with Bootstrap 5.3, PHP 8.2+, and WordPress 6.8+, it provides a comprehensive solution for showcasing tours, destinations, fleet management, and facilitating bookings.

## Features

### Core Features
- **Responsive Design**: Fully responsive Bootstrap 5 based layout
- **Hero Slider**: Eye-catching homepage slider with tour highlights
- **Destinations**: Showcase popular travel destinations with regions
- **Tour Packages**: Display tour packages with pricing and details
- **Fleet Management**: Showcase vehicles/cabs with specifications
- **Cab Booking**: Integrated cab booking system
- **Hotel Booking**: Hotel booking functionality
- **Testimonials**: Display customer reviews and testimonials
- **Blog**: Integrated blog with latest travel tips and stories
- **Newsletter**: Email subscription widget
- **WhatsApp Integration**: Floating WhatsApp button
- **Contact Form**: Custom contact form with validation
- **Google Maps**: Location display with maps

### Technical Features
- **SEO Optimized**: Clean markup, proper heading hierarchy
- **Elementor Compatible**: Works seamlessly with Elementor page builder
- **WooCommerce Compatible**: Ready for product integration
- **Customizer Options**: Extensive theme customizer support
- **One-Click Demo Import**: Import sample content
- **Lazy Loading**: Performance optimized image loading
- **Accessibility**: WCAG 2.1 AA compliant
- **Security**: Sanitized inputs, escaped outputs, nonces

### Custom Post Types
- Tours
- Destinations
- Fleet
- Testimonials
- Team Members

### Custom Taxonomies
- Tour Categories
- Destination Regions
- Fleet Types

## Installation

### Requirements
- PHP 8.2 or higher
- WordPress 6.8 or higher
- Bootstrap 5.3

### Steps

1. **Download/Clone the Theme**
   ```bash
   git clone https://github.com/yourusername/FlipTripsIndia.git
   ```

2. **Upload to WordPress**
   - Extract the theme folder to `wp-content/themes/`
   - Or upload via WordPress admin dashboard

3. **Activate Theme**
   - Go to WordPress Admin > Appearance > Themes
   - Locate "FlipTripsIndia" and click Activate

4. **Import Demo Content** (Optional)
   - Go to Appearance > Import Demo Data
   - Follow the wizard to import sample tours, destinations, and more

5. **Configure Theme Settings**
   - Go to Appearance > Customize
   - Configure logo, colors, contact information, and more

## Theme Customizer Options

### Site Identity
- Logo (custom logo upload)
- Site Title and Tagline

### Colors
- Primary Color
- Secondary Color
- Accent Color

### Typography
- Heading Font
- Body Font
- Font Size Options

### Contact Information
- Phone Number
- Email Address
- WhatsApp Number
- Address
- Hours of Operation

### Social Links
- Facebook
- Twitter
- Instagram
- LinkedIn
- YouTube

### Footer
- Footer Text
- Copyright Notice
- Footer Widgets (4 widget areas)

### Booking
- Booking Email Address
- Booking Phone Number
- Terms & Conditions Page

## Widgets

The theme includes custom widgets:

1. **Recent Tours Widget**
   - Displays latest tours
   - Customizable count
   - Optional excerpt

2. **Popular Destinations Widget**
   - Shows featured destinations
   - Region filtering
   - Image display

3. **Contact Info Widget**
   - Display business contact details
   - Opening hours
   - Location map link

4. **Newsletter Widget**
   - Email subscription form
   - Integration-ready

5. **Booking Form Widget**
   - Inline booking form
   - Date picker
   - Validation

## Custom Post Types

### Tours
- Tour name and description
- Duration
- Price
- Location
- Included amenities
- Tour categories
- Featured image

### Destinations
- Destination name and details
- Region taxonomy
- Best time to visit
- Attractions
- Hotels nearby
- Featured image

### Fleet
- Vehicle name and specifications
- Seating capacity
- Fleet type (SUV, Sedan, etc.)
- Amenities
- Daily rate
- Featured image

### Testimonials
- Client name and review
- Rating (1-5 stars)
- Image
- Date

### Team
- Team member name and bio
- Position
- Photo
- Contact details

## Theme Structure

```
FlipTripsIndia/
├── style.css                 # Theme header
├── functions.php             # Main theme functions
├── index.php                 # Fallback template
├── front-page.php            # Homepage template
├── page.php                  # Page template
├── single.php                # Single post template
├── archive.php               # Archive template
├── header.php                # Header template
├── footer.php                # Footer template
├── sidebar.php               # Sidebar template
├── search.php                # Search results template
├── 404.php                   # 404 page template
├── screenshot.png            # Theme screenshot
├── assets/
│   ├── css/
│   │   ├── main.css          # Main stylesheet
│   │   ├── responsive.css    # Responsive styles
│   │   └── animations.css    # Animation styles
│   ├── js/
│   │   ├── main.js           # Main script
│   │   ├── slider.js         # Hero slider
│   │   └── booking.js        # Booking form
│   ├── images/
│   │   ├── logo.png          # Theme logo
│   │   └── placeholder.png   # Placeholder images
│   └── fonts/
│       └── roboto/           # Font files
├── inc/
│   ├── customizer.php        # Theme customizer
│   ├── enqueue.php           # Assets enqueueing
│   ├── post-types.php        # Custom post types
│   ├── ajax.php              # AJAX handlers
│   ├── booking.php           # Booking logic
│   ├── helpers.php           # Helper functions
│   ├── widgets.php           # Custom widgets
│   └── demo.php              # Demo content
├── template-parts/
│   ├── hero.php              # Hero section
│   ├── destinations.php      # Destinations section
│   ├── packages.php          # Packages section
│   ├── fleet.php             # Fleet section
│   ├── testimonials.php      # Testimonials section
│   ├── blog.php              # Blog section
│   ├── cta.php               # Call-to-action
│   ├── contact.php           # Contact section
│   └── whatsapp.php          # WhatsApp button
├── templates/
│   ├── template-booking.php  # Booking page
│   ├── template-contact.php  # Contact page
│   ├── template-about.php    # About page
│   └── template-gallery.php  # Gallery page
└── languages/
    └── fliptrips-india.pot   # Translation file
```

## File Descriptions

### Core Files

**functions.php**
- Main theme setup and configuration
- Loads all include files
- Theme support declarations
- Action and filter hooks

**index.php**
- Default fallback template
- Displays posts with sidebar

**front-page.php**
- Homepage template
- Contains hero slider, destinations, packages, fleet, testimonials

**page.php**
- Standard page template
- Full width and sidebar layouts

**single.php**
- Single post/tour/destination template
- Related posts section

**header.php**
- Site header with navigation
- Logo and search

**footer.php**
- Site footer
- Widget areas
- Social links
- Copyright

### Include Files

**inc/customizer.php**
- Theme customizer registration
- Settings sections and controls
- Live preview support

**inc/enqueue.php**
- CSS and JavaScript enqueueing
- Proper dependency management
- Version control for assets

**inc/post-types.php**
- Custom post type registration
- Taxonomies registration
- Metabox setup

**inc/ajax.php**
- AJAX handlers
- Booking form submission
- Filter operations

**inc/booking.php**
- Booking system logic
- Validation functions
- Email notifications

**inc/helpers.php**
- Utility functions
- Image helpers
- Content formatting

**inc/widgets.php**
- Custom widget classes
- Widget registration

**inc/demo.php**
- Demo content generation
- Sample data creation

### Template Parts

Reusable template components included via `get_template_part()`

## Security

The theme follows WordPress security best practices:

- **Input Sanitization**: All user inputs are sanitized
- **Output Escaping**: All output is properly escaped
- **Nonces**: CSRF protection via WordPress nonces
- **SQL Prepared Statements**: Database queries use prepared statements
- **Capability Checks**: Proper authorization checks
- **Escaping Functions**:
  - `esc_html()` - HTML context
  - `esc_attr()` - Attribute context
  - `esc_url()` - URL context
  - `wp_kses_post()` - Post content
  - `sanitize_text_field()` - Text input
  - `sanitize_email()` - Email input

## Performance

- **Lazy Loading**: Images load on demand
- **Minified Assets**: CSS and JS are minified
- **Optimized Images**: Proper image sizing and formats
- **Proper Enqueueing**: No inline CSS/JS
- **Caching Headers**: Set properly for static assets

## Accessibility

- **WCAG 2.1 AA Compliant**
- **Semantic HTML**: Proper heading hierarchy
- **ARIA Labels**: Screen reader support
- **Keyboard Navigation**: Full keyboard support
- **Color Contrast**: Proper contrast ratios
- **Mobile Accessible**: Touch-friendly interface

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Support

For issues, feature requests, or contributions, please visit:
https://github.com/abhishekray7896-cloud/FlipTripsIndia

## License

GPL v2 or later
See LICENSE file for details

## Changelog

### Version 1.0.0
- Initial release
- Complete theme with all features
- Demo content included
- Full customizer support
