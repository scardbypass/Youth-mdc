<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ibadah Youth GKPB MDC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* ==== GLOBAL ==== */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: radial-gradient(circle at top, #1f2937 0, #020617 60%);
      color: #f9fafb;
    }

    .youth-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px 40px;
    }

    .youth-container {
      width: 100%;
      max-width: 1060px;
      background: linear-gradient(135deg, rgba(15, 23, 42, 0.85), rgba(2, 6, 23, 0.9));
      border-radius: 32px;
      border: 1px solid rgba(148, 163, 184, 0.35);
      box-shadow:
        0 18px 45px rgba(15, 23, 42, 0.65),
        0 0 0 1px rgba(15, 23, 42, 0.9);
      overflow: hidden;
      position: relative;
      backdrop-filter: blur(24px);
    }

    /* ==== GLOW ORB BACKGROUND (iOS feel) ==== */
    .youth-container::before,
    .youth-container::after {
      content: "";
      position: absolute;
      width: 260px;
      height: 260px;
      border-radius: 999px;
      filter: blur(42px);
      opacity: 0.75;
      pointer-events: none;
      z-index: 0;
    }

    .youth-container::before {
      background: radial-gradient(circle at center, #38bdf8, transparent 65%);
      top: -80px;
      left: -40px;
    }

    .youth-container::after {
      background: radial-gradient(circle at center, #a855f7, transparent 70%);
      bottom: -120px;
      right: -20px;
    }

    .youth-inner {
      position: relative;
      z-index: 1;
      padding: 18px 18px 20px;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }

    /* ==== MARQUEE BANNER – TEKS BERJALAN ==== */
    .youth-marquee-wrapper {
      position: relative;
      border-radius: 999px;
      padding: 2px;
      background: linear-gradient(90deg, #38bdf8, #e5e7eb, #a855f7, #38bdf8);
      overflow: hidden;
    }

    .youth-marquee-inner {
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
      padding: 6px 0;
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .youth-marquee-label {
      flex: 0 0 auto;
      margin-left: 14px;
      padding: 4px 10px;
      border-radius: 999px;
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 0.11em;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(148, 163, 184, 0.5);
      color: #e5e7eb;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .youth-marquee-label-dot {
      width: 7px;
      height: 7px;
      border-radius: 999px;
      background: #22c55e;
      box-shadow: 0 0 12px rgba(34, 197, 94, 0.9);
    }

    .youth-marquee-track {
      overflow: hidden;
      flex: 1;
      position: relative;
      mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
      -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .youth-marquee-content {
      display: inline-flex;
      min-width: 200%;
      white-space: nowrap;
      animation: marquee-slide 22s linear infinite;
      font-size: 13px;
      color: #e5e7eb;
      opacity: 0.95;
    }

    .youth-marquee-segment {
      padding-right: 48px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .youth-marquee-segment span.icon {
      font-size: 14px;
      transform: translateY(0.5px);
    }

    @keyframes marquee-slide {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(-50%);
      }
    }

    /* Kurangi animasi untuk yang pakai reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .youth-marquee-content {
        animation: none;
      }
    }

    /* ==== MAIN CONTENT ==== */
    .youth-main {
      display: grid;
      grid-template-columns: minmax(0, 1.1fr) minmax(0, 1fr);
      gap: 20px;
      padding: 6px 4px 4px;
    }

    /* ==== LEFT: TEXT ==== */
    .youth-left {
      padding: 14px 10px 12px 6px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      justify-content: center;
    }

    .youth-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .youth-badge {
      font-size: 11px;
      padding: 4px 10px;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.7);
      background: linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(30, 64, 175, 0.7));
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #e5e7eb;
    }

    .youth-badge-emoji {
      font-size: 13px;
    }

    .youth-title {
      font-size: clamp(22px, 3.2vw, 30px);
      font-weight: 700;
      letter-spacing: -0.04em;
      line-height: 1.1;
      color: #f9fafb;
      text-shadow: 0 0 12px rgba(15, 23, 42, 0.75);
    }

    .youth-title span.highlight {
      background: linear-gradient(135deg, #38bdf8, #a855f7, #f97316);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .youth-subtitle {
      font-size: 13px;
      line-height: 1.5;
      color: #e5e7eb;
      max-width: 460px;
      opacity: 0.9;
    }

    .youth-info-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 10px;
      margin-top: 6px;
      font-size: 12px;
    }

    .youth-info-item {
      padding: 8px 9px;
      border-radius: 14px;
      background: radial-gradient(circle at top left, rgba(148, 163, 184, 0.3), rgba(15, 23, 42, 0.7));
      border: 1px solid rgba(148, 163, 184, 0.45);
    }

    .youth-info-label {
      font-size: 11px;
      color: #cbd5f5;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      opacity: 0.85;
    }

    .youth-info-value {
      margin-top: 2px;
      font-size: 13px;
      font-weight: 600;
      color: #f9fafb;
    }

    .youth-cta-row {
      margin-top: 8px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }

    .youth-btn-primary {
      position: relative;
      border: none;
      border-radius: 999px;
      padding: 9px 18px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.02em;
      cursor: pointer;
      color: #020617;
      background: linear-gradient(135deg, #38bdf8, #a855f7);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow:
        0 12px 24px rgba(56, 189, 248, 0.3),
        0 0 0 1px rgba(15, 23, 42, 0.6);
      overflow: hidden;
    }

    .youth-btn-primary::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(120deg, rgba(255, 255, 255, 0.3), transparent, transparent);
      transform: translateX(-100%);
      transition: transform 0.6s ease;
    }

    .youth-btn-primary:hover::before {
      transform: translateX(100%);
    }

    .youth-btn-primary span.icon {
      font-size: 16px;
      transform: translateY(0.5px);
    }

    .youth-btn-secondary {
      font-size: 11px;
      color: #cbd5f5;
      display: inline-flex;
      align-items: center;
      gap: 4px;
      opacity: 0.9;
    }

    .youth-btn-secondary span.icon {
      transform: translateY(0.4px);
      font-size: 13px;
    }

    /* ==== RIGHT: IMAGE CARD ==== */
    .youth-right {
      padding: 10px 6px 6px 4px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .youth-card {
      position: relative;
      width: 100%;
      max-width: 360px;
      aspect-ratio: 3 / 4;
      border-radius: 28px;
      overflow: hidden;
      background: radial-gradient(circle at top left, #38bdf8, #020617);
      box-shadow:
        0 16px 40px rgba(15, 23, 42, 0.9),
        0 0 0 1px rgba(148, 163, 184, 0.4);
      transform: translateY(0);
      transition: transform 0.45s cubic-bezier(0.19, 1, 0.22, 1);
    }

    .youth-card:hover {
      transform: translateY(-4px);
    }

    .youth-card-img {
      position: absolute;
      inset: 0;
      background-image: url("https://images.pexels.com/photos/167636/pexels-photo-167636.jpeg?auto=compress&cs=tinysrgb&w=1200");
      background-size: cover;
      background-position: center;
      filter: saturate(1.2);
      transform: scale(1.04);
    }

    .youth-card-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(15, 23, 42, 0.9) 0, rgba(15, 23, 42, 0.1) 55%, transparent);
    }

    .youth-card-top-tag {
      position: absolute;
      top: 10px;
      right: 10px;
      padding: 4px 10px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.7);
      border: 1px solid rgba(148, 163, 184, 0.7);
      font-size: 10px;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: #e5e7eb;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .youth-card-top-tag-dot {
      width: 6px;
      height: 6px;
      border-radius: 999px;
      background: #22c55e;
      box-shadow: 0 0 10px rgba(34, 197, 94, 0.9);
    }

    .youth-card-bottom {
      position: absolute;
      left: 14px;
      right: 14px;
      bottom: 14px;
      padding: 12px 12px 11px;
      border-radius: 20px;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(148, 163, 184, 0.6);
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
    }

    .youth-card-title {
      font-size: 15px;
      font-weight: 700;
      letter-spacing: -0.03em;
      color: #f9fafb;
    }

    .youth-card-meta {
      margin-top: 4px;
      font-size: 11px;
      color: #e5e7eb;
      opacity: 0.9;
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .youth-card-pill-row {
      margin-top: 6px;
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      font-size: 10px;
    }

    .youth-card-pill {
      padding: 3px 8px;
      border-radius: 999px;
      background: rgba(30, 64, 175, 0.9);
      color: #e5e7eb;
    }

    .youth-card-pill-alt {
      padding: 3px 8px;
      border-radius: 999px;
      background: rgba(148, 163, 184, 0.25);
      color: #e5e7eb;
    }

    /* ==== RESPONSIVE ==== */
    @media (max-width: 768px) {
      .youth-main {
        grid-template-columns: minmax(0, 1fr);
      }
      .youth-left {
        padding-right: 6px;
      }
      .youth-right {
        padding-top: 6px;
      }
      .youth-card {
        max-width: 100%;
      }
      .youth-info-grid {
        grid-template-columns: minmax(0, 1fr);
      }
    }
    
        /* ==================================================== */
    /* POSTER NEON IOS 26 (CSS BARU – TIDAK MENGGANGGU CSS DI ATAS) */
    /* ==================================================== */

    .poster-section {
      margin-top: 40px;
      padding: 0 6px 10px;
    }

    .poster-scroll {
      display: flex;
      gap: 20px;
      overflow-x: auto;
      padding: 10px 4px;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
    }

    .poster-card {
      flex: 0 0 260px;
      scroll-snap-align: start;
      border-radius: 24px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.13);
      backdrop-filter: blur(16px);
      overflow: hidden;
      box-shadow: 0 0 25px rgba(0,225,255,0.25),
                  0 0 35px rgba(255,0,255,0.22);
    }

    .poster-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    
    .copyright {
  text-align: center;
  margin-top: 30px;
  padding: 12px 0;
  font-size: 0.8rem;
  opacity: 0.7;
  color: #e5e7eb;
}

.copyright a {
  color: #38bdf8;
  text-decoration: none;
  font-weight: 600;
  background: linear-gradient(90deg,#00eaff,#b43bff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.copyright a:hover {
  opacity: 1;
}
  </style>
</head>
<body>

<section class="youth-section">
  <div class="youth-container">
    <div class="youth-inner">
      <!-- MARQUEE / TEKS BERJALAN -->
      <div class="youth-marquee-wrapper">
        <div class="youth-marquee-inner">
          <div class="youth-marquee-label">
            <span class="youth-marquee-label-dot"></span>
            <span>GKPB MDC • Info Youth</span>
          </div>
          <div class="youth-marquee-track" aria-hidden="true">
            <div class="youth-marquee-content">
              <div class="youth-marquee-segment">
                <span class="icon">✨</span>
                <span>Youth GKPB MDC — stay tuned setiap Sabtu!</span>
              </div>
              <div class="youth-marquee-segment">
                <span class="icon">🎧</span>
                <span>Ibadah penuh pujian & penyembahan, firman yang relevan, dan komunitas yang hangat.</span>
              </div>
              <div class="youth-marquee-segment">
                <span class="icon">📍</span>
                <span>Yuk Datang bersama temanmu, jangan lupa .</span>
              </div>
              <!-- Duplikasi untuk efek loop -->
              <div class="youth-marquee-segment">
                <span class="icon">✨</span>
                <span>stay tuned setiap Sabtu!</span>
              </div>
              <div class="youth-marquee-segment">
                <span class="icon">🎧</span>
                <span>Ibadah penuh pujian & penyembahan, firman yang relevan, dan komunitas yang hangat.</span>
              </div>
              <div class="youth-marquee-segment">
                <span class="icon">📍</span>
                <span>Datang bersama temanmu, Enjoy gaes.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MAIN CONTENT -->
      <div class="youth-main">
        <!-- LEFT SIDE: TEXT & BUTTON -->
        <div class="youth-left">
          <div class="youth-badge-row">
            <div class="youth-badge">
              <span class="youth-badge-emoji">🔥</span>
              <span>Youth Service • Setiap Sabtu</span>
            </div>
            <div class="youth-badge">
              <span class="youth-badge-emoji">🎵</span>
              <span>Worship • Word • Community</span>
            </div>
          </div>

          <h1 class="youth-title">
            Ibadah <span class="highlight">Youth</span><br>
            GKPB MDC Jombang
          </h1>

          <p class="youth-subtitle">
            Ruang buat generasi muda bertumbuh dalam iman, karakter, dan komunitas. 
            Datang apa adanya, pulang bawa perubahan. Ajak teman-temanmu Ibadah bersama kami!
          </p>

          <div class="youth-info-grid">
            <div class="youth-info-item">
              <div class="youth-info-label">Hari & Waktu</div>
              <div class="youth-info-value">Setiap Sabtu • 17.00 WIB</div>
            </div>
            <div class="youth-info-item">
              <div class="youth-info-label">Lokasi</div>
              <div class="youth-info-value">GKPB MDC Jombang</div>
            </div>
            <div class="youth-info-item">
              <div class="youth-info-label">Usia</div>
              <div class="youth-info-value">Remaja & Pemuda • 13–25 Tahun</div>
            </div>
            <div class="youth-info-item">
              <div class="youth-info-label">Dress Code</div>
              <div class="youth-info-value">Casual & Sopan</div>
            </div>
          </div>

          <div class="youth-cta-row">
            <!-- GANTI href DENGAN LINK FORM PENDAFTARAN -->
            <a href="https://www.instagram.com/mdc_youth.jombang?igsh=Z29rMDQ3ZGd2Y3Js" target="_blank" rel="noopener">
              <button class="youth-btn-primary">
                <span class="icon"> </span>
                <span>Instaggram</span>
              </button>
            </a>
            <div class="youth-btn-secondary">
              <span class="icon">👋</span>
              <span>Boleh datang on-site,kak</span>
            </div>
          </div>
        </div>


      <!-- ==================== -->
      <!-- POSTER NEON IOS 26   -->
      <!-- ==================== -->

      <section class="poster-section">
        <h2 style="
          text-align:center;
          font-size:1.6rem;
          margin-bottom:18px;
          background:linear-gradient(90deg,#00eaff,#b43bff);
          -webkit-background-clip:text;
          -webkit-text-fill-color:transparent;">
          Infomasi Kegiatan Youth MDC Jombang
        </h2>

        <div class="poster-scroll">

          <!-- POSTER 1 -->
          <div class="poster-card">
            <img src="https://images.pexels.com/photos/167636/pexels-photo-167636.jpeg">
            <div style="padding:15px;">
              <div style="
                font-weight:700;
                background:linear-gradient(90deg,#00eaff,#b43bff);
                -webkit-background-clip:text;
                -webkit-text-fill-color:transparent;">
                Ibadah Natal 2025
              </div>
              <p style="opacity:0.9;font-size:0.85rem;">
                Minggu 21-Des • 16.00 WIB<br>Lokasi MDC Jombang
              </p>
            </div>
<a href="https://www.instagram.com/mdc.jombang?igsh=Y2RhaGd0d3A4cHVh" target="_blank" rel="noopener">
              <button class="youth-btn-primary">
                <span class="icon">📝</span>
                <span>Register</span>
          </div>

          <!-- POSTER 2 -->
          <div class="poster-card">
            <img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg">
            <div style="padding:15px;">
              <div style="
                font-weight:700;
                background:linear-gradient(90deg,#00eaff,#b43bff);
                -webkit-background-clip:text;
                -webkit-text-fill-color:transparent;">
                Rise & Shine Youth Night
              </div>
              <p style="opacity:0.9;font-size:0.85rem;">
                Tema penuh energi & pembelajaran
              </p>
            </div>
<a href="https://contoh-link-form-daftar.com" target="_blank" rel="noopener">
              <button class="youth-btn-primary">
                <span class="icon">📝</span>
                <span>Ibadah Youth</span>
          </div>

          <!-- POSTER 3 -->
          <div class="poster-card">
            <img src="https://images.pexels.com/photos/1763073/pexels-photo-1763073.jpeg">
            <div style="padding:15px;">
              <div style="
                font-weight:700;
                background:linear-gradient(90deg,#00eaff,#b43bff);
                -webkit-background-clip:text;
                -webkit-text-fill-color:transparent;">
                Komunitas Youth
              </div>
              <p style="opacity:0.9;font-size:0.85rem;">
                Bertumbuh dalam komunitas positif
              </p>
            </div>
<a href="https://contoh-link-form-daftar.com" target="_blank" rel="noopener">
              <button class="youth-btn-primary">
                <span class="icon">📝</span>
                <span> Youth</span>
          </div>
</section>
<div class="copyright">
  © 2025 <a href="https://www.instagram.com/scardproject?igsh=MXViamZnbGp3aWw3bg==" target="_blank">GKPB MDC Jombang Youth</a> • By SCARD-PROJECT
</div>

</body>
</html>
