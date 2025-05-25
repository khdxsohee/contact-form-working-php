# 📬 Simple Contact Form PHP (Using mail() Function) ✉️

A clean, modern contact form built with PHP using the **native mail() function**.  
Perfect for hosting on cPanel where mail server is configured.  
Stylish glassmorphism design included! 💻✨

---

## 🚀 Features

- 🎨 Responsive glassmorphism UI  
- 📧 Sends emails using built-in PHP mail() function  
- ✅ Validates required fields (Name, Email, Phone, Message)  
- ✔️ User-friendly success & error messages  
- 🔧 Easy setup and deployment on any cPanel hosting

---

## 🛠️ Installation Guide (cPanel Hosting)

Follow these easy steps to deploy your contact form on cPanel hosting:

### 1️⃣ Upload Your Files

- Log in to your **cPanel** dashboard.  
- Go to **File Manager** and navigate to `public_html` or your site root directory.  
- Upload all your project files (`index.html` or `index.php` and `mail_handler.php`).  
- Make sure files are placed correctly.

---

### 2️⃣ Configure Your Contact Form

- Edit `mail_handler.php` if you want to change recipient email:  
  ```php
  $to = 'your-email@example.com';  // Change to your email

  ---
  3️⃣ Test the Form
Visit your website URL (e.g., https://yourdomain.com/index.php).

Fill in the form and submit.

Check the recipient inbox to verify message delivery.

---
4️⃣ Troubleshooting
⚠️ If emails don't arrive:

Check with your hosting provider if mail() function is enabled.

Some hosts block or limit mail() for spam protection.

Verify spam/junk folder in your email.

Contact hosting support if necessary.

---
🎨 Customize
🎨 Modify CSS in your form file for style changes.

✏️ Change success/error messages inside mail_handler.php.

📧 Update email recipient as needed.

---
📜 License
Licensed under the MIT License — see LICENSE for details.
---
✍️ Author
Created by [khdxsohee]
💻 GitHub: https://github.com/khdxsohee
