<div class="ai-resume-builder-container py-5">
    <h2 class="section-title">Here’s how we get you build</h2>

  <div class="row g-4 feature-row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-top-border"></div>
          <div class="feature-icon">📝</div>
          <h5 class="feature-title">Pick a template</h5>
          <ul class="feature-list">
            <li>ATS friendly</li>
            <li>Flexible layouts</li>
            <li>Job and industry match</li>
          </ul>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-top-border"></div>
          <div class="feature-icon">✍️</div>
          <h5 class="feature-title">Add content with AI</h5>
          <ul class="feature-list">
            <li>Words that match what you do</li>
            <li>Edit & enhance with AI</li>
            <li>Quickly tailor for every application</li>
          </ul>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-top-border"></div>
          <div class="feature-icon">📥</div>
          <h5 class="feature-title">Download & send</h5>
          <ul class="feature-list">
            <li>Popular file formats</li>
            <li>Instant digital profile</li>
            <li>Unlimited versions</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="ai-continue-btn-container">
      <button class="ai-continue-btn" onclick="aiResumeBuilderPhase1('/ai-resume-builder-phase-1')">Continue</button>
    </div>
  </div>

  <style>
    .ai-resume-builder-container .section-title {
      font-weight: 700;
      font-size: 2rem;
      text-align: lefe;
      margin-bottom: 2rem;
    }
    .ai-resume-builder-container .feature-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      padding: 30px 20px;
      text-align: left;
      transition: transform 0.2s;
      height: 100%;
    }
    .ai-resume-builder-container .feature-card:hover {
      transform: translateY(-5px);
    }
    .ai-resume-builder-container .feature-icon {
      font-size: 45px;
      margin-bottom: 15px;
    }
    .ai-resume-builder-container .feature-top-border {
      height: 4px;
      background-color: #680e8c; /* Royal Purple top border */
      border-radius: 10px 10px 0 0;
      margin-bottom: 20px;
    }
    .ai-resume-builder-container .feature-title {
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 10px;
    }
    .ai-resume-builder-container .feature-list {
      list-style: none;
      padding-left: 0;
    }
    .ai-resume-builder-container .feature-list li::before {
      content: "✓";
      color: #000;
      margin-right: 8px;
      font-weight: bold;
    }
    /* Keep all three feature cards on a single row. On narrow screens allow horizontal scroll. */
    .ai-resume-builder-container .feature-row {
      display: flex;
      gap: 1rem;
      flex-wrap: nowrap; /* prevent wrapping so all cards stay in one row */
      -webkit-overflow-scrolling: touch;
      padding-bottom: 6px; /* space for scrollbar */
    }
    .ai-resume-builder-container .feature-row .col-md-4 {
      flex: 0 0 33.3333%; /* three equal columns */
      max-width: 33.3333%;
    }
    /* Continue button: right side on larger screens, stacked on small screens */
    .ai-resume-builder-container { position: relative; }
    .ai-continue-btn-container {
      position: absolute;
      right: -34px;
      bottom: -25%;
      transform: translateY(-50%);
      display: flex;
      align-items: center;
      pointer-events: auto;
    }
    .ai-continue-btn {
      background: linear-gradient(90deg, #c39bd3 0%, #6f42c1 100%);
      color: #fff;
      border: none;
      padding: 10px 16px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(111,66,193,0.15);
    }
    .ai-continue-btn:hover { transform: translateY(-1px); }

    /* On very small screens, place the button under the cards and centered */
    @media (max-width: 767.98px) {
      .ai-continue-btn-container {
        position: static;
        transform: none;
        margin-top: 1rem;
        justify-content: center;
      }
    }
  </style>