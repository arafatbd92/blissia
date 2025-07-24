# Bliss International Academy Website

A modern, responsive school website built with HTML, CSS, Bootstrap, and JavaScript featuring beautiful animations and transition effects.

## 🌟 Features

### Design & Layout
- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI**: Clean, professional design with gradient backgrounds
- **Bootstrap 5**: Latest Bootstrap framework for responsive components
- **Font Awesome Icons**: Beautiful icons throughout the interface

### Interactive Elements
- **Smooth Scrolling**: Navigation links smoothly scroll to sections
- **Hover Effects**: Interactive hover animations on buttons and links
- **CSS Transitions**: Smooth transitions on all interactive elements
- **Scroll Animations**: Elements animate as they come into view

### Topbar Section
- Contact information with phone and email
- Social media icons (YouTube, WhatsApp, Facebook)
- Teacher and Student login buttons
- Hover effects and click animations

### Navigation Bar
- School logo with geometric design
- Responsive navigation menu
- Scroll-based navbar styling
- Mobile-friendly hamburger menu

### Hero Slider
- **Spelling Bee 2023-24** themed slider
- Animated bee decorations and characters
- Student and teacher representations
- Award sashes and graduation elements
- Auto-playing carousel with manual controls

### Animations & Effects
- **Floating Animations**: Bee decorations float up and down
- **Bounce Effects**: Bee character bounces continuously
- **Pulse Animations**: Award sashes pulse to draw attention
- **Slide-in Effects**: Text elements slide in from bottom
- **Parallax Scrolling**: Background elements move at different speeds

## 🛠️ Technologies Used

- **HTML5**: Semantic markup structure
- **CSS3**: Modern styling with animations and transitions
- **Bootstrap 5**: Responsive framework and components
- **JavaScript (ES6+)**: Interactive functionality and animations
- **Font Awesome 6**: Icon library

## 📁 File Structure

```
blissia/
├── index.html          # Main HTML file
├── styles.css          # CSS styles and animations
├── script.js           # JavaScript functionality
└── README.md           # Project documentation
```

## 🚀 Getting Started

1. **Clone or Download** the project files
2. **Open** `index.html` in your web browser
3. **Enjoy** the interactive school website!

### Local Development

For local development, you can use any of these methods:

#### Method 1: Direct File Opening
Simply double-click `index.html` to open in your default browser.

#### Method 2: Live Server (Recommended)
If you have VS Code:
1. Install the "Live Server" extension
2. Right-click on `index.html`
3. Select "Open with Live Server"

#### Method 3: Python HTTP Server
```bash
# Python 3
python -m http.server 8000

# Python 2
python -m SimpleHTTPServer 8000
```
Then visit `http://localhost:8000`

#### Method 4: Node.js HTTP Server
```bash
# Install http-server globally
npm install -g http-server

# Run server
http-server
```

## 🎨 Customization

### Colors
The website uses a consistent color scheme:
- **Primary Blue**: `#1e3c72` to `#2a5298`
- **Accent Orange**: `#ff6b35` to `#e55a2b`
- **Light Blue**: `#87CEEB` to `#B0E0E6`

### Modifying Content
- **School Information**: Update contact details in the topbar
- **Navigation**: Modify menu items in the navbar
- **Slider Content**: Change slider text and themes
- **Sections**: Add or modify content sections

### Adding New Sections
1. Add HTML structure in `index.html`
2. Style with CSS in `styles.css`
3. Add scroll animations in `script.js`

## 📱 Responsive Breakpoints

- **Desktop**: 1200px and above
- **Tablet**: 768px to 1199px
- **Mobile**: Below 768px
- **Small Mobile**: Below 576px

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## ⚡ Performance Features

- **Optimized Animations**: Hardware-accelerated CSS transforms
- **Throttled Scroll Events**: Smooth performance during scrolling
- **Lazy Loading**: Elements animate only when visible
- **Minimal Dependencies**: Only Bootstrap and Font Awesome CDN

## 🎯 Key Features Explained

### CSS Transitions
All interactive elements feature smooth transitions:
```css
.nav-link, .btn, .social-icon {
    transition: all 0.3s ease;
}
```

### Animation Keyframes
Custom animations for various effects:
```css
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}
```

### JavaScript Interactions
Enhanced user experience with:
- Smooth scrolling navigation
- Scroll-based navbar effects
- Interactive hover and click animations
- Carousel enhancements
- Keyboard navigation support

## 🔧 Troubleshooting

### Common Issues

1. **Animations not working**: Ensure JavaScript is enabled
2. **Responsive issues**: Check viewport meta tag
3. **Font Awesome icons missing**: Check internet connection for CDN
4. **Bootstrap not loading**: Verify CDN links are accessible

### Performance Tips

1. **Optimize images**: Use compressed images for better loading
2. **Minimize CSS**: Remove unused styles
3. **Bundle JavaScript**: Combine scripts for production
4. **Use CDN**: Leverage CDN for faster loading

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📞 Support

For support or questions, please contact:
- **Phone**: +880 1763592449
- **Email**: info@wheaton.edu.bd

---

**Built with ❤️ for Bliss International Academy** 