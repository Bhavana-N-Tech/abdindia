# AB&D Software — Visual Card Image Assets

This directory contains the background photo assets used for the premium, photo-based visual cards in the **Solutions & Services** section of `services.php`.

## Image Reference List

To customize the visual card backgrounds, replace these placeholders with your actual licensed images (recommended size: `800x600px` or `600x400px` in JPG format, optimized for web):

1. **Software Licensing & Procurement**
   - Filename: `service-licensing.jpg`
   - Content suggestion: Clean software dashboard, licensing interface, or modern office workstation.

2. **Cybersecurity Solutions**
   - Filename: `service-cybersecurity.jpg`
   - Content suggestion: Cyber security themes, shields, secure networks, or digital lock vectors.

3. **Cloud & Infrastructure Solutions**
   - Filename: `service-cloud.jpg`
   - Content suggestion: Cloud servers, data center racks, or server networking equipment.

4. **Developer Tools & Application Software**
   - Filename: `service-developer-tools.jpg`
   - Content suggestion: IDE screens, programming code, or developer workspace set-ups.

5. **Document & Data Automation**
   - Filename: `service-document-automation.jpg`
   - Content suggestion: Workflows, document file processing, or automated data flow diagrams.

6. **Managed Support & Renewal Services**
   - Filename: `service-support.jpg`
   - Content suggestion: Tech support, helpdesk, customer service interaction, or customer dashboard.

7. **IT Asset & Vendor Management**
   - Filename: `service-asset-management.jpg`
   - Content suggestion: Server storage inventory, enterprise assets, or vendor planning boards.

8. **IT Consulting & Advisory**
   - Filename: `service-consulting.jpg`
   - Content suggestion: Corporate strategy meetings, whiteboard planning, or advisory sessions.

---

## How It Works

- The cards load these files using inline CSS variables (`--card-img: url('assets/images/service-*.jpg')`).
- If an image file is missing, the CSS fallbacks automatically render styled brand gradient filters and tech-themed background grid overlays. No broken image icons will be displayed to the user.
