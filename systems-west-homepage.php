<?php
// ── PAGE CONFIG ───────────────────────────────────────────
$page_title       = 'Steel Building Construction Guide | Systems West Inc.';
$meta_description = 'Systems West Inc. delivers a complete steel building construction guide — from planning and design to steel erection and final inspection. Serving Hutchinson, Litchfield, Willmar, and St. Cloud, MN.';
$site_url         = 'https://systemswestinc.com';
$phone_display    = '320-693-8779';
$phone_href       = 'tel:3206938779';
$contact_url      = $site_url . '/contact/';

// ── STATS ─────────────────────────────────────────────────
$stats = [
    ['num' => '200', 'sup' => '+', 'label' => 'Projects Completed'],
    ['num' => '58',  'sup' => '+', 'label' => 'Years in Business'],
    ['num' => '21',  'sup' => '+', 'label' => 'Team Members'],
    ['num' => '3',   'sup' => 'rd','label' => 'Generation Family Business'],
];

// ── STEPS ─────────────────────────────────────────────────
$steps = [
    ['num'=>'01','title'=>'Planning &amp; Feasibility',       'body'=>'Before any steel is ordered, we sit down with you to understand your use case, site constraints, local codes, and long-term goals. We assess soil conditions, drainage, access points, and zoning requirements — giving you a realistic picture of total project cost from day one.'],
    ['num'=>'02','title'=>'Design &amp; Engineering',         'body'=>'Systems West partners with Butler Manufacturing, the world\'s leading pre-engineered steel building manufacturer. Our design team finalizes square footage, clear-span dimensions, roof pitch, door and window placement, insulation systems, and structural load requirements. Every detail is engineered before a single bolt is ordered.'],
    ['num'=>'03','title'=>'Permitting &amp; Approvals',       'body'=>'Navigating permits is one of the most frustrating parts of any construction project. Our team handles the permitting process on your behalf, coordinating with local building departments to get approvals in place before work begins. This keeps your project on schedule and protects you from compliance issues.'],
    ['num'=>'04','title'=>'Site Preparation',                 'body'=>'A properly prepared site is the foundation of a successful steel building project. Systems West manages excavation, grading, and concrete work to ensure your building goes up level, stable, and ready to perform for decades. Cutting corners here creates structural problems that are expensive to fix.'],
    ['num'=>'05','title'=>'Steel Fabrication &amp; Erection', 'body'=>'Your pre-engineered Butler steel building components arrive pre-cut and ready for assembly. Our experienced crews handle steel erection with precision, following engineered drawings and safety protocols. Systems West also provides crane services and equipment rental to support large-span structures and specialty lifts.'],
    ['num'=>'06','title'=>'Interior Buildout',                'body'=>'Once the shell is complete, we transition to interior work including insulation, mechanical rough-ins, interior framing, doors, and finishes. Whether your project is a bare industrial shell or a finished commercial space, our team carries the work from steel frame to move-in ready.'],
    ['num'=>'07','title'=>'Final Inspections',                'body'=>'We do not hand over a building until it passes every required inspection and meets our own quality standards. Your project closes with a walk-through, a review of all systems, and documentation you can rely on for future maintenance and insurance purposes.'],
];

// ── BUILDING TYPES ────────────────────────────────────────
$building_types = [
    'Agricultural Buildings',
    'Aircraft Hangars',
    'Industrial Manufacturing',
    'Office &amp; Retail Buildings',
    'Community &amp; Worship Spaces',
    'Transportation Structures',
    'Re-Roof Solutions',
    'Remodel &amp; Renovation',
];

// ── TRUST PILLARS ─────────────────────────────────────────
$trust_items = [
    ['title'=>'Commitment to Quality',      'body'=>'Every build is reviewed against our internal standards before it leaves our hands. No shortcuts, no exceptions.'],
    ['title'=>'Trust and Integrity',        'body'=>'Third-generation family ownership means our reputation rides on every project we complete. We operate accordingly.'],
    ['title'=>'Decades of Experience',      'body'=>'Over 58 years in commercial and agricultural steel building construction across Minnesota and the wider Midwest.'],
    ['title'=>'Turnkey Delivery',           'body'=>'From design and permitting to steel erection, interior buildout, and final inspection — one team, one point of contact.'],
    ['title'=>'Butler Manufacturing Partner','body'=>'Certified Butler Builder since 1967. The products we install are the products we know, trust, and stand behind.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

  <style>
    :root {
      --steel:    #1C2B3A;
      --iron:     #2E4057;
      --rust:     #C8460A;
      --rust-lt:  #E05A1A;
      --fog:      #F2F4F6;
      --white:    #FFFFFF;
      --body-txt: #3A3A3A;
      --muted:    #6B7280;
      --font-display: 'Barlow Condensed', sans-serif;
      --font-body:    'Inter', sans-serif;
      --max-w: 1140px;
      --radius: 4px;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: var(--font-body); color: var(--body-txt); background: var(--white); line-height: 1.65; font-size: 16px; }
    img { display: block; max-width: 100%; }
    a   { color: inherit; text-decoration: none; }
    .container { max-width: var(--max-w); margin: 0 auto; padding: 0 24px; }

    /* TOPBAR */
    .topbar { background: var(--steel); padding: 10px 24px; display: flex; align-items: center; justify-content: space-between; font-family: var(--font-display); font-size: 14px; letter-spacing: 0.04em; color: rgba(255,255,255,0.70); }
    .topbar a { color: var(--rust-lt); }
    .topbar span a { color: var(--white); font-weight: 600; letter-spacing: 0.06em; }
    .topbar span a:hover { color: var(--rust-lt); }
    .topbar span + span::before { content: "·"; margin: 0 10px; }

    /* HERO */
    .hero { background: var(--steel); position: relative; overflow: hidden; padding: 80px 24px 72px; }
    .hero::before { content: ''; position: absolute; inset: 0; background: repeating-linear-gradient(90deg, transparent, transparent 119px, rgba(255,255,255,0.035) 119px, rgba(255,255,255,0.035) 120px); pointer-events: none; }
    .hero-inner { max-width: var(--max-w); margin: 0 auto; position: relative; z-index: 1; }
    .hero-eyebrow { display: inline-block; font-family: var(--font-display); font-size: 13px; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--rust-lt); border-left: 3px solid var(--rust); padding-left: 12px; margin-bottom: 22px; }
    .hero h1 { font-family: var(--font-display); font-size: clamp(38px, 6vw, 68px); font-weight: 800; line-height: 1.05; color: var(--white); text-transform: uppercase; max-width: 820px; margin-bottom: 22px; }
    .hero h1 em { font-style: normal; color: var(--rust-lt); }
    .hero-sub { font-size: 17px; color: rgba(255,255,255,0.72); max-width: 620px; margin-bottom: 36px; line-height: 1.7; }
    .hero-cta { display: inline-block; background: var(--rust); color: var(--white); font-family: var(--font-display); font-weight: 700; font-size: 15px; letter-spacing: 0.1em; text-transform: uppercase; padding: 14px 32px; border-radius: var(--radius); transition: background 0.2s; }
    .hero-cta:hover { background: var(--rust-lt); }
    .hero-stats { display: flex; gap: 40px; margin-top: 52px; padding-top: 36px; border-top: 1px solid rgba(255,255,255,0.12); flex-wrap: wrap; }
    .stat-item { text-align: left; }
    .stat-num { font-family: var(--font-display); font-size: 42px; font-weight: 800; color: var(--white); line-height: 1; }
    .stat-num span { color: var(--rust-lt); }
    .stat-label { font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: rgba(255,255,255,0.50); margin-top: 4px; }

    /* INTRO */
    .intro { padding: 72px 24px; background: var(--white); }
    .section-eyebrow { font-family: var(--font-display); font-size: 12px; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--rust); margin-bottom: 14px; }
    .section-heading { font-family: var(--font-display); font-size: clamp(26px, 4vw, 40px); font-weight: 800; text-transform: uppercase; color: var(--steel); line-height: 1.1; margin-bottom: 20px; }
    .intro-grid { max-width: var(--max-w); margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: start; }
    .intro-grid p { color: var(--body-txt); font-size: 15.5px; line-height: 1.75; margin-bottom: 16px; }
    .intro-accent-box { background: var(--steel); color: var(--white); padding: 32px 28px; border-radius: var(--radius); border-left: 4px solid var(--rust); }
    .intro-accent-box p { font-size: 15px; line-height: 1.75; color: rgba(255,255,255,0.82); margin: 0; }
    .intro-accent-box strong { color: var(--white); font-weight: 600; }

    /* STEPS */
    .steps { background: var(--fog); padding: 80px 24px; }
    .steps-inner { max-width: var(--max-w); margin: 0 auto; }
    .steps-header { text-align: center; margin-bottom: 56px; }
    .steps-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; }
    .step-card { background: var(--white); border-radius: var(--radius); padding: 28px 26px; border-top: 3px solid transparent; transition: border-color 0.2s, box-shadow 0.2s; }
    .step-card:hover { border-top-color: var(--rust); box-shadow: 0 8px 28px rgba(0,0,0,0.08); }
    .step-marker { font-family: var(--font-display); font-size: 11px; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; color: var(--rust); margin-bottom: 10px; }
    .step-card h3 { font-family: var(--font-display); font-size: 20px; font-weight: 800; text-transform: uppercase; color: var(--steel); margin-bottom: 12px; line-height: 1.15; }
    .step-card p { font-size: 14.5px; color: var(--body-txt); line-height: 1.70; }

    /* BUILDING TYPES */
    .building-types { padding: 80px 24px; background: var(--white); }
    .building-types-inner { max-width: var(--max-w); margin: 0 auto; }
    .types-header { margin-bottom: 44px; }
    .types-header p { max-width: 600px; color: var(--muted); font-size: 15px; margin-top: 12px; line-height: 1.7; }
    .types-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2px; background: var(--fog); border: 1px solid #E2E5E9; border-radius: var(--radius); overflow: hidden; }
    .type-item { background: var(--white); padding: 22px 20px; display: flex; align-items: center; gap: 12px; font-family: var(--font-display); font-size: 15px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: var(--steel); transition: background 0.15s, color 0.15s; }
    .type-item:hover { background: var(--steel); color: var(--white); }
    .type-item:hover .type-dot { background: var(--rust-lt); }
    .type-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--rust); flex-shrink: 0; transition: background 0.15s; }

    /* WHY */
    .why { background: var(--steel); padding: 80px 24px; position: relative; overflow: hidden; }
    .why::after { content: ''; position: absolute; right: -60px; top: -60px; width: 400px; height: 400px; background: var(--rust); opacity: 0.06; border-radius: 50%; pointer-events: none; }
    .why-inner { max-width: var(--max-w); margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: start; position: relative; z-index: 1; }
    .why-left .section-eyebrow { color: var(--rust-lt); }
    .why-left .section-heading { color: var(--white); }
    .why-left p { font-size: 15px; color: rgba(255,255,255,0.72); line-height: 1.75; margin-bottom: 16px; }
    .trust-list { list-style: none; display: flex; flex-direction: column; gap: 16px; }
    .trust-item { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.10); border-radius: var(--radius); padding: 18px 20px; }
    .trust-item strong { display: block; font-family: var(--font-display); font-size: 15px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: var(--white); margin-bottom: 4px; }
    .trust-item span { font-size: 14px; color: rgba(255,255,255,0.58); line-height: 1.6; }

    /* PARTNER */
    .partner { background: var(--fog); padding: 72px 24px; }
    .partner-inner { max-width: var(--max-w); margin: 0 auto; display: grid; grid-template-columns: 1fr 2fr; gap: 56px; align-items: center; }
    .partner-badge { background: var(--white); border: 1px solid #DDE1E6; border-radius: var(--radius); padding: 36px 28px; text-align: center; }
    .partner-badge .partner-logo-placeholder { font-family: var(--font-display); font-size: 28px; font-weight: 800; color: var(--steel); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px; }
    .partner-badge small { display: block; font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--muted); }
    .partner-since { display: inline-block; margin-top: 16px; background: var(--rust); color: var(--white); font-family: var(--font-display); font-size: 12px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: var(--radius); }
    .partner-content p { font-size: 15px; color: var(--body-txt); line-height: 1.75; margin-bottom: 14px; }

    /* CTA */
    .cta-band { background: var(--rust); padding: 56px 24px; text-align: center; }
    .cta-band h2 { font-family: var(--font-display); font-size: clamp(28px, 4vw, 44px); font-weight: 800; text-transform: uppercase; color: var(--white); margin-bottom: 14px; }
    .cta-band p { font-size: 16px; color: rgba(255,255,255,0.82); margin-bottom: 28px; max-width: 520px; margin-left: auto; margin-right: auto; line-height: 1.65; }
    .cta-band-btn { display: inline-block; background: var(--white); color: var(--rust); font-family: var(--font-display); font-weight: 800; font-size: 15px; letter-spacing: 0.1em; text-transform: uppercase; padding: 14px 36px; border-radius: var(--radius); transition: background 0.2s, color 0.2s; }
    .cta-band-btn:hover { background: var(--steel); color: var(--white); }
    .cta-phone { display: block; margin-top: 16px; font-family: var(--font-display); font-size: 18px; font-weight: 700; color: rgba(255,255,255,0.85); letter-spacing: 0.06em; }

    /* FOOTER */
    .footer { background: var(--steel); padding: 36px 24px; text-align: center; }
    .footer p { font-size: 13px; color: rgba(255,255,255,0.40); line-height: 1.6; }
    .footer-loc { font-family: var(--font-display); font-size: 14px; letter-spacing: 0.08em; color: rgba(255,255,255,0.60); margin-bottom: 8px; }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .intro-grid, .why-inner, .partner-inner { grid-template-columns: 1fr; gap: 32px; }
      .hero-stats { gap: 28px; }
      .steps-grid { grid-template-columns: 1fr; }
    }
    @media (prefers-reduced-motion: reduce) { * { transition: none !important; animation: none !important; } }
  </style>
</head>
<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div>
      <span><a href="<?php echo $site_url; ?>/" target="_blank" rel="noopener noreferrer">Systems West Inc.</a></span>
      <span>Litchfield, MN 55355</span>
      <span>Third-Generation Builder Since the 1960s</span>
    </div>
    <div>
      <a href="<?php echo $phone_href; ?>"><?php echo htmlspecialchars($phone_display); ?></a>
    </div>
  </div>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner">
      <p class="hero-eyebrow">Steel Building Construction Guide</p>
      <h1>Your Complete<br /><em>Steel Building</em><br />Construction Guide</h1>
      <p class="hero-sub">
        From planning and permitting to steel erection and final inspection — Systems West guides every project start to finish with 58+ years of hands-on expertise across the Midwest.
      </p>
      <a href="<?php echo $contact_url; ?>" class="hero-cta">Start Your Project</a>

      <div class="hero-stats">
        <?php foreach ($stats as $stat): ?>
        <div class="stat-item">
          <div class="stat-num"><?php echo $stat['num']; ?><span><?php echo $stat['sup']; ?></span></div>
          <div class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section class="intro">
    <div class="intro-grid container">
      <div>
        <p class="section-eyebrow">About Systems West</p>
        <h2 class="section-heading">What Is a Steel Building Construction Guide — and Why Do You Need One?</h2>
        <p>Most clients come to us with a vision and a budget but no roadmap. A steel building construction guide walks you through the critical decisions that determine whether a project finishes on time, on budget, and built to last.</p>
        <p>Steel construction is not plug-and-play. Site conditions, local permitting requirements, load specifications, insulation choices, door configurations, and crane access all affect the timeline and final cost. Skipping steps or choosing the wrong contractor leads to delays, costly change orders, and buildings that underperform for decades.</p>
        <p>Our job at Systems West is to eliminate those surprises. We manage every phase of the construction process so that what you plan is exactly what you get.</p>
      </div>
      <div>
        <div class="intro-accent-box">
          <p>
            <strong><a href="<?php echo $site_url; ?>/" target="_blank" rel="noopener noreferrer" style="color:inherit; border-bottom: 1px solid rgba(255,255,255,0.35); padding-bottom:1px;">Systems West, Inc.</a> has been guiding clients through every step of the steel building construction process since the 1960s.</strong> Based in Litchfield, Minnesota, and serving communities across the Midwest including Hutchinson, Willmar, and St. Cloud, we are a third-generation family-owned company with over 58 years in the industry, 200+ completed projects, and a track record built on trust, integrity, and results that last for generations.
          </p>
          <br />
          <p>Building with steel is one of the smartest decisions a business owner, farmer, or developer can make. Pre-engineered steel buildings go up faster, last longer, and deliver more value per square foot than traditional construction. Getting there requires the right partner.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STEPS -->
  <section class="steps">
    <div class="steps-inner">
      <div class="steps-header">
        <p class="section-eyebrow">The Construction Process</p>
        <h2 class="section-heading">The Steel Building Construction Process: Step by Step</h2>
      </div>
      <div class="steps-grid">
        <?php foreach ($steps as $step): ?>
        <div class="step-card">
          <p class="step-marker">Step <?php echo $step['num']; ?></p>
          <h3><?php echo $step['title']; ?></h3>
          <p><?php echo $step['body']; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- BUILDING TYPES -->
  <section class="building-types">
    <div class="building-types-inner">
      <div class="types-header">
        <p class="section-eyebrow">Our Portfolio</p>
        <h2 class="section-heading">Steel Building Types We Build</h2>
        <p>Systems West has completed steel building projects across a wide range of industries and use cases. That cross-sector experience means we bring practical knowledge to every project — not just general construction know-how.</p>
      </div>
      <div class="types-list">
        <?php foreach ($building_types as $type): ?>
        <div class="type-item"><span class="type-dot"></span><?php echo $type; ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- WHY SYSTEMS WEST -->
  <section class="why">
    <div class="why-inner">
      <div class="why-left">
        <p class="section-eyebrow">Why Choose Us</p>
        <h2 class="section-heading">Why Systems West Is the Right Partner for Your Steel Building Project</h2>
        <p>Choosing a steel building contractor is not just about price. It is about who shows up on time, communicates honestly, and delivers a building that performs the way it was promised.</p>
        <p>Systems West has earned the trust of companies like A.M. Maus and Sons, Central City Grain, Fenton Motors, Forward Technology, Loftness, and Meeker Cooperative — businesses that depend on their buildings to support daily operations for decades.</p>
        <p>Our clients return to us because we treat every project like it carries the Systems West name, because it does. We serve Hutchinson, Litchfield, Willmar, St. Cloud, and surrounding Midwest communities.</p>
      </div>
      <ul class="trust-list">
        <?php foreach ($trust_items as $item): ?>
        <li class="trust-item">
          <strong><?php echo $item['title']; ?></strong>
          <span><?php echo $item['body']; ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- BUTLER PARTNER -->
  <section class="partner">
    <div class="partner-inner">
      <div class="partner-badge">
        <div class="partner-logo-placeholder">Butler Mfg.</div>
        <small>Trusted Building Partner</small>
        <span class="partner-since">Partner Since 1967</span>
      </div>
      <div class="partner-content">
        <p class="section-eyebrow">Our Trusted Manufacturer</p>
        <h2 class="section-heading">Built on a 58-Year Partnership</h2>
        <p>Since 1967, Systems West has chosen to partner with Butler Manufacturing — the world's leading pre-engineered steel building solutions company. Butler has been designing, manufacturing, and marketing metal building systems for over 100 years, and their products are the foundation of every steel building we deliver.</p>
        <p>As your trusted local Butler Builder, you get the best quality pre-engineered steel building in the industry, backed by our construction expertise to ensure your project is completed to the highest quality, on time, with no surprises, and within your budget.</p>
        <p>This long-standing relationship means we know and trust every product we install. Systems West and Butler will be there to support and service your building for its entire lifetime.</p>
      </div>
    </div>
  </section>

  <!-- CTA BAND -->
  <section class="cta-band">
    <h2>Your Dream Build Awaits</h2>
    <p>Ready to start your steel building project? Contact Systems West today and put 58+ years of Midwest construction experience to work for you.</p>
    <a href="<?php echo $contact_url; ?>" class="cta-band-btn">Get a Free Consultation</a>
    <a href="<?php echo $phone_href; ?>" class="cta-phone"><?php echo htmlspecialchars($phone_display); ?></a>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <p class="footer-loc">Systems West Inc. · 24054 MN Hwy 22, Litchfield, MN 55355</p>
    <p>Serving Hutchinson · Litchfield · Willmar · St. Cloud and surrounding Midwest communities</p>
  </footer>

</body>
</html>
