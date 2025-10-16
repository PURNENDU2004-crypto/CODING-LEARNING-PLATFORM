<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Settings - CodeLearn</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f5f7fa;
    }

    /* Navbar/Header */
    .header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .header h1 {
      font-size: 26px;
    }

    .back-btn {
      background: rgba(255,255,255,0.2);
      border: none;
      color: white;
      padding: 10px 18px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 500;
      transition: background 0.3s;
    }

    .back-btn:hover {
      background: rgba(255,255,255,0.35);
    }

    /* Settings Page */
    .settings-container {
      max-width: 900px;
      margin: 50px auto;
      background: white;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .settings-section {
      margin-bottom: 40px;
    }

    .settings-section h2 {
      font-size: 22px;
      color: #444;
      border-left: 5px solid #667eea;
      padding-left: 10px;
      margin-bottom: 20px;
    }

    .setting-item {
      margin-bottom: 20px;
    }

    .setting-item label {
      display: block;
      font-weight: 600;
      color: #333;
      margin-bottom: 6px;
    }

    .setting-item input,
    .setting-item select {
      width: 100%;
      padding: 10px 14px;
      border-radius: 6px;
      border: 1px solid #ccc;
      outline: none;
      transition: border 0.3s;
    }

    .setting-item input:focus,
    .setting-item select:focus {
      border-color: #667eea;
    }

    /* Toggle Switch */
    .toggle {
      position: relative;
      width: 50px;
      height: 26px;
      display: inline-block;
    }

    .toggle input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      transition: 0.4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 20px;
      width: 20px;
      left: 3px;
      bottom: 3px;
      background-color: white;
      transition: 0.4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color: #667eea;
    }

    input:checked + .slider:before {
      transform: translateX(24px);
    }

    /* Save button */
    .save-btn {
      display: inline-block;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .save-btn:hover {
      transform: scale(1.05);
    }

    /* Dark mode styles */
    body.dark {
      background: #1e1e2f;
      color: #f0f0f0;
    }

    body.dark .settings-container {
      background: #2b2b3c;
      color: #f0f0f0;
    }

    body.dark input,
    body.dark select {
      background: #3a3a4c;
      color: white;
      border-color: #555;
    }

    @media (max-width: 600px) {
      .settings-container {
        padding: 25px;
      }

      .header {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header">
    <h1>⚙️ Settings</h1>
    <button class="back-btn" onclick="window.location.href='home.php'">← Back to Home</button>
  </header>

  <!-- Settings Content -->
  <div class="settings-container">
    
    <!-- Account Settings -->
    <div class="settings-section">
      <h2>Account Settings</h2>
      <div class="setting-item">
        <label for="username">Full Name</label>
        <input type="text" id="username" placeholder="Enter your name">
      </div>
      <div class="setting-item">
        <label for="email">Email Address</label>
        <input type="email" id="email" placeholder="Enter your email">
      </div>
      <div class="setting-item">
        <label for="password">Change Password</label>
        <input type="password" id="password" placeholder="Enter new password">
      </div>
    </div>

    <!-- Privacy Settings -->
    <div class="settings-section">
      <h2>Privacy Settings</h2>
      <div class="setting-item">
        <label>Show Profile Publicly</label>
        <label class="toggle">
          <input type="checkbox" id="publicProfile">
          <span class="slider"></span>
        </label>
      </div>
      <div class="setting-item">
        <label>Allow Messages from Others</label>
        <label class="toggle">
          <input type="checkbox" id="allowMessages" checked>
          <span class="slider"></span>
        </label>
      </div>
    </div>

    <!-- Notification Settings -->
    <div class="settings-section">
      <h2>Notification Settings</h2>
      <div class="setting-item">
        <label>Email Notifications</label>
        <label class="toggle">
          <input type="checkbox" id="emailNotif" checked>
          <span class="slider"></span>
        </label>
      </div>
      <div class="setting-item">
        <label>Push Notifications</label>
        <label class="toggle">
          <input type="checkbox" id="pushNotif">
          <span class="slider"></span>
        </label>
      </div>
    </div>

    <!-- Theme Settings -->
    <div class="settings-section">
      <h2>Theme Settings</h2>
      <div class="setting-item">
        <label>Dark Mode</label>
        <label class="toggle">
          <input type="checkbox" id="darkMode">
          <span class="slider"></span>
        </label>
      </div>
    </div>

    <!-- Save Button -->
    <button class="save-btn">💾 Save Changes</button>
  </div>

  <script>
    // Dark mode toggle
    const darkToggle = document.getElementById("darkMode");
    darkToggle.addEventListener("change", () => {
      document.body.classList.toggle("dark", darkToggle.checked);
    });
  </script>
</body>
</html>
